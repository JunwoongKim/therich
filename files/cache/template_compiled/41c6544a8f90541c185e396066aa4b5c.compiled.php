<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/hb_bank/skins/default/js/hb_bank.js--><?php $__tmp=array('widgets/hb_bank/skins/default/js/hb_bank.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/hb_bank/skins/default/css/widget.css--><?php $__tmp=array('widgets/hb_bank/skins/default/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="bankinfo">
	<div class="title"><strong>무통장 입금계좌안내</strong></div>
	<div>
		<ul>
			<?php if($__Context->widget_info->bank_num01){ ?>
			<li>
				&#183; <strong><?php echo $__Context->widget_info->bank_name01 ?></strong> : <span><?php echo $__Context->widget_info->bank_num01 ?></span>
			</li>
			<?php } ?>
			<?php if($__Context->widget_info->bank_num02){ ?>
			<li>
				&#183; <strong><?php echo $__Context->widget_info->bank_name02 ?></strong> : <span><?php echo $__Context->widget_info->bank_num02 ?></span>
			</li>
			<?php } ?>
			<?php if($__Context->widget_info->bank_info){ ?>
			<li>
				&#183; <strong>예금주</strong> : <strong><?php echo $__Context->widget_info->bank_info ?></strong>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>