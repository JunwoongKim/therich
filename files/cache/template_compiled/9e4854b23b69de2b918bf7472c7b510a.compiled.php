<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->easyxe_setting ?></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == '/modules/easyxe/tpl/setting/'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="<?php echo getRequestUriByServerEnviroment() ?>" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="easyxe">
	<input type="hidden" name="act" value="procEasyxeAdminSaveSetting">
	<input type="hidden" name="xe_validator_id" value="/modules/easyxe/tpl/setting/">
	<div class="x_control-group">
		<label for="enabled" class="x_control-label"><?php echo $__Context->lang->use_easyxe ?></label>
		<div class="x_controls">
			<div class="x_checkbox">
				<input type="checkbox" id="enabled" name="enabled" value="Y"<?php if($__Context->config->enabled == 'Y'){ ?> checked<?php } ?>> 선택하면 관리자 메뉴 및 확장 기능을 사용할 수 있습니다.
			</div>
		</div>
	</div>
	
	<div class="btnArea">
		<input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" class="x_btn x_btn-primary">
	</div>
</form>