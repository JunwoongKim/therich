<?php if(!defined("__XE__")) exit(); $widget_info = new stdClass;$widget_info->widget = "pado_image_news";$widget_info->path = "./widgets/pado_image_news/";$widget_info->title = "파도 이미지 글 출력 ";$widget_info->description = "사용자가 선택한 게시판에 이미지와 글을 출력합니다.";$widget_info->version = "0.3";$widget_info->date = "20150210";$widget_info->homepage = "";$widget_info->license = "";$widget_info->license_link = "";$widget_info->widget_srl = $widget_srl;$widget_info->widget_title = $widget_title;$widget_info->author[0] = new stdClass;$widget_info->author[0]->name = "DING";$widget_info->author[0]->email_address = "pro_bi@naver.com";$widget_info->author[0]->homepage = "https://www.facebook.com/pages/%EB%94%A9-Ding/554701971272023?ref=hl";$widget_info->extra_var_count = "10";$widget_info->extra_var->order_target = new stdClass;$widget_info->extra_var->order_target->group = "";$widget_info->extra_var->order_target->name = "정렬 대상";$widget_info->extra_var->order_target->type = "select";$widget_info->extra_var->order_target->value = $vars->order_target;$widget_info->extra_var->order_target->description = "등록된 순서 또는 변경된 순서로 정렬을 할 수 있습니다.";$widget_info->extra_var->order_target->options["last_update"] = "최신글(수정된 글도 포함)";$widget_info->extra_var->order_target->options["readed_count"] = "조회수";$widget_info->extra_var->order_target->options["comment_count"] = "댓글 수";$widget_info->extra_var->notice_list = new stdClass;$widget_info->extra_var->notice_list->group = "";$widget_info->extra_var->notice_list->name = "공지사항";$widget_info->extra_var->notice_list->type = "select";$widget_info->extra_var->notice_list->value = $vars->notice_list;$widget_info->extra_var->notice_list->description = "등록된 순서 또는 변경된 순서로 정렬을 할 수 있습니다.";$widget_info->extra_var->notice_list->options["y,n"] = "둘다";$widget_info->extra_var->notice_list->options["y"] = "공지사항 만";$widget_info->extra_var->notice_list->options["n"] = "공지사항 제외";$widget_info->extra_var->image_isset = new stdClass;$widget_info->extra_var->image_isset->group = "";$widget_info->extra_var->image_isset->name = "이미지 여부";$widget_info->extra_var->image_isset->type = "select";$widget_info->extra_var->image_isset->value = $vars->image_isset;$widget_info->extra_var->image_isset->description = "이미지가 없는 게시판도 가져올지 결정한다.";$widget_info->extra_var->image_isset->options["image_able"] = "이미지만 있는 게시판";$widget_info->extra_var->image_isset->options["image_unable"] = "이미지가 없는 게시판도";$widget_info->extra_var->title_view = new stdClass;$widget_info->extra_var->title_view->group = "";$widget_info->extra_var->title_view->name = "타이틀 출력";$widget_info->extra_var->title_view->type = "select";$widget_info->extra_var->title_view->value = $vars->title_view;$widget_info->extra_var->title_view->description = "이미지가 없는 게시판도 가져올지 결정한다.";$widget_info->extra_var->title_view->options["view"] = "출력";$widget_info->extra_var->title_view->options["unview"] = "출력 안함";$widget_info->extra_var->title_name = new stdClass;$widget_info->extra_var->title_name->group = "";$widget_info->extra_var->title_name->name = "위젯 제목";$widget_info->extra_var->title_name->type = "text";$widget_info->extra_var->title_name->value = $vars->title_name;$widget_info->extra_var->title_name->description = "위젯이 출력될때 임의적인 제목입니다. ";$widget_info->extra_var->module_srls = new stdClass;$widget_info->extra_var->module_srls->group = "";$widget_info->extra_var->module_srls->name = "대상 모듈";$widget_info->extra_var->module_srls->type = "module_srl_list";$widget_info->extra_var->module_srls->value = $vars->module_srls;$widget_info->extra_var->module_srls->description = "선택하신 모듈에 등록된 글을 대상으로 합니다.";$widget_info->extra_var->limit_num = new stdClass;$widget_info->extra_var->limit_num->group = "";$widget_info->extra_var->limit_num->name = "출력하는 게시판 수";$widget_info->extra_var->limit_num->type = "text";$widget_info->extra_var->limit_num->value = $vars->limit_num;$widget_info->extra_var->limit_num->description = "빈칸으로 남겨두면 기본 값이 들어간다.(기본 값은 5)";$widget_info->extra_var->widget_title_length = new stdClass;$widget_info->extra_var->widget_title_length->group = "";$widget_info->extra_var->widget_title_length->name = "출력하는 위젯 타이틀 글자 수";$widget_info->extra_var->widget_title_length->type = "text";$widget_info->extra_var->widget_title_length->value = $vars->widget_title_length;$widget_info->extra_var->widget_title_length->description = "빈칸으로 남겨두면 최대 값이 들어간다.";$widget_info->extra_var->list_title_length = new stdClass;$widget_info->extra_var->list_title_length->group = "";$widget_info->extra_var->list_title_length->name = "출력하는 게시판 타이틀 글자 수";$widget_info->extra_var->list_title_length->type = "text";$widget_info->extra_var->list_title_length->value = $vars->list_title_length;$widget_info->extra_var->list_title_length->description = "빈칸으로 남겨두면 최대 값이 들어간다.";$widget_info->extra_var->list_content_length = new stdClass;$widget_info->extra_var->list_content_length->group = "";$widget_info->extra_var->list_content_length->name = "출력하는 게시판 내용 글자 수";$widget_info->extra_var->list_content_length->type = "text";$widget_info->extra_var->list_content_length->value = $vars->list_content_length;$widget_info->extra_var->list_content_length->description = "빈칸으로 남겨두면 최대 값이 들어간다."; ?>