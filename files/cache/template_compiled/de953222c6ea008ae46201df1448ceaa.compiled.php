<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/mailing/tpl/filter','send_mail.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/mailing/tpl/css/style.css--><?php $__tmp=array('modules/mailing/tpl/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/mailing/tpl/js/script.js--><?php $__tmp=array('modules/mailing/tpl/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
<?php 
// 버전 구하기
$__Context->oModuleModel = getModel('module');
$__Context->module_list = $__Context->oModuleModel->getModuleList();
 ?>
<h1 class="xeAdmin"><?php echo $__Context->lang->mailing;
if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key => $__Context->val){;
if($__Context->val->path == './modules/mailing/'){ ?> v <?php echo $__Context->val->version;
};
} ?></h1>
</div>
<div class="infoText">
    <b>[라이선스 공지]</b><br />
    <div>관리자 메일 모듈 : 1사이트 사용, 수정 및 재배포 금지</div><br />
    <b>[결제하기]</b><br />
    <div>
    	본 모듈을 상업적으로 사용하시거나 용역 납품하신다면 다음 링크 버튼으로 유료결제 부탁드립니다.
    	<form method='POST' action='https://express.inicis.com/express/start' name='inipayExpressButtonForm' target='_top'><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type='image' src='https://stdux.inicis.com/express/btn/blue01.jpg' style='border:0px;'/>
		<input type='hidden' name='prdCode' value='EHYBBCBZJ'>
		<input type='hidden' name='signHash' value='212ad8b02619e1502a5433fcb755e2a1f9da2329fd4656aa9bee75cfbd82af2d'>
		</form>
    </div><br />
	<b>[주의사항]</b><br />
	<div><?php echo nl2br($__Context->lang->about_mailing) ?></div>
</div>
<form action="./" method="post" onsubmit="return procFilter(this, send_mail)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table cellspacing="0" border="0" class="admin_mailing">
		<thead>
			<tr>
			<?php 
				$__Context->oModuleModel = getModel('module');
				$__Context->member_config = $__Context->oModuleModel->getModuleConfig('member');
			 ?>
				<th><?php echo $__Context->lang->sender_nickname ?><br /><a href="<?php echo getUrl('','module','admin','act','dispMemberAdminConfig') ?>">[웹마스터설정]</a></th>
				<td>
					<input type="text" readonly="readonly" name="sender_nickname" value="<?php echo $__Context->member_config->webmaster_name ?>" class="input_text" /> 
				</td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->sender_email ?></th>
				<td>
					<input type="text" readonly="readonly" name="sender_email" value="<?php echo $__Context->member_config->webmaster_email ?>" class="input_text" /> 
				</td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->receive_group ?></th>
				<td>
				
						<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->val){ ?>						
						<input type="radio" name="receive_group" value="<?php echo $__Context->val->group_srl ?>" /> <?php echo $__Context->val->title ?> 					
						<?php } ?>						
						<input type="radio" name="receive_group" value="all" /> <?php echo $__Context->lang->send_to_all ?>
				</td>
			</tr>
			<tr>
			  <th><?php echo $__Context->lang->ggmailing_allow ?></th>
			  <td>
					<input type="radio" name="mailing_allow" value="Y" /> <?php echo $__Context->lang->allow_mailing ?> 
					<input type="radio" name="mailing_allow" value="N" /> <?php echo $__Context->lang->all_mailing ?>
				</td>
			<tr>
				<th><?php echo $__Context->lang->title ?></th>
				<td>
					<input type="text" name="title" value="" class="input_text" /> 
				</td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->content ?></th>
				<td>
				<input type="hidden" name="primary_key" id="primary_key" value="0">
				<?php 
				$__Context->oEditorModel = &getModel('editor');
				Context::set('editor_skin_list', $__Context->oEditorModel->getEditorSkinList());
				$__Context->option->primary_key_name = 'primary_key';
				$__Context->option->content_key_name = 'content';
				$__Context->option->allow_fileupload = true;
				$__Context->option->enable_autosave = false;
				$__Context->option->enable_default_component = true;
				$__Context->option->enable_component = true;
				$__Context->option->resizable = true;
				$__Context->option->height = 300;
				$__Context->option->skin = "xeeditor";
				$__Context->editor = $__Context->oEditorModel->getEditor($__Context->content, $__Context->option);
				//$__Context->editor->editor_sequence;
				 ?>
				<input type="hidden" name="content" id="content" value="<?php echo htmlspecialchars($__Context->content) ?>">
				<?php echo $__Context->editor ?>
				</td>
			</tr>
		</thead> 
	</table>
	<div class="right">
		<input type="submit" value="<?php echo $__Context->lang->ggsender ?>" accesskey="s" class="medium white" />
	</div>
</form>
