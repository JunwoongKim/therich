<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/join_extend/tpl/filter','insert_editor.xml');$__xmlFilter->compile(); ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="after_config" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->use_welcome ?></div></th>
        <td>
            <select name="use_welcome">
                <option value="N"<?php if($__Context->config->use_welcome=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_welcome=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_welcome ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->use_welcome_email ?></div></th>
        <td>
            <select name="use_welcome_email">
                <option value="N"<?php if($__Context->config->use_welcome_email=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_welcome_email=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_welcome_email ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->welcome_title ?></div></th>
        <td>
            <input type="text" name="welcome_title" value="<?php echo $__Context->config->welcome_title ?>" class="inputTypeText w400" />
            <p><?php echo $__Context->lang->about_welcome_title ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->welcome_email_title ?></div></th>
        <td>
            <input type="text" name="welcome_email_title" value="<?php echo $__Context->config->welcome_email_title ?>" class="inputTypeText w400" />
            <p><?php echo $__Context->lang->about_welcome_email_title ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->use_notify_admin ?></div></th>
        <td>
            <select name="use_notify_admin">
                <option value="N"<?php if($__Context->config->use_notify_admin=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="signin"<?php if($__Context->config->use_notify_admin=='signin'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->only_signin ?></option>
                <option value="signout"<?php if($__Context->config->use_notify_admin=='signout'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->only_signout ?></option>
                <option value="both"<?php if($__Context->config->use_notify_admin=='both'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->both ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_notify_admin ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->notify_admin_period ?></div></th>
        <td>
            <select name="notify_admin_period">
                <option value="collect"<?php if($__Context->config->notify_admin_period=='collect'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notify_collect ?></option>
                <option value="each"<?php if($__Context->config->notify_admin_period=='each'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notify_each_time ?></option>
            </select>
            <p><?php echo $__Context->lang->about_notify_admin_period ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->notify_admin_collect_number ?></div></th>
        <td>
            <input type="text" name="notify_admin_collect_number" value="<?php echo $__Context->config->notify_admin_collect_number ?>" class="inputTypeText w40" />
            <p><?php echo $__Context->lang->about_notify_admin_collect_number ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->notify_admin_method ?></div></th>
        <td>
            <select name="notify_admin_method">
                <option value="message"<?php if($__Context->config->notify_admin_method=='message'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->message ?></option>
                <option value="email"<?php if($__Context->config->notify_admin_method=='email'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->email ?></option>
                <option value="both"<?php if($__Context->config->notify_admin_method=='both'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->both ?></option>
            </select>
            <p><?php echo $__Context->lang->about_notify_admin_method ?></p>
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
    <input type="hidden" name="type" value="welcome" />
    <input type="hidden" name="welcome" value="<?php echo htmlspecialchars($__Context->config->welcome) ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->welcome ?></div></th>
        <td>
            <?php echo $__Context->editor_welcome ?>
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
    <input type="hidden" name="type" value="welcome_email" />
    <input type="hidden" name="welcome_email" value="<?php echo htmlspecialchars($__Context->config->welcome_email) ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col" class="w150"><div><?php echo $__Context->lang->welcome_email ?></div></th>
        <td>
            <?php echo $__Context->editor_welcome_email ?>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" /></span>
        </th>
    </tr>
    </table>
</form>
