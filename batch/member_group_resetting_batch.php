<?php
/*
 * 연회원 종료일을 확인해서 기간이 지난 유저들은 연회원 유저에서 제외시킴
 * @author email: junwoong2@gmail.com
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	// 디비 접속
	$mysql_hostname = 'db.ontherich.co.kr';
	$mysql_username = 'therich';
	$mysql_password = '@ontherich2010';
	$mysql_database = 'dbtherich';
	$mysql_port 	= '3306';
	$mysql_charset 	= 'utf8';

	//1. DB 연결
	$connect = @mysql_connect($mysql_hostname.':'.$mysql_port, $mysql_username, $mysql_password); 
	if (!$connect) {
		echo '[DB연결실패] : '.mysql_error().'<br>'; 
		die('MySQL 서버에 연결할 수 없습니다.');
	} else {
		//echo '[DB연결성공]<br>';
	}

	//2. DB 선택
	@mysql_select_db($mysql_database, $connect) or die('DB 선택 실패');

	//3. 문자셋 지정
	mysql_query(' SET NAMES '.$mysql_charset);

	// 연회원 등업 게시판에 작성한 유저 리스트 가져오기
	$result = mysql_query('select * from xe_documents where module_srl=229 group by member_srl');
	$member_list = array();
	while ($row = mysql_fetch_array($result)) {
		$list = array (
					'document_srl' => $row['document_srl'],
					'member_srl' => $row['member_srl']
				);
		array_push($member_list, $list);
	}

	if (!$member_list) {
		echo "연회원 등업 게시판에 작성한 유저 리스트가 없음";
		exit;
	}

	// 연회원 등업 게시물의 유저를 대상으로 종료 날짜 확인
	$end_member_list = array();
	$date = date("Ymd");
	foreach ($member_list as $val) {
		$result = mysql_query('select value from xe_document_extra_vars where document_srl='.$val['document_srl'] . ' and var_idx=2');
		while ($row = mysql_fetch_array($result)) {
			if ($date > $row['value']) {
				array_push ($end_member_list, $val['member_srl']);
			}
		}
	}

	if (!$end_member_list) {
		echo '<script>alert("연회원 등업 게시물의 종료 날짜가 지난 유저는 없습니다.")</script>';
		echo '<script>document.location.href="http://ontherich.co.kr"</script>';		
		exit;
	}

	// 연회원 탈퇴 멤버 리스트
	$delete_member_list = array();
	foreach ($end_member_list as $member_srl) {
		$result = mysql_query('select * from xe_member_group_member where group_srl=135 and member_srl='.$member_srl);
		while($row = mysql_fetch_array($result)) {
			array_push ($delete_member_list, $member_srl);
		}
	}

	if (!$delete_member_list) {
		// 리다이렉트
		echo '<script>alert("기간이 만료된 연회원이 없습니다.")</script>';
		echo '<script>document.location.href="http://ontherich.co.kr"</script>';		
		exit;	
	}

	// 연회원 정보가 있는 디비 삭제
	foreach ($delete_member_list as $member_srl) {
		$sql = 'delete from xe_member_group_member where group_srl=135 and member_srl='.$member_srl;
		echo $sql. "<br>";
		if (mysql_query($sql) === true) {
			echo $member_srl." delete ok <br>";
		} else {
			echo $member_srl." delete fail <br>";
		}
	}

	//4. 연결 종료
	mysql_close($connect);

	// 리다이렉트
	echo '<script>alert("정상적으로 완료 되었습니다.\n관리자 페이지에서 캐시파일 재생성을 눌러주세요.")</script>';
	echo '<script>document.location.href="http://ontherich.co.kr/index.php?module=admin"</script>';
	exit;
?>