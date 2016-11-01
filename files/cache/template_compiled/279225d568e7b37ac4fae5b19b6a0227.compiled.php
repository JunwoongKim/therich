<?php if(!defined("__XE__"))exit;?>
<?php if(!$__Context->module_info->colorset){ ?>
  <?php $__Context->module_info->colorset = "default" ?>
<?php } ?>
<!--#Meta:modules/board/skins/board_skin(planner_title)/css/planner_common.css--><?php $__tmp=array('modules/board/skins/board_skin(planner_title)/css/planner_common.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/board_skin(planner_title)/css/planner_colorset_default.css--><?php $__tmp=array('modules/board/skins/board_skin(planner_title)/css/planner_colorset_default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(!$__Context->module_info->header_title_format){ ?>
  <?php  $__Context->module_info->header_title_format = 'h3' ?>
<?php } ?>
<?php if($__Context->module_info->title){ ?>
  <div class="boardHeader">
    <div class="boardHeaderBorder">
      <<?php echo $__Context->module_info->header_title_format ?>><?php echo $__Context->module_info->title;
if($__Context->module_info->sub_title){ ?> - <?php echo $__Context->module_info->sub_title;
} ?></<?php echo $__Context->module_info->header_title_format ?>>
    </div>
  </div>
<?php } ?>
<?php if($__Context->module_info->comment){ ?>
  <div class="boardDescription"><?php echo $__Context->module_info->comment ?></div>
<?php } ?>
<?php if(!$__Context->module_info->plan_count){;
$__Context->module_info->plan_count = 20;
} ?>
<?php if(!$__Context->module_info->duration_new = (int)$__Context->module_info->duration_new){;
$__Context->module_info->duration_new = 12;
} ?>
<?php if(!$__Context->module_info->day_cell_height){;
$__Context->module_info->day_cell_height = 80;
} ?>
<?php echo $__Context->module_info->header_text ?>
