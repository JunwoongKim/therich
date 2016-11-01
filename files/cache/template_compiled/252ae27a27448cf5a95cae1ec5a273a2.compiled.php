<?php if(!defined("__XE__"))exit;?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/board_skin(planner_title)','header.html') ?>
<?php if($__Context->oDocument->isExists() && $__Context->module_info->default_style != 'blog'){ ?>
  <div class="viewDocument">
    <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/board_skin(planner_title)','view_document.html') ?>
  </div>
<?php } ?>
<?php if($__Context->view_document!=1){ ?>
  <?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/board_skin(planner_title)','planner_title.html') ?>
<?php } ?>
<?php  $__Context->view_document = 0 ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/board_skin(planner_title)','footer.html') ?>
