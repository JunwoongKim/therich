<?php

class pado_ajax_newsWidget extends WidgetHandler
{
    function proc($args)
    {
        $ajaxContainer = [                              //idx[9] mid value
            $TITLE_NAME = $args->title_set,             //0
            $MODULE_SRL = $args->module_srl,            //1
            $LIST_COUNT = $args->list_count,            //2
            $TITLE_CUT = $args->title_num,              //3
            $CONTENT_CUT = $args->content_num,          //4
            $HOURS = -1,                                //5
            $NEW_MARK_TITLE = $args->new_mark_title,    //6
            $LAST_MARK_TITLE = $args->last_mark_title,  //7
            $MARK_DISPLAY =  $args->new_mark_display    //8
            //$real_time = $args->real_time               //10 (정식 버전에서 지원합니다.)
        ];

        //mid 값을 알아내기 위해서 module 함수를 탐색합니다.
        //$db_Modules = executeQueryArray('widgets.pado_ajax_newsWidget.getMenus');

        // 현재 단일 모듈이 어떤 mid인지 확인합니다.
        //foreach($db_Modules->data as $key => $o_Modules){
        //    if($o_Modules->module_srl == $ajaxContainer[1]){
        //        array_push($ajaxContainer, $module_Name = $o_Modules->mid);
        //    }
        //}

        //if(isset($args->real_time)) $ajaxContainer[10] = $args->real_time; else $ajaxContainer[10] = $args->real_time = 3000;
        if(isset($args->new_mark_title)) $ajaxContainer[6] = $args->new_mark_title; else $ajaxContainer[6] = $args->new_mark_title = "NEW";
        if(isset($args->last_mark_title)) $ajaxContainer[7] = $args->last_mark_title; else $ajaxContainer[7] = $args->last_mark_title = "지난글";

        if(isset($args->hours)) $ajaxContainer[5] = $args->hours; else $ajaxContainer[5] = $args->hours = -1;

        if(!$args->update_left) $args->update_left = -50;
        $update_left = "margin-left: ".$args->update_left."px";
        Context::set("padding_left", $update_left);

        if(!$args->context_left) $args->context_left = 55;
        $context_left = "padding-left: ".$args->context_left."px";
        Context::set("margin_left", $context_left);

        //타이틀 이름, 모듈 주소, 리스트 길이 저장합니다.
        Context::set("ajaxContainer",$ajaxContainer);
        //템플릿 경로를 설정합니다.
        $tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);

        // 템플릿 파일명
        $tpl_file = 'index';
        // 템플릿 컴파일
        $oTemplate = &TemplateHandler::getInstance();
        $output = $oTemplate->compile($tpl_path, $tpl_file);
        return $output;
    }
}

?>
