<?php if(!defined("__XE__"))exit;
if(!$__Context->module_info->colorset){ ?>
    <?php $__Context->module_info->colorset == "gray" ?>
<?php } ?>
<!--#Meta:modules/attendance/skins/sky_at_board/css/gray.css--><?php $__tmp=array('modules/attendance/skins/sky_at_board/css/gray.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="at_header">
	<?php if($__Context->module_info->title){ ?>
	<div class="boardTitle">
		<h2 class="boardTitleText"><a href="<?php echo getUrl('','mid',$__Context->mid,'listStyle',$__Context->listStyle) ?>"><?php echo $__Context->module_info->title;
if($__Context->module_info->sub_title){ ?> : <em><?php echo $__Context->module_info->sub_title ?></em><?php } ?></a></h2>
	</div>
	<?php } ?>
	<?php if($__Context->module_info->header_text){ ?>
	<p class="boardDescription"><?php echo $__Context->module_info->header_text ?></p>
	<?php } ?>
</div>
