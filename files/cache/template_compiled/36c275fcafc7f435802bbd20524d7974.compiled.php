<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<div class="infoText"><?php echo nl2br($__Context->lang->about_input_config) ?></div>
<form action="./" method="post" onsubmit="return doCheckInputConfig(this)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="input_config" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row"><?php echo $__Context->lang->column_name ?></th>
        <th scope="row"><?php echo $__Context->lang->is_required ?></th>
        <th scope="row"><?php echo $__Context->lang->no_modification ?></th>
        <th scope="row"><?php echo $__Context->lang->length ?></th>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->user_id ?> <input type="hidden" name="user_id_type" value="text" /></th>
        <td><input type="checkbox" value="Y" checked="checked" disabled="disabled" /></td>
        <td><input type="checkbox" value="Y" checked="checked" disabled="disabled" /></td>
        <td>
            <input type="text" name="user_id_lower_length" value="<?php echo $__Context->config->user_id_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="user_id_upper_length" value="<?php echo $__Context->config->user_id_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->user_name ?> <input type="hidden" name="user_name_type" value="text" /></th>
        <td><input type="checkbox" value="Y" checked="checked" disabled="disabled" /></td>
        <td><input type="checkbox" name="user_name_no_mod" value="Y" <?php if($__Context->config->user_name_no_mod=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <input type="text" name="user_name_lower_length" value="<?php echo $__Context->config->user_name_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="user_name_upper_length" value="<?php echo $__Context->config->user_name_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->nick_name ?> <input type="hidden" name="nick_name_type" value="text" /></th>
        <td><input type="checkbox" value="Y" checked="checked" disabled="disabled" /></td>
        <td><input type="checkbox" name="nick_name_no_mod" value="Y" <?php if($__Context->config->nick_name_no_mod=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <input type="text" name="nick_name_lower_length" value="<?php echo $__Context->config->nick_name_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="nick_name_upper_length" value="<?php echo $__Context->config->nick_name_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->email_address ?> <input type="hidden" name="email_address_type" value="email_address" /></th>
        <td><input type="checkbox" value="Y" checked="checked" disabled="disabled" /></td>
        <td><input type="checkbox" name="email_address_no_mod" value="Y" <?php if($__Context->config->email_address_no_mod=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <input type="text" name="email_address_lower_length" value="<?php echo $__Context->config->email_address_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="email_address_upper_length" value="<?php echo $__Context->config->email_address_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->homepage ?> <input type="hidden" name="homepage_type" value="homepage" /></th>
        <td><input type="checkbox" name="homepage_required" value="Y" <?php if($__Context->config->homepage_required=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td><input type="checkbox" name="homepage_no_mod" value="Y" <?php if($__Context->config->homepage_no_mod=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <input type="text" name="homepage_lower_length" value="<?php echo $__Context->config->homepage_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="homepage_upper_length" value="<?php echo $__Context->config->homepage_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->blog ?> <input type="hidden" name="blog_type" value="homepage" /></th>
        <td><input type="checkbox" name="blog_required" value="Y" <?php if($__Context->config->blog_required=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td><input type="checkbox" name="blog_no_mod" value="Y" <?php if($__Context->config->blog_no_mod=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <input type="text" name="blog_lower_length" value="<?php echo $__Context->config->blog_lower_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="blog_upper_length" value="<?php echo $__Context->config->blog_upper_length ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
        </td>
    </tr>
    <tr>
        <th scope="col"><?php echo $__Context->lang->birthday ?> <input type="hidden" name="birthday_type" value="date" /></th>
        <td><input type="checkbox" name="birthday_required" value="Y" <?php if($__Context->config->birthday_required=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <select name="birthday_no_mod">
                <option value=""><?php echo $__Context->lang->notuse ?></option>
                <option value="Y" <?php if($__Context->config->birthday_no_mod=="Y"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->birthday_no_mod_op1 ?></option>
                <option value="Y2" <?php if($__Context->config->birthday_no_mod=="Y2"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->birthday_no_mod_op2 ?></option>
            </select>
        </td>
        <td>-</td>
    </tr>
    <?php $__Context->array_config = get_object_vars($__Context->config) ?>
    <?php if($__Context->extend_list&&count($__Context->extend_list))foreach($__Context->extend_list as $__Context->val){ ?>
    <?php $__Context->required = $__Context->val->column_name . '_required' ?>
    <?php $__Context->no_mod = $__Context->val->column_name . '_no_mod' ?>
    <?php $__Context->lower_length = $__Context->val->column_name . '_lower_length' ?>
    <?php $__Context->upper_length = $__Context->val->column_name . '_upper_length' ?>
    <?php $__Context->type = $__Context->val->column_name . '_type' ?>
    <tr>
        <th scope="col"><?php echo $__Context->val->column_title ?>(<?php echo $__Context->val->column_type ?>) <input type="hidden" name="<?php echo $__Context->type ?>" value="<?php echo $__Context->val->column_type ?>" /></th>
        <td>-</td>
        <td><input type="checkbox" name="<?php echo $__Context->no_mod ?>" value="Y" <?php if($__Context->array_config[$__Context->no_mod]=="Y"){ ?>checked="checked"<?php } ?> /></td>
        <td>
            <?php if($__Context->val->column_type=="text"){ ?>
            <input type="text" name="<?php echo $__Context->lower_length ?>" value="<?php echo $__Context->array_config[$__Context->lower_length] ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->great_than ?>
            <input type="text" name="<?php echo $__Context->upper_length ?>" value="<?php echo $__Context->array_config[$__Context->upper_length] ?>" class="inputTypeText w40" /> <?php echo $__Context->lang->less_than ?>
            <?php }else{ ?>
            -
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
    <tr>
        <th colspan="4" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
