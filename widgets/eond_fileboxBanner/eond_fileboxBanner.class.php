<?php
    /**
     * @class xe_news
     * @author zero (zero@nzeo.com)
     * @brief XE공식사이트의 배너 위젯
     * @version 0.1
     **/

    class eond_fileboxBanner extends WidgetHandler {

        /**
         * @brief 위젯의 실행 부분
         *
         * ./widgets/위젯/conf/info.xml 에 선언한 extra_vars를 args로 받는다
         * 결과를 만든후 print가 아니라 return 해주어야 한다
         **/
        function proc($args) {
            foreach(array('title', 'url', 'img') as $type){
                for($i=1;$i<=20;$i++){
                    $key = $type . "_" . $i;
                    $widget_info->$key = $args->$key;
                }
            }
            Context::set('widget_info', $widget_info);
            

            $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
            Context::set('colorset', $args->colorset);

            $tpl_file = 'skin'; // 위젯 스킨의 템플릿 파일명을 지칭함. 해당 위젯의 스킨 파일은 이 이름을 써야 동작함.

            $oTemplate = &TemplateHandler::getInstance();
            return $oTemplate->compile($tpl_path, $tpl_file);
        }
    }
?>
