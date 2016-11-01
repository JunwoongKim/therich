<?php
	if(!defined('__XE__')) exit();

	if($called_position != "before_display_content") return;

	$logged_info = Context::get('logged_info');

	if($logged_info->is_admin == 'Y') {
		if($addon_info->admin_no_click == 'y') {
			$block_code .= "jQuery(document).on('contextmenu',false);";
		}
		if($addon_info->admin_no_drag == 'y') {
			$block_code .= "jQuery(document).on('dragstart',false);";
		}
		if($addon_info->admin_no_select == 'y') {
			$block_code .= "jQuery(document).on('selectstart',false);";
		}
	}
	else {
		if($addon_info->no_click == 'y') {
			$block_code .= "jQuery(document).on('contextmenu',false);";
		}
		if($addon_info->no_drag == 'y') {
			$block_code .= "jQuery(document).on('dragstart',false);";
		}
		if($addon_info->no_select == 'y') {
			$block_code .= "jQuery(document).on('selectstart',false);";
		}
	}

	if($block_code) {
		$code = "<script>jQuery(document).ready(function(e){";
		$code .= $block_code;
		$code .= "});</script>";
		Context::addHtmlHeader($code);
	}
?>
