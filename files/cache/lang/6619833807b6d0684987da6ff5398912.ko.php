<?php
$lang->use_easyxe='모듈 활성화';
$lang->submanager_group='부관리자 그룹';
$lang->use_lock='페이지 잠금';
$lang->use_admin_bar='관리자 메뉴 사용';
$lang->about_easyxe_admin_bar='선택하면 상단 관리자 메뉴를 사용할 수 있습니다.';
$lang->manage_member='회원';
$lang->manage_document='게시글';
$lang->manage_comment='댓글';
$lang->manage_file='파일';
$lang->page_password='페이지 비밀번호';
$lang->page_auth_expire_time='페이지 잠금 유효 시간';
$lang->page_unlock_point='페이지 잠금 해제 포인트';
$lang->this_page_is_locked='이 페이지는 잠겨있습니다.';
if(!is_array($lang->page_auth_expire_time_units)){
	$lang->page_auth_expire_time_units = array();
}
$lang->page_auth_expire_time_units['MINUTES']='분';
$lang->page_auth_expire_time_units['HOURS']='시간';
$lang->page_auth_expire_time_units['DAYS']='일';
$lang->page_auth_expire_time_units['MONTHS']='개월';
$lang->easyxe_setting='EasyXE 설정';
$lang->msg_unlock_login_required='로그인 후 잠금 해제를 할 수 있습니다.';
$lang->msg_not_enough_to_point_for_unlock='포인트가 부족하여 잠금을 해제할 수 없습니다.';
$lang->source_layout='변경 전 레이아웃';
$lang->target_layout='변경 후 레이아웃';
