<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/easyxe/tpl/js/changeModuleLayout.js--><?php $__tmp=array('modules/easyxe/tpl/js/changeModuleLayout.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1>레이아웃 일괄 변경</h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == '/modules/easyxe/tpl/changeModuleLayout/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<script>
	xe.layoutType = '<?php echo $__Context->type ?>';
</script>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->type == 'P'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('type', 'P') ?>">PC 레이아웃</a>
	</li>
	<li<?php if($__Context->type == 'M'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('type', 'M') ?>">모바일 레이아웃</a>
	</li>
</ul>
<?php Context::addJsFile("modules/easyxe/ruleset/changeModuleLayout.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="changeModuleLayout" />
	<input type="hidden" name="module" value="easyxe">
	<input type="hidden" name="act" value="procEasyxeAdminChangeModuleLayout">
	<input type="hidden" name="type" value="<?php echo $__Context->type ?>">
	<input type="hidden" name="xe_validator_id" value="/modules/easyxe/tpl/changeModuleLayout/1">
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>">
	<p>각 모듈에 적용된 레이아웃을 일괄적으로 변경할 수 있습니다.</p>
	<div class="x_container-fluid">
		<div class="x_row-fluid">
			<div class="x_span2">
				<label for="source_layout">변경 전 레이아웃</label>
				<select id="source_layout" name="source_layout" size="<?php echo count($__Context->layout_list) ?>">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->no=>$__Context->layout){ ?><option value="<?php echo $__Context->layout->layout_srl ?>"><?php echo $__Context->layout->title ?></option><?php } ?>
				</select>
			</div>
			<div class="x_span2">
				<label for="target_layout">변경 후 레이아웃</label>
				<select id="target_layout" name="target_layout" size="<?php echo count($__Context->layout_list) ?>">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->no=>$__Context->layout){ ?><option value="<?php echo $__Context->layout->layout_srl ?>"><?php echo $__Context->layout->title ?></option><?php } ?>
				</select>
			</div>
			<div class="x_span4" id="usingModule">
				<h2>선택한 레이아웃을 사용중인 페이지</h2>
				<table class="x_table x_table-striped">
					<thead>
						<tr>
							<th><?php echo $__Context->lang->module ?></th>
							<th><?php echo $__Context->lang->mid ?></th>
							<th><?php echo $__Context->lang->browser_title ?></th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
	<p>왼쪽에 선택한 레이아웃을 오른쪽에 선택한 레이아웃으로 변경합니다.</p>
	<input type="submit" value="<?php echo $__Context->lang->cmd_apply ?>" class="x_btn">
</form>