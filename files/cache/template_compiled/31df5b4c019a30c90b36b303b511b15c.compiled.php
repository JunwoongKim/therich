<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->member_condition_module ?>
	</h1>
</div>
<h1><?php echo $__Context->lang->member_condition_module_settings ?></h1>
<form id="fo_obj" class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="procMember_conditionAdminConfig" />
	<div class="x_control-group">
		<label class="x_control-label" for="allow_email_list"><?php echo $__Context->lang->member_condition_allow_email_list ?></label>
		<div class="x_controls">
			<input type="text" name="allow_email_list" id="allow_email_list" value="<?php echo $__Context->allow_email_list ?>">
			<span class="x_help-inline"><?php echo $__Context->lang->about_member_condition_allow_email_list ?></span>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>