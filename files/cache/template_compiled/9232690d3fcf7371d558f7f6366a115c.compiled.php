<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header_tabs.html') ?>
<!--#Meta:modules/maps/tpl/css/maps_write.css--><?php $__tmp=array('modules/maps/tpl/css/maps_write.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->maps_api_type == 'naver'){ ?>
	<!--#Meta:modules/maps/tpl/js/naver_map.js--><?php $__tmp=array('modules/maps/tpl/js/naver_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->maps_api_type == 'daum'){ ?>
	<!--#Meta:modules/maps/tpl/js/daum_map.js--><?php $__tmp=array('modules/maps/tpl/js/daum_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->maps_api_type == 'microsoft'){ ?>
	<!--#Meta:modules/maps/tpl/js/microsoft_map.js--><?php $__tmp=array('modules/maps/tpl/js/microsoft_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?>
	<!--#Meta:modules/maps/tpl/js/google_map.js--><?php $__tmp=array('modules/maps/tpl/js/google_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<?php Context::addHtmlHeader('<script>var no_result="'.$__Context->lang->msg_no_result.
	'", maps_saved="'.$__Context->lang->maps_saved.
	'", saved_maps_srl="'.$__Context->maps_srl.
	'", saved_map_center="'.$__Context->map_center.
	'", saved_map_markers="'.$__Context->map_markers.
	'", saved_map_zoom="'.$__Context->map_zoom.
	'", map_api_key="'.$__Context->map_api_key.
	'";</script>'); ?>
<div id="bodyDiv">
	<h1 id="maps_title"><?php if(!$__Context->maps_srl){;
echo $__Context->lang->maps_module_maps_write;
}else{;
echo $__Context->lang->maps_module_maps_edit ?> (<?php echo $__Context->maps_srl ?>)<?php } ?></h1>
	<div id="controlArea">
		<div id="searchArea">
			<ul>
				<li>
					<form action="./" id="searchForm" onsubmit="showLocation(this.address.value); return false"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="text" name="address" placeholder="<?php echo $__Context->lang->maps_search ?>" id="address1" value="" />
						<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
					</form>
				</li>
				<li>
					<div class="result_list_box" id="result_list_layer"><?php echo $__Context->lang->about_maps_module_result_use ?></div>
				</li>
			</ul>
		</div>
	</div>
	<div id="map_canvas"></div>
	<input type="hidden" id="maps_srl" value="<?php echo $__Context->maps_srl ?>" />
	<div id="text_writing">
		<input type="text" name="map_title" placeholder="<?php echo $__Context->lang->maps_module_untitled ?>" id="map_title" value="<?php echo htmlspecialchars($__Context->map_title) ?>" style="font-size:14px;width:95%!important" />
		<textarea id="map_description" name="map_description" placeholder="<?php echo $__Context->lang->maps_module_no_description ?>" style="font-size:14px;width:95%!important;height:57px;"><?php echo htmlspecialchars($__Context->map_content) ?></textarea>
		<div>
			<a id="insertAction" href="#" onclick="saveMap();return false;"><span><?php echo $__Context->lang->maps_module_cmd_save_map ?></span></a>
		</div>
	</div>
</div>