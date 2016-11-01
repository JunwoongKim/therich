<?php if(!defined("__XE__"))exit;?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div class="x_clearfix">
	<?php Context::addJsFile("modules/attendance/ruleset/GiftUpdate.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="<?php echo getUrl('') ?>" method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="GiftUpdate" />
		<input type="hidden" name="module" value="attendance" />
		<input type="hidden" name="act" value="procAttendanceAdminInsertGift" />
		<table class="x_table x_table-striped x_table-hover" style="margin-top:20px;">
			<thead>
				<tr>
					<th scope="col" class="no" style="width:100px;">상품고유번호</th>
					<th scope="col" class="no" style="width:100px;">닉네임</th>
					<th scope="col" class="title" style="width:500px;">상품명</th>
					<th scope="col" class="no" style="width:100px;">지급여부</th>
					<th scope="col" class="m_no" style="width:50px;">받은날짜</th>
				</tr>
			</thead>
			<tbody>
				<?php if($__Context->admingift_list&&count($__Context->admingift_list))foreach($__Context->admingift_list as $__Context->key => $__Context->val){ ?>
				<?php 
					$__Context->oMemberModel = getModel('member');
					$__Context->member_info = $__Context->oMemberModel->getMemberInfoByMemberSrl($__Context->val->member_srl);
				 ?>
				<tr>
					<td><?php echo $__Context->val->present_srl ?></td>
					<td><?php echo $__Context->member_info->nick_name ?></td> <?php if(!$__Context->member_info->member_srl){ ?><td>타겟없음</td><?php } ?>
					<td><?php echo $__Context->val->present ?></td>
					<td>
						<?php if($__Context->val->sender==='Y'){ ?><span>지급완료</span><?php } ?>
						<?php if($__Context->val->sender!=='Y'){ ?><button type="submit" name="present_srl" value="<?php echo $__Context->val->present_srl ?>" class="x_btn">
						지급중
						</button><?php } ?>
					</td>
					<td>
						<?php echo zdate($__Context->val->regdate,"Y-m-d") ?>
						</br>
						<?php echo zdate($__Context->val->regdate,"H:i:s") ?>
					</td>
				</tr>
				<?php } ?>
				<?php if(!$__Context->admingift_list){ ?>
				<tr>
					<td colspan="8"><?php echo $__Context->lang->msg_not_exist_data ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</form>
</div>
<div class="ListNavigation">
    <div class="pagination">
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
</div>
