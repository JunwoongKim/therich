<?php
    /**
     * @class logged_members 
     * @author zero (zero@nzeo.com)
     * @brief 로그인 사용자의 목록을 출력합니다.
     * @version 0.1
     **/

    class talkbox extends WidgetHandler {

        /**
         * @brief 위젯의 실행 부분
         *
         * ./widgets/위젯/conf/info.xml 에 선언한 extra_vars를 args로 받는다
         * 결과를 만든후 print가 아니라 return 해주어야 한다
         **/
        function proc($args) {

            $list_count = (int)$args->list_count;
            if(!$list_count) $list_count = 5;

            $use_mid = $args->use_mid;
            if($use_mid == 'mid') $mid = Context::get('mid');
            else $mid = null;

            $obj->list_count = $list_count;
            $obj->mid = $mid;

            // session model 객체 생성
            $oSessionModel = &getModel('session');
            $output = $oSessionModel->getLoggedMembers($obj);
            $widget_info->member_list = $output->data;
            $widget_info->logged_member_count = $output->total_count;
// 수정시작
            //메시지톡 종류
            $widget_info->messagetalk = $args->messagetalk;
            //메시지톡xe 설치경로
            $widget_info->xe_path = $args->xe_path;
            //컬러셋
            $widget_info->title_color = $args->title_color;
            //사용자 목록 박스 높이
            $widget_info->userbox_height = (int)$args->userbox_height;
            //톡박스 타이틀 사용유무
            $widget_info->message_title = $args->message_title;
// 수정끝
            Context::set('widget_info', $widget_info);
            // 템플릿의 스킨 경로를 지정 (skin, colorset에 따른 값을 설정)
            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
            Context::set('colorset', $args->colorset);

            // 템플릿 파일을 지정
            $tpl_file = 'list';

            // 템플릿 컴파일
            $oTemplate = &TemplateHandler::getInstance();
            $output = $oTemplate->compile($tpl_path, $tpl_file);
            return $output;
        }
    }
?>
