<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/btn_add/tpl/popup.js--><?php $__tmp=array('modules/editor/components/btn_add/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/btn_add/tpl/popup.css--><?php $__tmp=array('modules/editor/components/btn_add/tpl/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/btn_add/lang'); ?>
<section class="section">
	<h1><?php echo $__Context->component_info->title ?> ver. <?php echo $__Context->component_info->version ?></h1>
	<form action="./" method="get" onSubmit="return false" id="fo_component"  class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		
	    <div id="popBody">
	        <table cellspacing="0" class="x_table">
	        <col width="100" />
	        <col />
	
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_title ?> *</div></th>
	            <td><input type="text" name="text" class="inputTypeText w400" /></td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_url ?></div></th>
	            <td><input type="text" name="url" class="inputTypeText w400" value="<?php echo $__Context->manual_url ?>"/> ex) http://2sisstore.com</td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_open_window ?></div></th>
	            <td><input type="checkbox" name="open_window" value="Y" id="editor_open_window" /> <label for="editor_open_window"><?php echo $__Context->lang->about_btn_add_open_window ?></label></td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_width ?></div></th>
	            <td><input type="text" name="width" id="width_input"/></td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_height ?></div></th>
	            <td><input type="text" name="height" id="height_input"/> *기본값 30</td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_font_size ?></div></th>
	            <td><input type="text" name="font_size" id="font_size_input"/> *기본값 14</td>
	        </tr>
	        <tr>
	            <th scope="row"><div><?php echo $__Context->lang->btn_add_color ?> *</div></th>
	            <td><input type="text" id="bg_color_input" class="color-indicator"  size="7" maxlength="6"  value="#dddddd" /></td>
	        </tr>
	        <tr>
	            <th scope="row"><div>버튼 스타일 *</div></th>
	            <td>
	                <div class="link_color">
	                    <input type="radio" name="color" value="style1" id="color_style1"/>
	                    <label for="color_style1" class="editor_style1">스타일1</label>
	                </div>
	                <div class="link_color">
	                    <input type="radio" name="color" value="style2" id="color_style2" />
	                    <label for="color_style2" class="editor_style2">스타일2</label>
	                </div>
	                <div class="link_color">
	                    <input type="radio" name="color" value="style3" id="color_style3" />
	                    <label for="color_style3" class="editor_style3">스타일3</label>
	                </div>
	            </td>
	        </tr>
	        </table>
	    </div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
		        <a href="#" onclick="setText()" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_insert ?></a>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $__Context->lang->about_component ?></a>
			</div>
		</div>
	</form>
</section>
<!--#JSPLUGIN:ui.colorpicker--><?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
