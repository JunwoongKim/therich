<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/m.skins/default/css/member.css--><?php $__tmp=array('modules/member/m.skins/default/css/member.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="xm">
<h2 class="hx h2"><?php echo $__Context->lang->member_info ?></h2>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/modify_info/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div class="table even">
	<table class="table table-striped table-hover">
		<?php if($__Context->displayDatas&&count($__Context->displayDatas))foreach($__Context->displayDatas as $__Context->item){ ?><tr>
			<th scope="row" ><?php echo $__Context->item->title ?> <?php if($__Context->item->required || $__Context->item->mustRequired){ ?><em>*</em><?php } ?></th>
			<td class="text"><?php echo $__Context->item->value ?></td>
		</tr><?php } ?>
		<tr>
			<th scope="row"><?php echo $__Context->lang->member_group ?></th>
			<td class="text"><?php echo implode(', ', $__Context->memberInfo['group_list']) ?></td>
		</tr>
		<tr>
			<th><?php echo $__Context->lang->signup_date ?></th>
			<td><?php echo zdate($__Context->memberInfo[regdate],"Y-m-d") ?></td>
		</tr>
		<?php if($__Context->memberInfo[member_srl] == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin == 'Y' ){ ?>
		<tr>
			<th><?php echo $__Context->lang->last_login ?></th>
			<td><?php echo zdate($__Context->memberInfo[last_login],"Y-m-d") ?></td>
		</tr>
		<?php } ?>
	</table>
</div>
<?php if($__Context->memberInfo['member_srl'] == $__Context->logged_info->member_srl){ ?><div class="ba">
	<li><?php if($__Context->member_config->identifier == 'email_address'){ ?><a class="bn" href="<?php echo getUrl('act', 'dispMemberModifyEmailAddress') ?>"><?php echo $__Context->lang->cmd_modify_member_email_address ?>...</a><?php } ?></li>
	<li><a class="bn" href="<?php echo getUrl('act','dispMemberModifyInfo','member_srl','') ?>"><?php echo $__Context->lang->cmd_modify_member_info ?>...</a></li>
	<li><a class="bn" href="<?php echo getUrl('act','dispMemberModifyPassword','member_srl','') ?>"><?php echo $__Context->lang->cmd_modify_member_password ?>...</a></li>
	<li><a class="bn" href="<?php echo getUrl('act','dispMemberLeave','member_srl','') ?>"><?php echo $__Context->lang->cmd_leave ?>...</a></li>
</div><?php } ?>
</div>
