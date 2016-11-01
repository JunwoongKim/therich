<?php if(!defined("__XE__"))exit;
Context::setBrowserTitle($__Context->component_info->title); ?>
<?php if($__Context->maps_api_type == 'naver'){ ?><!--#Meta:modules/editor/components/map_components/tpl/naver_map.js--><?php $__tmp=array('modules/editor/components/map_components/tpl/naver_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->maps_api_type == 'daum'){ ?><!--#Meta:modules/editor/components/map_components/tpl/daum_map.js--><?php $__tmp=array('modules/editor/components/map_components/tpl/daum_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }elseif($__Context->maps_api_type == 'google'){ ?><!--#Meta:modules/editor/components/map_components/tpl/google_map.js--><?php $__tmp=array('modules/editor/components/map_components/tpl/google_map.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php }else{ ?><!--#Meta:modules/editor/components/map_components/front/leaflet/leaflet.js--><?php $__tmp=array('modules/editor/components/map_components/front/leaflet/leaflet.js','','','');Context::loadFile($__tmp);unset($__tmp); ?><!--#Meta:modules/editor/components/map_components/front/leaflet/leaflet.css--><?php $__tmp=array('modules/editor/components/map_components/front/leaflet/leaflet.css','','','');Context::loadFile($__tmp);unset($__tmp); ?><!--#Meta:modules/editor/components/map_components/tpl/leaflet.js--><?php $__tmp=array('modules/editor/components/map_components/tpl/leaflet.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:modules/editor/components/map_components/tpl/pop.css--><?php $__tmp=array('modules/editor/components/map_components/tpl/pop.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/map_components/lang'); ?>
<?php Context::addHtmlHeader('<meta name="viewport" content="width=device-width, user-scalable=no" /><script>var no_result="'.$__Context->lang->msg_no_result.'";'.
	'var dragmarkertext="'.$__Context->lang->soo_drag_marker_text.'";'.
	'var soo_about_marker="'.$__Context->lang->soo_about_marker.'";'.
	'var soo_langcode="'.$__Context->soo_langcode.'";</script>'); ?>
<div id="bodyDiv">
	<h1 id="title"><a href="#" onclick="toggle('helpDiv');return false;"><?php echo $__Context->component_info->title ?></a></h1>
	<div id="controlArea">
		<div id="searchArea">
			<ul>
				<li>
					<form action="./" id="searchForm" onsubmit="showLocation(this.address.value); return false"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="text" name="address" placeholder="<?php echo $__Context->lang->soo_search ?>" id="address1" value="" />
						<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" /></span>
					</form>
				</li>
				<li>
					<div class="result_list_box" id="result_list_layer"><?php echo $__Context->lang->about_soo_result_use ?></div>
				</li>
			</ul>
		</div>
		<div>
			<a id="insertAction" href="#" onclick="insertMap();return false;"><span><?php echo $__Context->lang->cmd_insert_map ?></span></a>
		</div>
	</div>
	<div id="map_canvas"></div>
	<input type="hidden" id="width" value="" />
	<input type="hidden" id="height" value="" />
	<div id="helpDiv" style="display:none;">
		<a href="#" onclick="toggle('helpDiv');return false;">
		<?php if(Context::getLangType() == 'ko'){ ?><img src="/modules/editor/components/map_components/tpl/image/help1.ko.png" alt="<?php echo $__Context->lang->about_maps_component ?>" />
		<?php }else{ ?><img src="/modules/editor/components/map_components/tpl/image/help1.en.png" alt="<?php echo $__Context->lang->about_maps_component ?>" />
		<?php } ?>
		</a>
	</div>
</div>