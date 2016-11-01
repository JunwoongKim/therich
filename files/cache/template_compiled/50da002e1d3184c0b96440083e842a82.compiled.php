<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="restrictions_config" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->use_sex_restrictions ?></div></th>
        <td>
            <select name="use_sex_restrictions">
                <option value="N"<?php if($__Context->config->use_sex_restrictions=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="M"<?php if($__Context->config->use_sex_restrictions=='M'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->man ?></option>
                <option value="W"<?php if($__Context->config->use_sex_restrictions=='W'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->woman ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_sex_restrictions ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->use_age_restrictions ?></div></th>
        <td>
            <select name="use_age_restrictions">
                <option value="N"<?php if($__Context->config->use_age_restrictions=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_age_restrictions=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_age_restrictions ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->age_restrictions ?></div></th>
        <td>
            <input type="text" name="age_restrictions" value="<?php echo $__Context->config->age_restrictions ?>"  class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="age_upper_restrictions" value="<?php echo $__Context->config->age_upper_restrictions ?>"  class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->msg_junior_join ?></div></th>
        <td>
            <input type="text" name="msg_junior_join" class="inputTypeText w400" id="msg_junior_join" value="<?php echo htmlspecialchars($__Context->config->msg_junior_join) ?>" />
            <a href="<?php echo getUrl('','module','module','act','dispModuleAdminLangcode','target','msg_junior_join') ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_find_langcode ?></span></a>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
