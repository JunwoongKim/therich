<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header_tabs.html') ?>
<h1><?php echo $__Context->lang->maps_module_maps_setting ?></h1>
<?php Context::addJsFile("modules/maps/ruleset/mapsModuleConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_obj" class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="mapsModuleConfig" />
	<input type="hidden" name="act" value="procMapsAdminCofig" />
	<div class="x_control-group">
		<label class="x_control-label" for="daum_local_api_key"><?php echo $__Context->lang->maps_module_daum_local_api_key ?></label>
		<div class="x_controls">
			<input type="text" name="daum_local_api_key" id="daum_local_api_key" value="<?php echo $__Context->daum_local_api_key ?>">
			<span class="x_help-inline"><?php echo $__Context->lang->about_maps_module_daum_local_api_key ?></span>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="map_api_key"><?php echo $__Context->lang->maps_module_map_api_key ?></label>
		<div class="x_controls">
			<input type="text" name="map_api_key" id="map_api_key" value="<?php echo $__Context->map_api_key ?>">
			<span class="x_help-inline"><?php echo $__Context->lang->about_maps_module_map_api_key ?></span>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="map_api_type"><?php echo $__Context->lang->maps_module_map_api_key_type ?></label>
		<div class="x_controls">
			<select name="map_api_type" id="map_api_type">
				<option value=""<?php if($__Context->map_api_type!=='daum'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->maps_module_key_type_auto ?></option>
				<option value="daum"<?php if($__Context->map_api_type==='daum'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->maps_module_key_type_daum ?></option>
			</select>
			<span class="x_help-inline"><?php echo $__Context->lang->maps_module_key_type_descri ?></span>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>