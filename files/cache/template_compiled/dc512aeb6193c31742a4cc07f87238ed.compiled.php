<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/join_extend/tpl/js/join_extend_admin.js--><?php $__tmp=array('modules/join_extend/tpl/js/join_extend_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/join_extend/tpl/filter','insert_config.xml');$__xmlFilter->compile(); ?>
<h3 class="xeAdmin"><?php echo $__Context->lang->join_extend ?> <span class="gray"><?php echo $__Context->lang->cmd_management ?></span></h3>
<div class="header4">
    <ul class="localNavigation">
        <li <?php if($__Context->act=='dispJoin_extendAdminIndex'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminIndex','page','') ?>"><?php echo $__Context->lang->basic_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminJuminConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminJuminConfig','page','') ?>"><?php echo $__Context->lang->jumin_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminAgreeConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminAgreeConfig','page','') ?>"><?php echo $__Context->lang->agree_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminExtendVarConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminExtendVarConfig','page','') ?>"><?php echo $__Context->lang->extend_var_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminRestrictionsConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminRestrictionsConfig','page','') ?>"><?php echo $__Context->lang->restrictions_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminAfterConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminAfterConfig','page','') ?>"><?php echo $__Context->lang->after_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminInputConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminInputConfig','page','') ?>"><?php echo $__Context->lang->input_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminInvitationConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminInvitationConfig','page','') ?>"><?php echo $__Context->lang->invitation_config ?></a></li>
        <li <?php if($__Context->act=='dispJoin_extendAdminCouponConfig'){ ?>class="on"<?php } ?>><a href="<?php echo getUrl('act','dispJoin_extendAdminCouponConfig','page','') ?>"><?php echo $__Context->lang->coupon_config ?></a></li>
    </ul>
</div>
