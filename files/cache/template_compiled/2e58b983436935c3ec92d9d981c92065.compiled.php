<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<?php if (!$__Context->is_update_table){ ?>
<h4 class="xeAdmin"><?php echo $__Context->lang->admin_request_update_table ?></h4>
<div class="infoText"><?php echo $__Context->lang->about_update_table ?></div>
<div class="infoText" id="pre_update_table">
<form action="./" method="get" onsubmit="return procFilter(this, update_table)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <span class="button red"><input type="submit" value="<?php echo $__Context->lang->update_table ?>" /></span>
</form>
</div>
<div class="infoText" id="ing_update_table" style="display: none;">
<form action="./" method="get" onsubmit="return procFilter(this, update_table2)" id="next_form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="start_idx" id="start_idx" value="" />
    <input type="hidden" name="count" id="count" value="" />
    Progress :
    <div style="width: 200px; height: 15px; border: 1px silver solid; display: inline-block; vertical-align: middle">
        <div id="percent" style="width:200px; text-align: center; position:absolute;">0%</div>
        <div id="progress_bar" style="background: blue; height: 15px;"></div>
    </div>
</form>
</div>
<?php } ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="index" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->use_join_extend ?></div></th>
        <td>
            <select name="use_join_extend">
                <option value="N"<?php if($__Context->config->use_join_extend=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_join_extend=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_join_extend ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->admin_id ?></div></th>
        <td>
            <input type="text" name="admin_id" value="<?php echo $__Context->config->admin_id ?>" class="inputText w100" />
            <p><?php echo $__Context->lang->about_admin_id_2 ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->skin ?></div></th>
        <td>
            <select name="skin" onchange="doGetSkinColorset(this.options[this.selectedIndex].value);return false;">
                <?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?>
                <option value="<?php echo $__Context->key ?>" <?php if($__Context->config->skin==$__Context->key ||(!$__Context->config->skin && $__Context->key=='default')){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
                <?php } ?>
            </select>
            <p><?php echo $__Context->lang->about_skin ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->colorset ?></div></th>
        <td><div id="skin_colorset"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
<script type="text/javascript">
    xAddEventListener(window,'load', function() { doGetSkinColorset("<?php echo $__Context->config->skin ?>"); });
</script>
