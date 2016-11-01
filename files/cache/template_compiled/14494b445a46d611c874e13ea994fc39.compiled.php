<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/skins/sky_at_board','_header.html') ?>
<!--#Meta:modules/attendance/skins/sky_at_board/js/at.js--><?php $__tmp=array('modules/attendance/skins/sky_at_board/js/at.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/skins/sky_at_board/filter','insert_attendance.xml');$__xmlFilter->compile(); ?>
<?php $__Context->year=substr($__Context->selected_date,0,4) ?>
<?php $__Context->month=substr($__Context->selected_date,4,2) ?>
<?php $__Context->day=substr($__Context->selected_date,6,2) ?>
<?php $__Context->week=$__Context->oAttendanceModel->getWeek($__Context->selected_date) ?>
<script type="text/javascript">
    var warn_msg = '<?php echo $__Context->lang->attend_warn ?>';
</script>
<div id="att_board_body">
    
    <?php if($__Context->is_logged){ ?>
	    
	    <?php if($__Context->oAttendanceModel->getIsChecked($__Context->logged_info->member_srl) == 0 && $__Context->is_available == 0 ){ ?>
            <?php if($__Context->config->about_admin_check!='no'){ ?>
                <div class="attendance_button">
                    <p class="at_info_msg"><?php echo $__Context->lang->input_text ?></p>
	                <form action="./" method="post" id="click_button" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		                <input type="text" name="greetings" class="a_text" onclick="this.value='';" onkeypress="return text_entercheck(event); "/>
		                <input type="hidden" name="about_position" value="yes" />
		                 <span class="buttonOfficial"><button type="button" onclick="return attendance_check();">출석체크</button></span>
	                </form>
                </div>
            <?php }else{ ?>
                <?php if($__Context->logged_info->is_admin != 'Y'){ ?>
                    <div class="attendance_button">
                        <p class="at_info_msg"><?php echo $__Context->lang->input_text ?></p>
	                    <form action="./" method="post" id="click_button" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		                    <input type="text" name="greetings" class="a_text" onclick="this.value='';" onkeypress="return text_entercheck(event); "/>
		                    <input type="hidden" name="about_position" value="yes" />
		                    <span class="buttonOfficial"><button type="button" onclick="return attendance_check();">출석체크</button></span>
	                    </form>
                    </div>
                <?php } ?>
            <?php } ?>
	    <?php } ?>
    <?php } ?>
    
    <div class="point_list" id="point_list">
        <ul style="line-height:1.6;">
            <li><?php echo $__Context->lang->attendance_add_point ?> : <?php echo $__Context->config_data->add_point ?></li>
            <li><?php echo $__Context->lang->attendance_first_point ?> : <?php echo $__Context->config_data->first_point ?></li>
            <li><?php echo $__Context->lang->attendance_second_point ?> : <?php echo $__Context->config_data->second_point ?></li>
            <li><?php echo $__Context->lang->attendance_third_point ?> : <?php echo $__Context->config_data->third_point ?></li>
            <li><?php echo $__Context->lang->attendance_yearly_point ?> : <?php echo $__Context->config_data->yearly_point ?></li>
            <li><?php echo $__Context->lang->attendance_monthly_point ?> : <?php echo $__Context->config_data->monthly_point ?></li>
            <li><?php echo $__Context->lang->attendance_weekly_point ?> : <?php echo $__Context->config_data->weekly_point ?></li>
            <?php if($__Context->config_data->target_day==$__Context->selected_date && $__Context->config_data->about_target == 'yes'){ ?><li><?php echo $__Context->lang->attendance_target_point ?> : <?php echo $__Context->config_data->target_point ?></li><?php } ?>
            <?php if($__Context->config_data->about_continuity=='yes'){ ?>
                <li><?php echo $__Context->lang->attendance_continuity_day ?> : <?php echo $__Context->config_data->continuity_day;
echo $__Context->lang->attendance_after_day ?></li>
                <li><?php echo $__Context->lang->attendance_continuity_point ?> : <?php echo $__Context->config_data->continuity_point ?></li>
            <?php } ?>
            <?php if($__Context->config_data->about_diligence_yearly == 'yes'){ ?>
                <li><?php echo $__Context->lang->attendance_diligence_yearly_point ?> : <?php echo $__Context->config_data->diligence_yearly_point ?>(<?php echo $__Context->config_data->diligence_yearly;
echo $__Context->lang->attendance_after_day ?>)</li>
            <?php } ?>
            <?php if($__Context->config_data->about_diligence_monthly == 'yes'){ ?>
                <li><?php echo $__Context->lang->attendance_diligence_monthly_point ?> : <?php echo $__Context->config_data->diligence_monthly_point ?>(<?php echo $__Context->config_data->diligence_monthly;
echo $__Context->lang->attendance_after_day ?>)</li>
            <?php } ?>
            <?php if($__Context->config_data->about_diligence_weekly == 'yes'){ ?>
                <li><?php echo $__Context->lang->attendance_diligence_weekly_point ?> : <?php echo $__Context->config_data->diligence_weekly_point ?>(<?php echo $__Context->config_data->diligence_weekly;
echo $__Context->lang->attendance_after_day ?>)</li>
            <?php } ?>
        </ul>
        
        <?php if($__Context->is_logged){ ?>
        <div class="calendar_view" id="calendar_view">
            <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/attendance/skins/sky_at_board','calendar.html') ?>
        </div>
        <?php } ?>
    </div>
    
    <div class="at_top_box">
        <p class="at_date_pick">
            <a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->month, $__Context->day-1, $__Context->year)),'Ymd')) ?>">←</a>
             <a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis'),"Ymd")) ?>"> <?php echo $__Context->year ?>-<?php echo $__Context->month ?>-<?php echo $__Context->day ?> </a>
            <a href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->month, $__Context->day+1, $__Context->year)),'Ymd')) ?>"> →</a>
        </p>
        <p class="buttons_box">
            
            <?php if($__Context->module_info->display_setup_button!="N" && ($__Context->logged_info->is_admin=="Y" || $__Context->grant->manager == 1) ){ ?>
                <a href="<?php echo getUrl('module','','mid','attendance','document','','act','dispAttendanceAdminBoardConfig') ?>">※<?php echo $__Context->lang->cmd_setup ?></a> |
            <?php } ?>
            <?php if($__Context->logged_info->is_admin=='Y'){ ?>
                <a href="<?php echo getUrl('module','admin','act','dispAdminAttendanceList','mid','') ?>" onclick="window.open(this.href);return false;" alt="<?php echo $__Context->lang->attendance_module;
echo $__Context->lang->cmd_management ?>" >※<?php echo $__Context->lang->cmd_management ?></a>  |
            <?php } ?>
                <?php if($__Context->is_logged){ ?>
                    <a id="calendar_click" href="#point_list" alt="<?php echo $__Context->lang->attend_calendar ?>"><?php echo $__Context->lang->attend_point_list ?>&<?php echo $__Context->lang->attend_calendar ?></a>
                <?php }else{ ?><a id="list_open" href="#point_list" ><?php echo $__Context->lang->attend_point_list ?></a>
                <?php } ?>
        </p>
    </div>
    
    <?php if($__Context->module_info->order_type=='desc'){ ?>
        <?php $__Context->position=($__Context->module_info->start_num)-($__Context->module_info->list_count*($__Context->oAttendance->page-1)) ?>
    <?php }else{ ?>
        <?php $__Context->position=1+($__Context->oAttendance->page-1)*$__Context->module_info->list_count ?>
    <?php } ?>
    <table class="at_board_title" cellspacing="0">
        <tbody>
        <?php if($__Context->oAttendanceAdminModel->getTodayTotalCount($__Context->selected_date)==0){ ?>
        <tr class="board_title">
            <td><?php echo $__Context->lang->attend_no_checked ?></td>
        </tr>
        <?php }else{ ?>
        <tr class="board_title" >
            <td style="width:30px; "><?php echo $__Context->lang->position ?></td>
            <td><?php echo $__Context->lang->greetings ?></td>
            <td style="width:80px; "><?php echo $__Context->lang->nick_name ?></td>
            <?php if($__Context->module_info->display_username == 'Y'){ ?><td style="width:80px;"><?php echo $__Context->lang->user_name ?></td><?php } ?>
            <?php if($__Context->module_info->display_user_id == 'Y'){ ?><td style="width:80px;"><?php echo $__Context->lang->user_id ?></td><?php } ?>
            <td style="width:60px; "><?php echo $__Context->lang->time ?></td>
            <td style="width:100px;"><?php echo $__Context->lang->today_added_point ?></td>
            <?php if($__Context->module_info->display_ip_address == 'Y'){ ?><td style="width:100px;"><?php echo $__Context->lang->ipaddress ?></td><?php } ?>
            <?php if($__Context->logged_info->is_admin=="Y" && $__Context->grant->manager == 1){ ?><td style="width:30px;"><?php echo $__Context->lang->cmd_modify ?></td><?php } ?>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    
    
    <?php if($__Context->oAttendance->data&&count($__Context->oAttendance->data))foreach($__Context->oAttendance->data as $__Context->data){ ?>
        <?php $__Context->is_perfect=$__Context->oAttendanceModel->isPerfect($__Context->data->member_srl, $__Context->selected_date) ?>
        <?php $__Context->weekly = $__Context->oAttendanceModel->getWeeklyData($__Context->data->member_srl, $__Context->week) ?>
            <?php $__Context->member = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->data->member_srl) ?>
            <?php if(ereg("^#[0-9]+$",$__Context->data->greetings)){ ?>
                <?php $__Context->length_greetings = strlen($__Context->data->greetings) -1 ?>
                <?php $__Context->oDocument = $__Context->oDocumentModel->getDocument(substr($__Context->data->greetings,1,$__Context->length_greetings)) ?>
                <?php if($__Context->oDocument->document_srl){ ?>
                    <?php $__Context->exist_document = 1 ?>
                <?php }else{ ?>
                    <?php $__Context->exist_document = 0 ?>
                <?php } ?>
            <?php }else{ ?>
                <?php $__Context->exist_document = 0 ?>
            <?php } ?>
            <table cellspacing="0" class="table_body">
            <tbody>
            <tr class="lines">
                <td style="width:30px; text-align:center;"><?php echo $__Context->position ?></td>
                <td class="at_greetings_cut">
                    <?php if($__Context->data->greetings){ ?>
                        <?php if($__Context->exist_document == 1){ ?>
                            <a href="#<?php echo $__Context->oDocument->document_srl ?>" onclick="documentView('d_<?php echo $__Context->oDocument->document_srl ?>')"><?php echo cut_str($__Context->oDocument->getContentText(text),$__Context->module_info->greetings_cut_size,'...') ?></a>
                        <?php }else{ ?>
                            <?php $__Context->greetings_filtering = str_replace('<','&lt;',$__Context->data->greetings) ?>
                            <?php if($__Context->data->greetings!='^admin_checked^' && $__Context->data->greetings!='^auto^'){;
echo cut_str($__Context->greetings_filtering, $__Context->module_info->greetings_cut_size, '...') ?>
                            <?php }elseif($__Context->data->greetings=='^admin_checked^'){;
echo $__Context->lang->attendance_admin_checked ?>
                            <?php }elseif($__Context->data->greetings=='^auto^'){;
echo $__Context->lang->attend_auto_check ?>
                            <?php }else{;
echo $__Context->lang->default_greetings ?>
                            <?php } ?>
                        <?php } ?>
                    <?php }else{ ?>
                        <?php echo $__Context->lang->attend_no_greetings ?>
                    <?php } ?>
                </td>
                <td style="width:80px;"><div class="member_<?php echo $__Context->member->member_srl ?>"><?php echo $__Context->member->nick_name ?></div></td>
                <?php if($__Context->module_info->display_username == 'Y'){ ?><td style="width:80px;"><?php echo $__Context->member->user_name ?></td><?php } ?>
                <?php if($__Context->module_info->display_user_id == 'Y'){ ?><td style="width:80px;"><?php echo $__Context->member->user_id ?></td><?php } ?>
                <td style="width:60px; text-align:center;"><?php echo substr($__Context->data->regdate,8,2).":".substr($__Context->data->regdate,10,2).":".substr($__Context->data->regdate,12,2) ?></td>
                <td style="width:100px; text-align:center; "><?php if($__Context->module_info->display_bonus=='Y'){ ?><a onclick="bonusView('bonus_<?php echo $__Context->member->member_srl ?>')" href="#bonus_<?php echo $__Context->member->member_srl ?>"><?php };
echo $__Context->data->today_point;
if($__Context->module_info->display_bonus=='Y'){ ?></a><?php } ?></td>
                <?php if($__Context->module_info->display_ip_address == 'Y'){ ?>
                <td style="width:100px; text-align:center;">
                    <?php if($__Context->data->ipaddress == 'none'){ ?>
                        <?php echo $__Context->data->ipaddress ?>
                    <?php }elseif(!$__Context->data->ipaddress){ ?>
                        <?php echo $__Context->lang->attend_warn_ip ?>
                    <?php }else{ ?>
                        <?php if($__Context->data->member_srl == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin =='Y'){ ?>
                            <?php echo $__Context->data->ipaddress ?>
                        <?php }else{ ?>
                            <?php $__Context->ip_tmp = explode('.',$__Context->data->ipaddress) ?>
                            <?php $__Context->i=0;
if($__Context->ip_tmp&&count($__Context->ip_tmp))foreach($__Context->ip_tmp as $__Context->ip){;
if($__Context->i==0 || $__Context->i==1){;
$__Context->i++ ?>*.<?php }elseif($__Context->i==2){;
$__Context->i++;
echo $__Context->ip ?>.<?php }else{;
$__Context->i++;
echo $__Context->ip;
};
} ?>
                        <?php } ?>
                    <?php } ?>
                </td>
                <?php } ?>
                <?php if($__Context->logged_info->is_admin=="Y" && $__Context->grant->manager == 1){ ?><td style="width:30px; text-align:center;"><a href="<?php echo getUrl('act','dispAttendanceAdminModifyAttendance','mid','attendance','attendance_srl',$__Context->data->attendance_srl,'selected_date',$__Context->selected_date) ?>"><?php echo $__Context->lang->cmd_modify ?></a></td><?php } ?>
            </tr>
            </tbody>
            </table>
            <?php if($__Context->module_info->display_bonus=='Y'){ ?>
            <div class="at_greetings" id="bonus_<?php echo $__Context->member->member_srl ?>">
			        <?php if($__Context->member->user_id){ ?>
                    <ul>
                        <li><?php echo $__Context->lang->attendance_add_point ?> : <?php echo $__Context->config_data->add_point ?></li>
		                <?php if($__Context->position==1 && $__Context->data->greetings!='^admin_checked^'){ ?>
			                <li><?php echo $__Context->lang->attendance_first_point ?> : <?php echo $__Context->config_data->first_point ?></li>
		                <?php }elseif($__Context->position==2 && $__Context->data->greetings!='^admin_checked^'){ ?>
                            <li><?php echo $__Context->lang->attendance_second_point ?> : <?php echo $__Context->config_data->second_point ?></li>
		                <?php }elseif($__Context->position==3 && $__Context->data->greetings!='^admin_checked^'){ ?>
                            <li><?php echo $__Context->lang->attendance_third_point ?> : <?php echo $__Context->config_data->third_point ?></li>
                        <?php } ?>
			            <?php if($__Context->is_perfect->yearly_perfect){ ?><li><?php echo $__Context->lang->attendance_yearly_point ?> : <?php echo $__Context->config_data->yearly_point ?></li><?php } ?>
			            <?php if($__Context->is_perfect->monthly_perfect){ ?><li><?php echo $__Context->lang->attendance_monthly_point ?> : <?php echo $__Context->config_data->monthly_point ?></li><?php } ?>
			            <?php if($__Context->weekly->weekly == 7 && $__Context->selected_date == $__Context->week->sunday){ ?><li><?php echo $__Context->lang->attendance_weekly_point ?> : <?php echo $__Context->config_data->weekly_point ?></li><?php } ?>
			            <?php if($__Context->config_data->target_day==$__Context->selected_date && $__Context->config_data->about_target == 'yes'){ ?><li><?php echo $__Context->lang->attendance_target_point ?> : <?php echo $__Context->config_data->target_point ?></li><?php } ?>
			            <?php if($__Context->oAttendanceModel->isExistContinuity($__Context->data->member_srl, $__Context->selected_date)>0 && $__Context->config_data->about_continuity=='yes'){ ?>
				            <?php $__Context->cont = $__Context->oAttendanceModel->getContinuityData($__Context->data->member_srl, $__Context->selected_date) ?>
				            <?php if($__Context->cont->data >= $__Context->config_data->continuity_day){ ?><li><?php echo $__Context->lang->attendance_continuity_point ?> : <?php echo $__Context->config_data->continuity_point ?></li><?php } ?>
			            <?php } ?>
                        <?php if($__Context->config_data->about_diligence_yearly == 'yes' && $__Context->oAttendanceModel->checkYearlyDiligence($__Context->data->member_srl, $__Context->config_data->diligence_yearly, $__Context->year) == 1){ ?>
                            <li><?php echo $__Context->lang->attendance_diligence_yearly_point ?> : <?php echo $__Context->config_data->diligence_yearly_point ?>(<?php echo $__Context->config_data->diligence_yearly;
echo $__Context->lang->attendance_after_day ?>)</li>
                        <?php } ?>
                        <?php if($__Context->config_data->about_diligence_monthly == 'yes' && $__Context->oAttendanceModel->checkMonthlyDiligence($__Context->data->member_srl, $__Context->config_data->diligence_monthly, $__Context->year.$__Context->month) == 1){ ?>
                            <li><?php echo $__Context->lang->attendance_diligence_monthly_point ?> : <?php echo $__Context->config_data->diligence_monthly_point ?>(<?php echo $__Context->config_data->diligence_monthly;
echo $__Context->lang->attendance_after_day ?>)</li>
                        <?php } ?>
                        <?php if($__Context->config_data->about_diligence_weekly == 'yes' && $__Context->oAttendanceModel->checkWeeklyDiligence($__Context->data->member_srl, $__Context->config_data->diligence_weekly, $__Context->selected_date) == 1){ ?>
                            <li><?php echo $__Context->lang->attendance_diligence_weekly_point ?> : <?php echo $__Context->config_data->diligence_weekly_point ?>(<?php echo $__Context->config_data->diligence_weekly;
echo $__Context->lang->attendance_after_day ?>)</li>
                        <?php } ?>
                    </ul>
                    <?php }else{ ?>
                        -
                    <?php } ?>
                </div>
                <?php } ?>
            <?php if($__Context->data->greetings){ ?>
                <?php if($__Context->exist_document == 1){ ?>
                    <div class="at_greetings" id="d_<?php echo $__Context->oDocument->document_srl ?>" <?php if($__Context->document_srl==$__Context->oDocument->document_srl){ ?>style="display:block;"<?php } ?>>
                        <?php echo $__Context->oDocument->getContentText(text) ?>
                    </div>
                <?php } ?>
            <?php } ?>
        <?php if($__Context->module_info->order_type=='desc'){;
$__Context->position--;
}else{;
$__Context->position++;
} ?>
    <?php } ?>
    
    <div class="at_pagenation">
       <a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->first_page,'module_srl','') ?>" class="prevEnd">←</a> 
	    <?php while($__Context->page_no = $__Context->oAttendance->page_navigation->getNextPage()){ ?>
		    <?php if($__Context->oAttendance->page == $__Context->page_no){ ?>
			    <strong><?php echo $__Context->page_no ?></strong>
		    <?php }else{ ?>
			    <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
		    <?php } ?>
	    <?php } ?><a href="<?php echo getUrl('page',$__Context->oAttendance->page_navigation->last_page,'module_srl','') ?>" class="nextEnd">→</a>
    </div>
</div>
<?php if($__Context->module_info->footer_text){ ?>
<p class="boardDescription"><?php echo $__Context->module_info->footer_text ?></p>
<?php } ?>
