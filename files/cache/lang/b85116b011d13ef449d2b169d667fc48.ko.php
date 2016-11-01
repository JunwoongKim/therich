<?php
$lang->admin='관리자';
$lang->subtitle_primary='기본';
$lang->subtitle_advanced='고급';
$lang->subtitle_etc='기타';
$lang->current_state='현황';
$lang->latest_documents='최근 글';
$lang->latest_comments='최근 댓글';
$lang->latest_trackbacks='최근 엮인글';
$lang->notices='공지';
$lang->favorites='즐겨찾기';
$lang->admin_info='관리자 정보';
$lang->admin_index='관리자 초기 페이지';
$lang->control_panel='대시보드';
$lang->site_title='사이트 제목';
$lang->start_module='홈페이지';
$lang->about_site_title='세부 설정에서 사이트제목을 설정하지 않았을 경우 노출되는 제목입니다.';
$lang->about_start_module='사이트 접속 시 기본으로 호출될 페이지 지정할 수 있습니다.';
$lang->select_site='사이트 선택';
$lang->select_module_type='분류 선택';
$lang->select_module_instance='페이지 선택';
if(!is_array($lang->module_category_title)){
	$lang->module_category_title = array();
}
$lang->module_category_title['service']='서비스 관리';
$lang->module_category_title['member']='회원 관리';
$lang->module_category_title['content']='정보 관리';
$lang->module_category_title['statistics']='통계 열람';
$lang->module_category_title['construction']='사이트 설정';
$lang->module_category_title['utility']='기능 설정';
$lang->module_category_title['interlock']='연동 설정';
$lang->module_category_title['accessory']='부가 기능 설정';
$lang->module_category_title['migration']='데이터 관리/복원';
$lang->module_category_title['system']='시스템 관리';
if(!is_array($lang->menu_gnb)){
	$lang->menu_gnb = array();
}
$lang->menu_gnb['dashboard']='대시보드';
$lang->menu_gnb['menu']='사이트 제작/편집';
$lang->menu_gnb['user']='회원';
$lang->menu_gnb['content']='콘텐츠';
$lang->menu_gnb['configuration']='설정';
$lang->menu_gnb['advanced']='고급';
$lang->advanced_settings='고급 설정';
$lang->newest_news='최신 소식';
$lang->env_setup='환경 설정';
$lang->default_url='기본 URL';
$lang->about_default_url='여러 사이트를 운영할 때 기본 URL이 필요합니다. XE 설치 경로를 포함한 URL을 입력하세요. (예: http://도메인/설치경로)';
$lang->env_information='환경 정보';
$lang->current_version='설치된 버전';
$lang->current_path='설치된 경로';
$lang->released_version='최신 버전';
$lang->about_download_link='최신 버전이 배포되었습니다. download 링크를 클릭하면 다운 받을 수 있습니다.';
$lang->item_addon='애드온 목록';
$lang->item_widget='위젯 목록';
$lang->item_layout='레이아웃 목록';
$lang->module_name='모듈 이름';
$lang->addon_name='애드온 이름';
$lang->version='버전';
$lang->table_count='테이블 수';
$lang->installed_path='설치 경로';
$lang->cmd_shortcut_management='메뉴 편집하기';
$lang->msg_is_not_administrator='관리자만 접속이 가능합니다.';
$lang->msg_manage_module_cannot_delete='모듈, 애드온, 레이아웃, 위젯 모듈의 바로가기는 삭제 불가능합니다.';
$lang->msg_default_act_is_null='기본 관리자 Action이 지정되어 있지 않아 바로가기 등록을 할 수 없습니다.';
$lang->welcome_to_xe='XE 관리자';
$lang->about_lang_env='처음 방문하는 사용자들의 언어 설정을 동일하게 하려면, 원하는 언어로 변경 후 아래 [저장] 버튼을 클릭하면 됩니다.';
$lang->xe_license='XE는 LGPL을 따릅니다.';
$lang->yesterday='어제';
$lang->today='오늘';
$lang->default_lang='기본 언어 선택';
$lang->lang_select='지원 언어 선택';
$lang->about_recompile_cache='쓸모 없어졌거나 잘못된 캐시파일들을 지우시겠습니까?';
$lang->confirm_run='오랜 시간이 걸릴 수 있습니다. 실행하시겠습니까?';
$lang->use_ssl='<abbr title="Secure Sockets Layer">SSL</abbr> 사용';
if(!is_array($lang->ssl_options)){
	$lang->ssl_options = array();
}
$lang->ssl_options['none']='사용안함';
$lang->ssl_options['optional']='선택적으로';
$lang->ssl_options['always']='항상 사용';
$lang->about_use_ssl='\'선택적으로\'는 회원가입, 정보수정 등의 지정된 동작(action)에서 보안접속(SSL)을 사용합니다. \'항상 사용\'은 모든 서비스에 SSL을 사용 합니다. SSL 환경이 갖춰지지 않은 상태에서 SSL을 사용할 경우 접속이 되지 않을 수 있으니 주의 바랍니다.';
$lang->server_ports='서버 포트 지정';
$lang->about_server_ports='HTTP는 80, HTTPS는 443 이 아닌, 다른 포트를 사용할 경우에 포트를 지정해 주어야 합니다.';
$lang->use_db_session='인증 세션 DB 사용';
$lang->about_db_session='인증 시 사용되는 PHP 세션을 DB로 사용하는 기능입니다. 웹서버의 사용률이 낮은 사이트에서는 비활성화시 사이트 응답 속도가 향상될 수 있습니다. 단, 현재 접속자를 구할 수 없어 관련된 기능을 사용할 수 없게 됩니다.';
$lang->qmail_compatibility='큐메일(Qmail) 사용';
$lang->sftp='SFTP 사용';
$lang->ftp_get_list='목록 가져오기';
$lang->ftp_remove_info='FTP 정보 삭제';
$lang->msg_find_xe_path_fail='XE 설치 경로를 자동으로 찾지 못하였습니다. 수동 설정해주세요.';
$lang->msg_ftp_invalid_path='FTP 경로(Path)를 읽을 수 없습니다.';
$lang->use_ftp_passive_mode='Passive 모드 사용';
$lang->use_sftp_support='SFTP 사용';
$lang->disable_sftp_support='SFTP를 사용하시려면 ssh2 PHP 모듈을 설치하셔야 합니다.';
$lang->msg_self_restart_cache_engine='Memcached 또는 캐쉬데몬을 재시작 해주세요.';
$lang->autoinstall='쉬운 설치';
$lang->last_week='지난 주';
$lang->this_week='이번 주';
$lang->trash='휴지통';
$lang->accusation='신고';
$lang->status='상태';
$lang->action='실행';
$lang->use_rewrite='짧은 주소 사용';
$lang->timezone='현지 표준시';
$lang->use_mobile_view='모바일 뷰 사용';
$lang->about_use_mobile_view='모바일 기기로 접속시 모바일 페이지를 보여줍니다.';
$lang->thumbnail_type='썸네일 생성 방식';
$lang->input_footer_script='하단(footer) 스크립트';
$lang->detail_input_footer_script='최하단에 코드를 삽입합니다. 관리자 페이지에서는 수행되지 않습니다.';
$lang->corp='Crop(잘라내기)';
$lang->ratio='Ratio(비율 맞추기)';
$lang->admin_ip_limit='관리자 IP대역';
$lang->local_ip_address='로컬 IP 주소';
$lang->about_admin_ip_limit='관리자 페이지로 접근가능한 IP대역을 지정합니다. 해당 IP에 대해서만 관리자 페이지로 접근이 가능하므로 주의 바랍니다. IP대역 정보는 /files/config/db.config.php 파일에 저장됩니다. 여러개의 항목은 줄을 바꾸어 입력하세요.';
$lang->detail_about_ftp_info='FTP 정보를 입력하면 쉬운 설치를 가능하도록 합니다. FTP 정보는 files/config/ftp.config.php 파일에 저장됩니다. 쉬운 설치가 불가능한 경우 PHP의 safe_mode를 On으로 변경해야 합니다.';
$lang->allow_use_favicon='파비콘 지정';
$lang->about_use_favicon='16 x 16 크기의<em>*.ico</em> 파일 업로드 권장.';
$lang->allow_use_mobile_icon='모바일 홈 화면 아이콘';
$lang->detail_use_mobile_icon='57 x 57 또는 114 x 114 크기의<em>*.png</em> 파일만 업로드 가능.';
$lang->use_sso='<abbr title="Single Sign On">SSO</abbr> 사용';
$lang->about_use_sso='사용자가 한 번만 로그인하면 기본 사이트와 가상 사이트에 동시에 로그인이 됩니다. 가상 사이트를 사용할 때만 필요합니다.';
$lang->about_arrange_session='세션을 정리하시겠습니까?';
$lang->cmd_clear_session='세션 정리';
$lang->save='저장';
$lang->view='보기';
$lang->select='선택';
$lang->move='이동';
$lang->modify='수정';
$lang->restore='복원';
$lang->delete='삭제';
$lang->add='추가';
$lang->selected_layout='선택한 레이아웃';
$lang->selected_skin='선택한 %s 스킨';
$lang->no_selected_skin='선택한 %s 스킨 없음';
$lang->no_selected_skin_desc='선택한 테마에는 이 항목에 대한 스킨 정보가 없습니다. 스킨을 직접 선택하세요.';
$lang->no_select='선택안함';
$lang->admin_logo='관리자 페이지 로고';
$lang->admin_title='관리자 페이지 제목';
$lang->admin_menu_add='관리자 메뉴 추가';
$lang->bug_report='버그 리포트';
$lang->theme_setting='테마 설정';
$lang->skin_setting='스킨 설정';
$lang->msg_thumbnail_not_exist='썸네일이 없습니다';
$lang->user_theme='사용자 테마';
$lang->user_define='사용자 정의 테마';
$lang->by_you='사용자 설정';
$lang->update_available='업데이트 가능';
$lang->need_update_and_table='DB Table 생성과 모듈 업데이트 필요';
$lang->need_update='모듈 업데이트 필요';
$lang->need_table='DB Table 생성 필요';
$lang->admin_menu_setup='관리자 메뉴 설정';
$lang->no_data='등록된 데이터가 없습니다.';
$lang->cmd_admin_menu_reset='관리자 메뉴 초기화';
$lang->confirm_reset_admin_menu='관리자 메뉴를 초기화하시겠습니까?';
$lang->cmd_view_server_env='서버정보출력';
$lang->server_env='서버 정보';
$lang->ftp_form_title='FTP 계정 정보 입력';
$lang->ftp='FTP';
$lang->ftp_host='FTP 서버 주소';
$lang->ftp_port='FTP port';
$lang->about_ftp_password='비밀번호는 FTP 경로 확인을 위한 FTP 접속 시 필요하며 사용 후 저장하지 않습니다.';
$lang->cmd_check_ftp_connect='FTP 접속 확인';
$lang->msg_safe_mode_ftp_needed='PHP의<strong>safe_mode=On</strong>일 경우 XE의 정상적인 동작을 돕습니다.';
$lang->msg_safe_mode_ftp_needed2='모듈의 쉬운 설치 또는 업데이트가 가능해 집니다.';
$lang->msg_safe_mode_ftp_config='이 정보는<strong>files/config/ftp.config.php</strong> 파일에 저장 됩니다. 설치 후 환경설정 페이지에서도 등록, 변경, 제거 할 수 있습니다.';
$lang->msg_ftp_no_directory='FTP 접속에 성공했으나, 디렉토리 정보를 읽어올 수 없습니다. 서버 설정을 확인해주세요.';
$lang->msg_ftp_mkdir_fail='FTP를 이용한 디렉토리 생성 명령에 실패했습니다. FTP 서버의 설정을 확인해주세요.';
$lang->msg_ftp_chmod_fail='FTP를 이용한 디렉토리의 속성 변경에 실패했습니다. FTP 서버의 설정을 확인해주세요.';
$lang->msg_ftp_connect_success='FTP 접속 및 인증에 성공했습니다.';
$lang->ftp_path_title='FTP 경로 정보 입력';
$lang->ftp_installed_realpath='설치된 XE의 절대경로';
$lang->msg_ftp_installed_ftp_realpath='설치된 XE의 FTP 경로';
$lang->admin_setup='관리자 설정';
$lang->open_all='모두 펼치기';
$lang->close_all='모두 접기';
$lang->desktop_settings='PC 설정';
$lang->mobile_settings='모바일 설정';
$lang->details='자세히';
$lang->available_new_version='새 버전을 사용할 수 있습니다';
$lang->uv='순 방문자';
$lang->pv='페이지 뷰';
$lang->this_week='이번주';
$lang->next_week='다음주';
$lang->last_week='지난주';
$lang->mon='월';
$lang->tue='화';
$lang->wed='수';
$lang->thu='목';
$lang->fri='금';
$lang->sat='토';
$lang->sun='일';
$lang->checkBrowserIE8='IE8 이하의 브라우저 사용시 관리자페이지가 정상동작 하지 않을 수 있습니다.';
$lang->subtitle_sitelock='사이트 잠금';
$lang->use_sitelock='사이트 잠금 사용';
$lang->sitelock_whitelist='접근 허용 IP';
$lang->sitelock_title='안내문 제목';
$lang->sitelock_message='안내문 내용';
$lang->sitelock_message_help='HTML 태그를 사용할 수 있습니다.';
$lang->sitelock_warning_whitelist='이곳에 관리자의 IP를 반드시 포함해야 합니다.<br />만약 접근이 차단된 경우 \'./files/config/db.config.php\' 파일에서 `\'use_sitelock\' => \'<strong>Y</strong>\'`를 `\'use_sitelock\' => \'<strong>N</strong>\'`으로 변경하여 차단을 해제할 수 있습니다.<br />사이트 잠금 디자인 파일의 위치는 \'./common/tpl/sitelock.html\' 입니다.';
$lang->your_ip='접속하신 IP';
$lang->sitelock_in_use='사이트 잠금을 사용중입니다.';
$lang->about_sitelock_in_use='관리자 페이지에서 허용한 IP를 제외한 사용자는 접속할 수 없습니다.';
