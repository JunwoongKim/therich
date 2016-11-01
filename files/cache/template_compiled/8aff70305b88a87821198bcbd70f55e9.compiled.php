<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/easyxe/tpl/_extends/page','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/page/tpl/page_info/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<section class="section">
<?php Context::addJsFile("modules/easyxe/ruleset/updatePage.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" enctype="multipart/form-data" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="updatePage" />
	<input type="hidden" name="module" value="page" />
	<input type="hidden" name="act" value="procPageAdminUpdate" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/page/tpl/page_info/1" />
	<div class="x_control-group">
		<label for="page_type" class="x_control-label"><?php echo $__Context->lang->page_type ?></label>
		<div class="x_controls" style="padding-top:4px">
			<select name="page_type" id="page_type" disabled>
				<?php if($__Context->lang->page_type_name&&count($__Context->lang->page_type_name))foreach($__Context->lang->page_type_name as $__Context->page_type=>$__Context->page_type_title){ ?><option value="<?php echo $__Context->page_type ?>"<?php if($__Context->module_info->page_type == $__Context->page_type){ ?> selected<?php } ?>><?php echo $__Context->page_type_title ?></option><?php } ?>
			</select>
			<button type="button" id="changePageType" class="x_btn x_btn-inverse"><i class="fa fa-exclamation"></i> 변경하기</button>
			<ul>
				<li>문서 페이지 : 페이지 작성 시 제목과 꼬릿말(tag)을 입력할 수 있습니다.</li>
				<li>위젯 페이지 : 드래그&드롭 방식으로 콘텐츠를 배치할 수 있습니다.</li>
				<li>외부 페이지 : HTML/PHP 파일을 불러와서 그대로 출력할 수 있습니다.</li>
			</ul>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="page_name"><?php echo $__Context->lang->mid ?></label>
		<div class="x_controls">
			<input type="text" name="page_name" id="page_name" value="<?php echo $__Context->module_info->mid ?>" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_mid ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
		<div class="x_controls">
			<select name="module_category_srl" id="module_category_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<a href="#aboutCategory" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutCategory" hidden><?php echo $__Context->lang->about_module_category ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
		<div class="x_controls">
			<input type="text" name="browser_title" id="browser_title" value="<?php if(strpos($__Context->module_info->browser_title, '$user_lang->') === false){;
echo $__Context->module_info->browser_title;
}else{;
echo htmlspecialchars($__Context->module_info->browser_title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);
} ?>" class="lang_code" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
		<div class="x_controls">
			<select name="layout_srl" id="layout_srl" style="width:auto">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?>(<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<a href="<?php echo getUrl('act', 'dispLayoutAdminModify', 'module_srl', '', 'layout_srl', $__Context->module_info->layout_srl) ?>" class="x_btn"><i class="fa fa-cog"></i></a>
			<a href="#aboutLayout" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutLayout" hidden><?php echo $__Context->lang->about_layout ?></p>
		</div>
		
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
		<div class="x_controls">
			<label for="use_mobile">
				<input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> />
				<?php echo $__Context->lang->about_mobile_view ?>
			</label>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
		<div class="x_controls">
			<select name="mlayout_srl" id="mlayout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?>(<?php echo $__Context->val->layout ?>)</option><?php } ?>
			</select>
			<a href="#aboutMobileLayout" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutMobileLayout" hidden><?php echo $__Context->lang->about_layout ?></p>
		</div>
	</div>
	<?php if($__Context->module_info->page_type != 'ARTICLE'){ ?><div class="x_control-group">
		<label class="x_control-label" for="page_caching_interval"><?php echo $__Context->lang->page_caching_interval ?></label>
		<div class="x_controls">
			<input type="text" name="page_caching_interval" id="page_caching_interval" value="<?php echo (int)$__Context->module_info->page_caching_interval ?>"  /> <?php echo $__Context->lang->unit_min ?>
			<a href="#aboutCaching" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutCaching" hidden><?php echo $__Context->lang->about_page_caching_interval ?></p>
		</div>
	</div><?php } ?>
	<?php if($__Context->module_info->page_type == 'OUTSIDE'){ ?><div class="x_control-group">
		<label class="x_control-label" for="path"><?php echo $__Context->lang->opage_path ?></label>
		<div class="x_controls">
			<input type="text" name="path" id="path" value="<?php echo $__Context->module_info->path ?>" class="x_input-xxlarge"> <a href="<?php echo getUrl('act', 'dispEasyxeAdminViewPageSource') ?>" class="x_btn" title="소스 보기" onclick="popopen(this.href); return false"><i class="fa fa-eye"></i></a>
			<a href="#aboutOpagePath" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutOpagePath" hidden><?php echo $__Context->lang->about_opage_path ?><b><?php echo realpath("./") ?></b></p>
		</div>
	</div><?php } ?>
	<?php if($__Context->module_info->page_type == 'OUTSIDE'){ ?><div class="x_control-group">
		<label class="x_control-label" for="mpath"><?php echo $__Context->lang->opage_mobile_path ?></label>
		<div class="x_controls">
			<input type="text" name="mpath" id="mpath" value="<?php echo $__Context->module_info->mpath ?>" class="x_input-xxlarge"> <a href="<?php echo getUrl('act', 'dispEasyxeAdminViewMobilePageSource') ?>" class="x_btn" title="소스 보기" onclick="popopen(this.href); return false"><i class="fa fa-eye"></i></a>
			<a href="#aboutOpageMobilePath" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutOpageMobilePath" hidden><?php echo $__Context->lang->about_opage_mobile_path ?><b><?php echo realpath("./") ?></b></p>
		</div>
	</div><?php } ?>
	<?php if($__Context->module_info->page_type == 'ARTICLE'){ ?><div class="x_control-group">
		<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
		<div class="x_controls">
			<select name="skin" id="skin">
				<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key ||(!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<a href="#aboutSkin" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutSkin" hidden><?php echo $__Context->lang->about_skin ?></p>
		</div>
	</div><?php } ?>
	<?php if($__Context->module_info->page_type == 'ARTICLE'){ ?><div class="x_control-group optionnalData articleType">
		<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
		<div class="x_controls">
			<select name="mskin">
				<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin==$__Context->key ||(!$__Context->module_info->mskin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
			</select>
			<a href="#aboutMobileSkin" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p class="x_help-block" id="aboutMobileSkin" hidden><?php echo $__Context->lang->about_skin ?></p>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->use_lock ?></div>
		<div class="x_controls">
			<label for="use_page_lock_Y" class="x_inline">
				<input type="radio" id="use_page_lock_Y" name="use_lock" value="Y"<?php if($__Context->module_info->use_lock == 'Y'){ ?> checked<?php } ?>> <?php echo $__Context->lang->use ?>
			</label>
			<label for="use_page_lock_N" class="x_inline">
				<input type="radio" id="use_page_lock_N" name="use_lock" value="N"<?php if($__Context->module_info->use_lock != 'Y'){ ?> checked<?php } ?>> <?php echo $__Context->lang->notuse ?>
			</label>
			<p class="x_help-block">비밀번호를 입력해야 페이지를 볼 수 있도록 합니다. 관리 권한이 있을 경우 비밀번호를 입력하지 않고 페이지를 볼 수 있습니다.</p>
		</div>
	</div>
	<div class="x_control-group">
		<label for="page_lock_type" class="x_control-label">페이지 잠금 해제 방식</label>
		<div class="x_controls">
			<select name="page_lock_type" id="page_lock_type">
				<option value="password">비밀번호</option>
				<!--<option value="point">포인트 차감</option>-->
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label for="page_auth_expire_time" class="x_control-label"><?php echo $__Context->lang->page_auth_expire_time ?></label>
		<div class="x_controls">
			<input type="number" name="page_auth_expire_time" value="<?php echo $__Context->module_info->page_auth_expire_time ?>"> 
			<select name="page_auth_expire_time_unit">
				<option value="MINUTES">분</option>
				<option value="HOURS">시간</option>
				<option value="DAYS">일</option>
				<option value="MONTHS">개월</option>
			</select>
			<p class="x_help-block">한 번 인증을 받고 입력한 시간이 지나면 인증이 해제되도록 할 수 있습니다.</p>
		</div>
	</div>
	<div class="x_control-group">
		<label for="page_password" class="x_control-label"><?php echo $__Context->lang->page_password ?></label>
		<div class="x_controls">
			<input type="password" name="page_password" value="<?php echo $__Context->module_info->page_password ?>">
			<p class="x_help-block">잠금 해제할 수 있는 비밀번호를 입력해주세요. 입력하지 않으면 일반 사용자가 잠금을 해제할 수 없습니다.</p>
		</div>
	</div>
	<!--<div class="x_control-group">
		<label for="page_unlock_point" class="x_control-label"><?php echo $__Context->lang->page_unlock_point ?></label>
		<div class="x_controls">
			<input type="number" name="page_unlock_point" value="<?php echo (int)$__Context->module_info->page_unlock_point ?>"> 
			포인트
		</div>
	</div>-->
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
</section>
