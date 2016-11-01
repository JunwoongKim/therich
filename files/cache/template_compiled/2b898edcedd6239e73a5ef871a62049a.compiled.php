<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','delete_all_data.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','update_point.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/attendance/tpl/filter','fix_total_data.xml');$__xmlFilter->compile(); ?>
<?php $__Context->position=1+($__Context->user_data->page-1)*20 ?>
<?php echo $__Context->lang->attendance_search_help ?><br/><?php echo $__Context->lang->attendance_total_help ?><br />
<form action="<?php echo getUrl('') ?>" method="POST" onsubmit="return procFilter(this, fix_total_data);" id="fixTotalData"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
<input type="hidden" name="member_srl" value ="" />
<?php echo $__Context->lang->attend_insert_continuity ?><input type="text" name="continuity" value="1" class="inputTypeText w60" />
</form>
<form action="<?php echo getUrl('') ?>" method="get" class="adminSearch"><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="error_return_url" value="" />
<input type="hidden" name="mid" value="" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
    <fieldset>
        <select name="unjoined_members">
            <option value="" <?php if(!$__Context->unjoined_members){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_about_unjoined_member ?></option>
            <option value="Y" <?php if($__Context->unjoined_members){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->attendance_unjoined_member ?></option>
        </select>
        <select name="selected_group_srl">
            <option value="0"><?php echo $__Context->lang->group ?></option>
            <?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
            <option value="<?php echo $__Context->val->group_srl ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
            <?php } ?>
        </select>
        <select name="search_target">
            <option value="" <?php if(!$__Context->search_target){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->search_target ?></option>
            <option value="user_id" <?php if($__Context->search_target=='user_id'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
            <option value="nick_name" <?php if($__Context->search_target=='nick_name'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
            <option value="email_address" <?php if($__Context->search_target=='email_address'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->email ?></option>
        </select>
        <input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" class="inputTypeText" />
        <span class="button"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
        <a href="#" onclick="location.href='<?php echo getUrl('','type',$__Context->type,'act',$__Context->act,'module',$__Context->module) ?>';return false;" class="button"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
    </fieldset>
</form>
<form action="<?php echo getUrl('') ?>" method="POST" onsubmit="return procFilter(this, delete_all_data);" id="deleteAllData"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
<input type="hidden" name="type" value="<?php echo $__Context->type ?>" />
<input type="hidden" name="selected_date" value="<?php echo $__Context->selected_date ?>" />
<input type="hidden" name="member_srl" value ="" />
</form>
<table cellspacing="0" class="attendanceTable" >
	<tr>
		<th class="center" style="min-width:20px;">
			<?php echo $__Context->lang->position ?>
		</th>
		<td class="center">
			<?php echo $__Context->lang->email ?>
		</td>
		<th class="center">
			<?php echo $__Context->lang->nick_name ?>
		</th>
		<!--td class="center">
			<?php echo $__Context->lang->user_name ?>
		</td-->
		<th class="center">
			<?php echo $__Context->lang->view_total_day ?>
		</th>
		<td class="center" style="width:270px;">
			<?php echo $__Context->lang->view_total_point ?>
		</td>
        <th class="center" style="min-width:30px;">
            <?php echo $__Context->lang->attendance_perfectly_delete ?>
        </th>
	</tr>
<?php if($__Context->user_data->data&&count($__Context->user_data->data))foreach($__Context->user_data->data as $__Context->ranking){ ?>
<?php if($__Context->position==1){;
$__Context->top = $__Context->ranking->total;
} ?>
<?php $__Context->user_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->ranking->member_srl) ?>
<tr>
	<th class="center"> 
		<?php echo $__Context->position ?>
	</th>
	<td class="center"> 
		<?php echo $__Context->user_info->email_address ?>
	</td>
	<th class="center"> 
		<div class="member_<?php echo $__Context->user_info->member_srl ?>"><?php echo $__Context->user_info->nick_name ?></div>
	</th>
	<!--td class="center"> 
		<?php echo $__Context->user_info->user_name ?>
	</td-->
	<th class="center" ><a href="#fixTotalData" onclick="att_fix_total_data('<?php echo $__Context->ranking->member_srl ?>','<?php echo $__Context->lang->attend_fix_total_1 ?>','<?php echo $__Context->lang->attend_fix_total_2 ?>','<?php echo $__Context->user_info->nick_name ?>');"><?php echo $__Context->ranking->total ?></a></th>
	<td style="width:270px;">
        <?php echo $__Context->ranking->total_point ?>
        <form action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
            <!--input type="text" name="orgpoint" value="<?php echo $__Context->ranking->total_point ?>" class="inputTypeText" readonly /-->
            <input type="text" id="point_<?php echo $__Context->ranking->member_srl ?>" name="point" class="inputTypeText" style="width:50px;" />
            <span class="button small"><input type="button" value="+" onclick="updatePoint('<?php echo $__Context->ranking->member_srl ?>', 'add')"/></span>
            <span class="button small"><input type="button" value="-" onclick="updatePoint('<?php echo $__Context->ranking->member_srl ?>', 'minus')"/></span>
            <span class="button small"><input type="button" value="<?php echo $__Context->lang->cmd_update ?>" onclick="updatePoint('<?php echo $__Context->ranking->member_srl ?>', 'update')" /></span>
        </form>
	</td>
    <th class="center">
        <a href="#deleteAllData" onclick="att_delete_all_data('<?php echo $__Context->ranking->member_srl ?>','<?php echo $__Context->user_info->nick_name ?>');">×</a>
    </th>
</tr>
<?php $__Context->position++ ?>
<?php } ?>
</table>
<form id="updateForm" action="<?php echo getUrl('') ?>" method="POST"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" id="update_action" name="action" value="" />
    <input type="hidden" id="update_member_srl" name="member_srl" value="" />
    <input type="hidden" id="update_point" name="point" class="inputTypeText w80" />
</form>
<div class="pagination a1">
   <a href="<?php echo getUrl('page',$__Context->user_data->page_navigation->first_page,'module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->user_data->page_navigation->getNextPage()){ ?>
        <?php if($__Context->user_data->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->user_data->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
