<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/talkbox/skins/default/css/widget.css--><?php $__tmp=array('widgets/talkbox/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="redtokbox">
	<?php if($__Context->widget_info->message_title=='Y'){ ?><img src="/widgets/talkbox/skins/default/img/red-talk-box_title.png" alt="talkbox title"><?php } ?>
		<p class="message_title r5"<?php if($__Context->widget_info->title_color){ ?> style="background-color:<?php echo $__Context->widget_info->title_color ?>"<?php } ?>>
			<img src="/widgets/talkbox/skins/default/img/red-talk-box_online.png">
			<?php if($__Context->is_logged){ ?><span style="position: absolute; right: 5px;">
				<a href="JavaScript:messageTalkList('<?php echo $__Context->widget_info->xe_path ?>')"><img src="/widgets/talkbox/skins/default/img/red_list.png" alt="messagetalk list"></a>
				<a href="JavaScript:messageTalkFriends('<?php echo $__Context->widget_info->xe_path ?>')"><img src="/widgets/talkbox/skins/default/img/red_search.png" alt="messagetalk friends"></a>
			</span><?php } ?>
		</p>
    <ul class="message_widget"<?php if($__Context->widget_info->userbox_height){ ?> style="height: <?php echo $__Context->widget_info->userbox_height ?>px; overflow-y:scroll;"<?php } ?>>
        <?php if($__Context->widget_info->member_list&&count($__Context->widget_info->member_list))foreach($__Context->widget_info->member_list as $__Context->key => $__Context->val){ ?>
        <li class="r5">
        	<a href="#" class="member_<?php echo $__Context->val->member_srl ?>" onclick="return false"><?php echo htmlspecialchars($__Context->val->nick_name) ?></a>
    		<?php if($__Context->is_logged){ ?><span>
    			<a href="javascript:messageTalkSend('<?php echo $__Context->widget_info->xe_path ?>', <?php echo $__Context->val->member_srl ?>, '<?php echo $__Context->val->nick_name ?>');">
    				<img src="/widgets/talkbox/skins/default/img/red-talk-box_talk.png" alt="messagetalk">
				</a>
			</span><?php } ?>
    	</li>
        <?php } ?>
    </ul>
</div>
<script>
	function messageTalkList(path) {
	    if (path == '/') path = '';
	    window.open(path + "/<?php echo $__Context->widget_info->messagetalk ?>/talk/index.php","personal","width=400,height=600,scrollbars=yes");
	}
	function messageTalkSend(path, member_srl, nick_name) {
		if (path == '/') path = '';
		window.open(path + "/<?php echo $__Context->widget_info->messagetalk ?>/talk/detail.php?target_srl=" + member_srl + "&nick_name=" + nick_name,"personal","width=400,height=600,scrollbars=yes");
	}
	function messageTalkFriends(path) {
	    if (path == '/') path = '';
	    window.open(path + "/<?php echo $__Context->widget_info->messagetalk ?>/talk/findFriends.php","personal","width=400,height=600,scrollbars=yes");
	}
</script>