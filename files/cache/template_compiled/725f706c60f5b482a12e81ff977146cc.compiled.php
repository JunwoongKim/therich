<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/skins/sky_at_board/filter','fix_attendance_data.xml');$__xmlFilter->compile(); ?>
<?php if($__Context->module_info->colorset == "black"){ ?>
	<!--#Meta:modules/attendance/skins/sky_at_board/css/cal_black.css--><?php $__tmp=array('modules/attendance/skins/sky_at_board/css/cal_black.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == "gray"){ ?>
	<!--#Meta:modules/attendance/skins/sky_at_board/css/cal_gray.css--><?php $__tmp=array('modules/attendance/skins/sky_at_board/css/cal_gray.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->module_info->colorset == "blue"){ ?>
	<!--#Meta:modules/attendance/skins/sky_at_board/css/cal_blue.css--><?php $__tmp=array('modules/attendance/skins/sky_at_board/css/cal_blue.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/attendance/skins/sky_at_board/css/cal_gray.css--><?php $__tmp=array('modules/attendance/skins/sky_at_board/css/cal_gray.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<form action="./" method="post" onsubmit="return procFilter(this, fix_attendance_data);" id="fixAttendanceData"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="selected_date" value="" />
<input type="hidden" name="member_srl" value ="" />
<input type="hidden" name="count" value ="" />
</form>
<table cellspacing="0" class="personalTable">
<thead>
    <tr>
        <th class="sunday center same_height" ><?php echo $__Context->lang->attend_week_name['sun'] ?></th>
        <th class="center same_height" ><?php echo $__Context->lang->attend_week_name['mon'] ?></th>
        <th class="center same_height" ><?php echo $__Context->lang->attend_week_name['tue'] ?></th>
        <th class="center same_height" ><?php echo $__Context->lang->attend_week_name['wed'] ?></th>
        <th class="center same_height" ><?php echo $__Context->lang->attend_week_name['thu'] ?></th>
        <th class="center same_height" ><?php echo $__Context->lang->attend_week_name['fri'] ?></th>
        <th class="saturday center same_height"><?php echo $__Context->lang->attend_week_name['sat'] ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__Context->_day=1 ?>
    <?php $__Context->j=0 ?>
    <?php while($__Context->_day <= $__Context->admin_date_info->day_max){ ?>
        <?php if($__Context->j % 7 == 0){ ?>
            <tr>
        <?php } ?>
        <?php while($__Context->j < $__Context->admin_date_info->week_start){ ?>
            <td>&nbsp;</td>
        <?php $__Context->j++ ?>
        <?php } ?>
            <td>
                <?php $__Context->check_date = sprintf("%s%s%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) ?>
                <?php $__Context->checked = $__Context->oAttendanceModel->getIsCheckedA($__Context->logged_info->member_srl, $__Context->check_date) ?>
                <?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day) == $__Context->selected_date){ ?><u><?php } ?>
                <?php if($__Context->checked == 1){ ?>
                <a <?php if($__Context->j%7==0){ ?>class="sunday"<?php }elseif($__Context->j%7==6){ ?>class="saturday"<?php } ?> href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->admin_date_info->_month, $__Context->_day, $__Context->admin_date_info->_year)),"Ymd")) ?>"><?php echo $__Context->_day++ ?></a><?php if(sprintf("%04d%02d%02d",$__Context->admin_date_info->_year,$__Context->admin_date_info->_month,$__Context->_day-1) == $__Context->selected_date){ ?></u><?php } ?><br/>
                <p class="check">O</p>
                <?php }elseif($__Context->checked >= 2){ ?>
                <?php echo $__Context->_day++ ?><br/>
                <a href="#fixAttendanceData" onclick="att_fix_attendance_data('<?php echo $__Context->logged_info->member_srl ?>','<?php echo $__Context->checked ?>','<?php echo $__Context->check_date ?>','<?php echo $__Context->lang->attend_fix_att ?>','<?php echo $__Context->logged_info->nick_name ?>');"><p class="check">?</p></a><?php if($__Context->admin_date_info->_day == sprintf("%2d",$__Context->_day-1)){ ?></u><?php } ?>
                <?php }else{ ?>
                <a <?php if($__Context->j%7==0){ ?>class="sunday"<?php }elseif($__Context->j%7==6){ ?>class="saturday"<?php } ?> href="<?php echo getUrl('document_srl','','selected_date',zDate(date('YmdHis',mktime(0,0,0,$__Context->admin_date_info->_month, $__Context->_day, $__Context->admin_date_info->_year)),"Ymd")) ?>"><?php echo $__Context->_day++ ?></a><?php if(substr($__Context->selected_date,6,2) == sprintf("%02d",$__Context->_day-1)){ ?></u><?php } ?><br/>
                <p class="check">X</p>
                <?php } ?>
            </td>
        <?php if($__Context->_day-1 == $__Context->admin_date_info->day_max){ ?>
            <?php while($__Context->j %7 < 6){ ?>
                <td>&nbsp;</td>
                <?php $__Context->j++ ?>
            <?php } ?>
        <?php } ?>
        <?php if($__Context->j % 7 == 6){ ?>
            </tr>
        <?php } ?>
        <?php $__Context->j++ ?>
    <?php } ?>
    </tbody>
</table>
