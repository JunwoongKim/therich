<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="extend_var_config" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->sex_var_name ?></div></th>
        <td>
            <input type="text" name="sex_var_name" value="<?php echo $__Context->config->sex_var_name ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_sex_var_name ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->man_value ?></div></th>
        <td>
            <input type="text" name="man_value" value="<?php echo $__Context->config->man_value ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_man_value ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->woman_value ?></div></th>
        <td>
            <input type="text" name="woman_value" value="<?php echo $__Context->config->woman_value ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_woman_value ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->age_var_name ?></div></th>
        <td>
            <input type="text" name="age_var_name" value="<?php echo $__Context->config->age_var_name ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_age_var_name ?></p>
        </td>
    </tr>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->recoid_var_name ?></div></th>
        <td>
            <input type="text" name="recoid_var_name" value="<?php echo $__Context->config->recoid_var_name ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_recoid_var_name ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->recoid_point ?></div></th>
        <td>
            <input type="text" name="recoid_point" value="<?php echo $__Context->config->recoid_point ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_recoid_point ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row"><div><?php echo $__Context->lang->joinid_point ?></div></th>
        <td>
            <input type="text" name="joinid_point" value="<?php echo $__Context->config->joinid_point ?>"  class="inputTypeText w100" />
            <p><?php echo $__Context->lang->about_joinid_point ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
