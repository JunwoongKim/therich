<?php if(!defined("__XE__"))exit;?><section class="section">
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="easyxe">
		<input type="hidden" name="act" value="procEasyxeAdminSaveMessageSetting">
		<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>">
		<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
		<h1>메시지 설정 (로그인 하지 않은 경우)</h1>
		<div class="x_control-group">
			<label for="" class="x_control-label">접근 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_access_A" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_access_A ?>">
			</div>
		</div>
		<?php if($__Context->module_info->module_srl && $__Context->module_info->module == 'board'){ ?><div class="x_control-group">
			<label for="" class="x_control-label">목록 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_list_A" id="msg_not_permitted_list_A" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_list_A ?>">
			</div>
		</div><?php } ?>
		<div class="x_control-group">
			<label for="" class="x_control-label">열람 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_view_A" id="msg_not_permitted_view_A" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_view_A ?>">
			</div>
		</div>
		<?php if($__Context->module_info->module_srl && in_array($__Context->module_info->module, array( 'board', 'wiki'))){ ?><div class="x_control-group">
			<label for="" class="x_control-label">쓰기 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_write_A" id="msg_not_permitted_write_A" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_write_A ?>">
			</div>
		</div><?php } ?>
		<h1>메시지 설정 (로그인 한 경우)</h1>
		<div class="x_control-group">
			<label for="" class="x_control-label">접근 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_access_B" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_access_B ?>">
			</div>
		</div>
		<?php if($__Context->module_info->module_srl && $__Context->module_info->module == 'board'){ ?><div class="x_control-group">
			<label for="" class="x_control-label">목록 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_list_B" id="msg_not_permitted_list_B" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_list_B ?>">
			</div>
		</div><?php } ?>
		<div class="x_control-group">
			<label for="" class="x_control-label">열람 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_view_B" id="msg_not_permitted_view_B" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_view_B ?>">
			</div>
		</div>
		<?php if($__Context->module_info->module_srl && in_array($__Context->module_info->module, array('board', 'wiki'))){ ?><div class="x_control-group">
			<label for="" class="x_control-label" >쓰기 권한이 없을 경우</label>
			<div class="x_controls">
				<input type="text" name="msg_not_permitted_write_B" id="msg_not_permitted_write_B" value="<?php echo $__Context->easyConfig->customMessage->msg_not_permitted_write_B ?>">
			</div>
		</div><?php } ?>
		<div class="btnArea">
			<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_save ?>">
		</div>
	</form>
</section>
<!--<section class="section">
	<h1>글/댓글 작성 제한</h1>
	<form action="./" method="post" class="x_form-horizontal" onsubmit="alert('소스를 훔쳐보셨군요. 이건 다음 버전에 들어갈 기능입니다.');return false;"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="easyxe">
		<input type="hidden" name="act" value="procEasyxeAdminSaveBoardLimitSetting">
		<table class="x_table">
			<thead>
				<tr>
					<th>
						적용 그룹
					</th>
					<th>
						산정 기준
					</th>
					<th>
						글 수
					</th>
					<th>
						댓글 수
					</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>
						<select name="new_group_srl" style="width:120px">
							<option value="">관리그룹</option>
						</select>
					</td>
					<td>
						<input type="number" name="period" min="0" step="1">
						<select name="new_period_unit" style="width:100px">
							<option value="TOTAL">전체 기간</option>
							<option value="MINUTES">분</option>
							<option value="HOURS">시간</option>
							<option value="DAYS">일</option>
						</select>
					</td>
					<td>
						<input type="number" name="new_document_limit_count" min="0" step="1">
					</td>
					<td>
						<input type="number" name="new_comment_limit_count" min="0" step="1">
					</td>
					<td>
						
					</td>
				</tr>
			</tfoot>
		</table>
		<div class="btnArea">
			<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_save ?>" >
		</div>
	</form>
</section>-->