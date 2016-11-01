<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/maps/tpl/common','header_tabs.html') ?>
<!--#Meta:modules/maps/tpl/js/maps_list.js--><?php $__tmp=array('modules/maps/tpl/js/maps_list.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<h1><?php echo $__Context->lang->maps_module_maps_list ?> (<?php echo $__Context->total_count ?>)</h1>
<?php if(!$__Context->maps_error){ ?>
<table class="maps_list x_table x_table-striped x_table-hover">
	<thead>
		<tr class="maps_list_header">
			<th scope="col" class="nowr"><?php echo $__Context->lang->maps_module_maps_srl ?></th>
			<th scope="col" class="title"><?php echo $__Context->lang->maps_module_maps_title ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_setup ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->maps_list&&count($__Context->maps_list))foreach($__Context->maps_list as $__Context->no=>$__Context->map_item){ ?><tr class="maps_list_items">
			<td scope="row" class="maps_no nowr"><?php echo $__Context->map_item->maps_srl ?></td>
			<td class="maps_title title"><a href="<?php echo getUrl('act','dispMapsAdminWrite','maps_srl',$__Context->map_item->maps_srl) ?>"><?php if(trim($__Context->map_item->title)){;
echo htmlspecialchars($__Context->map_item->title);
}else{ ?><em><?php echo $__Context->lang->maps_module_untitled ?></em><?php } ?></a></td>
			<td class="nowr"><a href="<?php echo getUrl('act','dispMapsAdminWrite','maps_srl',$__Context->map_item->maps_srl) ?>"><?php echo $__Context->lang->cmd_edit ?></a> | <a onclick="deleteMap('<?php echo $__Context->map_item->maps_srl ?>');return false;" href="#"><?php echo $__Context->lang->cmd_delete ?></a></td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_pagination">
	<ul class="maps_pagination">
		<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
		<?php } ?>
		<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
	</ul>
</div>
<?php }else{ ?>
<h2>Maps Module error</h2>
<p>Error Code: <?php echo $__Context->maps_error ?><br />
Error Message: <?php echo $__Context->maps_message ?></p>
<?php } ?>