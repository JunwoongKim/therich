<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/join_extend/tpl/filter','insert_editor.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="agree_config" />
    <table class="rowTable" cellspacing="0">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->use_agreement ?></div></th>
        <td>
            <select name="use_agreement">
                <option value="N"<?php if($__Context->config->use_agreement=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_agreement=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_agreement ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->use_private_agreement ?></div></th>
        <td>
            <select name="use_private_agreement">
                <option value="N"<?php if($__Context->config->use_private_agreement=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_private_agreement=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_private_agreement ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<form action="./" method="post" onsubmit="return procFilter(this, insert_editor)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="type" value="agreement" />
    <input type="hidden" name="agreement" value="<?php echo htmlspecialchars($__Context->config->agreement) ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->agreement ?></div></th>
        <td>
            <?php echo $__Context->editor_agreement ?>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<form action="./" method="post" onsubmit="return procFilter(this, insert_editor)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="type" value="private_agreement" />
    <input type="hidden" name="private_agreement" value="<?php echo htmlspecialchars($__Context->config->private_agreement) ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->private_agreement ?></div></th>
        <td>
            <?php echo $__Context->editor_private_agreement ?>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
<form action="./" method="post" onsubmit="return procFilter(this, insert_editor)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="type" value="private_gathering_agreement" />
    <input type="hidden" name="private_gathering_agreement" value="<?php echo htmlspecialchars($__Context->config->private_gathering_agreement) ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->private_gathering_agreement ?></div></th>
        <td>
            <?php echo $__Context->editor_private_gathering_agreement ?>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
