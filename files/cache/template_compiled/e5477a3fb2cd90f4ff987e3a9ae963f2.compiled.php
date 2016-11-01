<?php if(!defined("__XE__"))exit;
Context::loadFile(array("./common/js/jquery.js", 'head', '', -100000), true)  ?>
<?php  Context::loadFile(array("./common/js/js_app.js", 'head', '', -100000), true)  ?>
<?php  Context::loadFile(array("./common/js/common.js", 'head', '', -100000), true)  ?>
<?php  Context::loadFile(array("./common/js/xml_handler.js", 'head', '', -100000), true)  ?>
<?php  Context::loadFile(array("./common/js/xml_js_filter.js", 'head', '', -100000), true)  ?>
<!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/tpl/js/member_admin.js--><?php $__tmp=array('modules/member/tpl/js/member_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/m.skins/default/css/msignup.css--><?php $__tmp=array('modules/member/m.skins/default/css/msignup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript" >
	xe.lang.deleteProfileImage = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageMark = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageName = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
</script>
<h2 class="hx h2"><?php echo $__Context->lang->msg_update_member ?></h2>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/m.skin/default/modify_info/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div class="bd">
	<?php Context::addJsFile("./files/ruleset/insertMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_insert_member" class="ff" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
	<input type="hidden" name="act" value="procMemberModifyInfo" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="member_srl" value="<?php echo $__Context->member_info->member_srl ?>" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/m.skin/default/modify_info/1" />
	<fieldset class="sn">
		<ul>
			<li>
				<label for="identifierForm"><?php echo $__Context->identifierForm->title ?> <em style="color:red">*</em></label>
				<input id="identifierForm" type="text" name="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" disabled="disabled" />
				<input type="hidden" name="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" />
			</li>
			<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){ ?><li>
				<label for="<?php echo $__Context->formTag->name ?>"><?php echo $__Context->formTag->title ?></label>
				<?php if($__Context->formTag->name != 'signature'){ ?><div><?php echo $__Context->formTag->inputTag ?></div><?php } ?>
				<?php if($__Context->formTag->name =='signature'){ ?><div>
					<textarea id="<?php echo $__Context->formTag->name ?>" name="signature" rows="8" cols="42" class="itxx"><?php echo $__Context->member_info->signature ?></textarea>
				</div><?php } ?>
			</li><?php } ?>
			<li><label for="mailing" class="db fb al"><?php echo $__Context->lang->allow_mailing ?></label><input id="mailing" type="checkbox" name="allow_mailing" value="Y" class="checkbox" <?php if($__Context->member_info->allow_mailing!='N'){ ?>checked="checked"<?php } ?> /> <p style="color:#666"><?php echo $__Context->lang->about_allow_mailing ?></p></li>
		</ul>
	</fieldset>
	<div class="bna">
		<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="bn dark"/>
		<a href="<?php echo getUrl('act','dispMemberInfo','member_srl','') ?>" class="bn"><span><?php echo $__Context->lang->cmd_cancel ?></span></a>
	</div>
	</form>
</div>
