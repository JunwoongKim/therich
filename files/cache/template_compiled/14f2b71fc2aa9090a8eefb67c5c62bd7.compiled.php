<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/join_extend/tpl','header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/join_extend/tpl/filter','generate_coupon.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/join_extend/tpl/filter','delete_coupon.xml');$__xmlFilter->compile(); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<form action="./" method="post" onsubmit="return procFilter(this, insert_config)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<input type="hidden" name="config_type" value="coupon_config" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row" class="w150"><div><?php echo $__Context->lang->use_coupon ?></div></th>
        <td>
            <select name="use_coupon">
                <option value="N"<?php if($__Context->config->use_coupon=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
                <option value="Y"<?php if($__Context->config->use_coupon=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
            </select>
            <p><?php echo $__Context->lang->about_use_coupon ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row" class="w150"><div><?php echo $__Context->lang->coupon_var_name ?></div></th>
        <td>
            <input type="type=" name="coupon_var_name" class="inputTypeText w100" value="<?php echo $__Context->config->coupon_var_name ?>" />
            <p><?php echo $__Context->lang->about_coupon_var_name ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
<form action="./" method="post" onsubmit="return procFilter(this, generate_coupon)"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="row" class="w150"><div><?php echo $__Context->lang->generate_coupon ?></div></th>
        <td>
            <input type="type=" name="count" class="inputTypeText w40" /> <?php echo $__Context->lang->unit_number ?>,
            
            <label><?php echo $__Context->lang->receive_point ?> : <input type="type=" name="point" class="inputTypeText w40" maxlength="10" /></label>,
            
            <label for="validate_input"><?php echo $__Context->lang->validdate ?> : </label>
            <input type="hidden" name="validdate" id="date_validdate" value="" />
            <input id="validate_input" type="text" value="" readonly="readonly" class="inputDate inputTypeText" />
            
            <p><?php echo $__Context->lang->about_generate_coupon ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="2" class="button">
            <span class="button black strong"><input type="submit" value="<?php echo $__Context->lang->cmd_make ?>" accesskey="s" /></span>
        </th>
    </tr>
    </table>
</form>
<!-- 삭제를 위한 임시 form -->
<form id="fo_coupon" action="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="coupon_srls" value="" />
</form>
<form action="./" method="get" id="coupon_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
    <input type="hidden" name="module" value="admin" />
    <input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
    <select name="joindate">
        <option value=""><?php echo $__Context->lang->my_view_all ?></option>
        <option value="-" <?php if($__Context->joindate=="-"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->view_not_use ?></option>
    </select>
    <span class="button green"><input type="submit" value="<?php echo $__Context->lang->view ?>" /></span>
    <table cellspacing="0" class="rowTable">
    <tr>
        <th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;" /></div></th>
        <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->coupon_code ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->receive_point ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->validdate ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->invitation_join_id ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->invitation_joindate ?></div></th>
        <th scope="col"><div>&nbsp;</div></th>
    </tr>
    <?php if($__Context->coupon_list&&count($__Context->coupon_list))foreach($__Context->coupon_list as $__Context->no => $__Context->val){ ?>
    <tr>
        <td class="center"><input type="checkbox" name="cart" value="<?php echo $__Context->val->coupon_srl ?>" /></td>
        <td><?php echo $__Context->no ?></td>
        <td style="font-family: monospace"><?php echo $__Context->val->code ?></td>
        <td><?php echo $__Context->val->point ?></td>
        <td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
        <td><?php echo zdate($__Context->val->validdate,"Y-m-d") ?></td>
        <td><?php echo $__Context->val->join_id ?></td>
        <td><?php echo zdate($__Context->val->joindate,"Y-m-d") ?></td>
        <td><a href="#" onclick="doDeleteCoupon('<?php echo $__Context->val->coupon_srl ?>');return false;" title="<?php echo htmlspecialchars($__Context->lang->cmd_delete) ?>" class="buttonSet buttonDelete"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
    </tr>
    <?php } ?>
    </table>
</form>
<div class="fl">
    <a href="#" onclick="doDeleteCoupons();return false;" class="button red"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
</div>
<!-- 페이지 네비게이션 -->
<div class="pagination a1">
    <a href="<?php echo getUrl('page','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no) ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page) ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div>
<script type="text/javascript">
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
        $(".inputDate").datepicker(option);
    });
})(jQuery);
</script>