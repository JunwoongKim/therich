<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/easyxe/tpl/css/font-awesome.css--><?php $__tmp=array('modules/easyxe/tpl/css/font-awesome.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/easyxe/tpl/css/textassist.css--><?php $__tmp=array('modules/easyxe/tpl/css/textassist.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/easyxe/tpl/css/admin_bar.css--><?php $__tmp=array('modules/easyxe/tpl/css/admin_bar.css','','','-100');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/easyxe/tpl/js/admin_bar.js--><?php $__tmp=array('modules/easyxe/tpl/js/admin_bar.js','','','-100');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/easyxe/tpl/js/adminBarPlugin.js--><?php $__tmp=array('modules/easyxe/tpl/js/adminBarPlugin.js','','','-100');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->module_info->module != 'page'){ ?><!--#Meta:modules/easyxe/tpl/js/plugins/textassist.js--><?php $__tmp=array('modules/easyxe/tpl/js/plugins/textassist.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<nav id="easyAdminBar" class="adminbar adminbar-top"<?php if($__Context->easyAdminBarStatus != 'o'){ ?> style="display:none"<?php } ?>>
	<div class="nav-collapse">
		<button type="button"><i class="fa fa-bars"></i></button>
	</div>
	<ul class="nav-gnb">
		<!-- 시작 페이지 -->
		<li class="home">
			<a href="<?php echo getUrl() ?>">
				<i class="fa fa-home"></i>
			</a>
		</li>
		<!-- 관리자 -->
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin') ?>"><i class="fa fa-tachometer"></i> 관리자</a>
		</li>
		<!-- 설정 -->
		<li<?php if($__Context->act == 'dispAdminConfigGeneral'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAdminConfigGeneral') ?>" data-menu="config"><i class="fa fa-cog"></i> 설정
			</a>
			<div class="nav-panel">
				<ul class="panel-tab-square">
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAdminConfigGeneral') ?>"><i class="fa fa-cog"></i> 일반</a>
					</li>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminConfig') ?>"> <i class="fa fa-user"></i> 회원 설정
						</a>
					</li>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPointAdminConfig') ?>">
							<i class="fa fa-database"></i> 
							포인트
						</a>
					</li>
					<?php if(is_object(getClass('attendance'))){ ?><li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAttendanceAdminList') ?>">
							<i class="fa fa-calendar"></i> 
							출석부
						</a>
					</li><?php } ?>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispIntegration_searchAdminContent') ?>">
							<i class="fa fa-search"></i> 
							통합 검색
						</a>
					</li>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispEasyxeAdminSetting') ?>">
							<i class="fa fa-bolt"></i> 
							EasyXE
						</a>
					</li>
				</ul>
			</div>
		</li>
		<!-- 애드온 -->
		<li class="adminbar-addon">
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispEasyxeAdminManageAddon') ?>" data-menu="addon"><i class="fa fa-toggle-on"></i> 애드온</a>
			<ul>
				<!-- 애드온 목록은 필요 시에 Ajax로 호출하여 보여준다 -->
				<li class="addon-loading">
					<a href="#addon-loading">
						<i class="fa fa-spinner fa-spin"></i> 로딩중...
					</a>
				</li>
			</ul>
		</li>
		<!-- 회원 -->
		<li<?php if($__Context->act == 'dispMemberAdminList'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList') ?>" data-menu="member" data-panel-resize="true"> <i class="fa fa-user"></i> <?php echo $__Context->lang->manage_member ?> <i class="fa fa-caret-down"></i>
			</a>
			<div class="nav-panel">
				<ul class="panel-tab-square">
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList') ?>">
							<i class="fa fa-list"></i>회원 목록
						</a>
					</li>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMemberAdminGroupList') ?>">
							<i class="fa fa-users"></i>회원 그룹
						</a>
					</li>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPointAdminPointList') ?>">
							<i class="fa fa-database"></i>포인트
						</a>
					</li>
					<?php if(is_object(getClass('loginlog'))){ ?><li class="loginlog">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLoginlogAdminList') ?>">
							<i class="fa fa-history"></i>로그인 기록
						</a>
					</li><?php } ?>
					<?php if(is_object(getClass('pointhistory'))){ ?><li class="loginlog">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPointhistoryAdminList') ?>">
							<i class="fa fa-book"></i>포인트 내역
						</a>
					</li><?php } ?>
					<?php if(is_object(getClass('ncenterlite'))){ ?><li class="loginlog">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispNcenterliteAdminList') ?>">
							<i class="fa fa-bell-o"></i>알림 목록
						</a>
					</li><?php } ?>
				</ul>
			</div>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList') ?>"> <i class="fa fa-pencil-square-o"></i> <?php echo $__Context->lang->manage_document ?>
			</a>
			<ul>
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminDeclared') ?>">신고글 관리</a>
				</li>
			</ul>
		</li>
		<li<?php if($__Context->act == 'dispCommentAdminList'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCommentAdminList') ?>">
				<i class="fa fa-comment"></i> <?php echo $__Context->lang->manage_comment ?>
			</a>
			<ul>
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispCommentAdminDeclared') ?>">신고댓글 관리</a>
				</li>
			</ul>
		</li>
		<li<?php if($__Context->act == 'dispFileAdminList'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispFileAdminList') ?>" data-menu="file">
				<i class="fa fa-paperclip"></i> <?php echo $__Context->lang->manage_file ?> <i class="fa fa-caret-down"></i>
			</a>
			<div class="nav-panel">
				<ul class="panel-tab-square">
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispFileAdminList') ?>">
						<i class="fa fa-list"></i>
						파일 목록
						</a>
					</li>
					<li class="loginlog">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminFileBox') ?>"><i class="fa fa-inbox"></i>파일 보관함</a>
					</li>
				</ul>
			</div>
		</li>
		<li<?php if($__Context->act == 'dispMenuAdminSiteMap'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteMap') ?>"<?php if(isset($__Context->layout_info->menu) && count($__Context->layout_info->menu) > 0 && FALSE){ ?> data-menu="menu"<?php } ?>>
				<i class="fa fa-sitemap"></i> 메뉴
			</a>
			<?php if(isset($__Context->layout_info->menu) && count($__Context->layout_info->menu) > 0){ ?><ul>
				<?php if($__Context->layout_info->menu&&count($__Context->layout_info->menu))foreach($__Context->layout_info->menu as $__Context->no=>$__Context->menu){ ?><li>
					<a href="<?php echo getUrl('act', 'dispEasyxeAdminMenuTree', 'menu_srl', $__Context->menu->menu_srl) ?>"><?php echo $__Context->menu->title ?></a>
				</li><?php } ?>
			</ul><?php } ?>
		</li>
		<li>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPageAdminContent') ?>" data-menu-disabled="page">
			<i class="fa fa-book"></i> 페이지
			</a>
			<ul class="nav-panel">
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPageAdminContent') ?>">페이지 목록</a>
				</li>
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispPageAdminInsert') ?>">페이지 추가</a>
				</li>
			</ul>
		</li>
		<li<?php if($__Context->act == 'dispBoardAdminContent'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispBoardAdminContent') ?>" data-menu="board"> <i class="fa fa-paper-plane"></i> 게시판 <i class="fa fa-caret-down"></i>
			</a>
			<ul>
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispBoardAdminContent') ?>">
						<i class="fa fa-list"></i>
						게시판 목록
					</a>
				</li>
				<li>
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispBoardAdminInsertBoard') ?>">
						<i class="fa fa-plus"></i>
						게시판 추가
					</a>
				</li>
			</ul>
		</li>
		<li<?php if($__Context->act == 'dispMenuAdminSiteDesign'){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteDesign') ?>" data-menu="design"><i class="fa fa-star"></i> 디자인 <i class="fa fa-caret-down"></i>
			</a>
			<div class="nav-panel">
				<ul class="panel-tab-square">
					<?php if($__Context->module_info->layout_srl){ ?><li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminModify', 'layout_srl', $__Context->module_info->layout_srl) ?>">
						<i class="fa fa-desktop"></i> PC
						</a>
					</li><?php } ?>
					<?php if($__Context->module_info->mlayout_srl){ ?><li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminModify', 'layout_srl', $__Context->module_info->mlayout_srl) ?>"><i class="fa fa-mobile"></i> 모바일</a>
					</li><?php } ?>
					<li>
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispEasyxeAdminChangeModuleLayout') ?>"><i class="fa fa-retweet"></i> 일괄 변경</a>
					</li>
					<li class="loginlog">
						<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispMenuAdminSiteDesign') ?>">
							<i class="fa fa-cogs"></i> 전체 디자인
						</a>
					</li>
				</ul>
			</div>
		</li>
	</ul>
	<div class="nav-aside" style="display:block">
		<ul>
			<li>
				<?php if($__Context->module_info->module == 'board'){ ?><a href="<?php echo getUrl('act', 'dispBoardAdminBoardInfo') ?>" data-menu="boardConfig">게시판 설정</a><?php } ?>
			</li>
		</ul>
		<div class="nav-panel">
			<ul class="panel-tab-square">
				<li class="loginlog" >
					<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispEasyxeAdminCreateBoard') ?>">
						<i class="fa fa-plus"></i> 게시판 추가
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="clearfix"></div>
</nav>
<button class="nav-toggle"<?php if($__Context->easyAdminBarStatus == 'o'){ ?> style="top:46px"<?php } ?>>
	<?php if($__Context->easyAdminBarStatus == 'o'){ ?><i class="fa fa-chevron-down"></i><?php } ?>
	<?php if($__Context->easyAdminBarStatus != 'o'){ ?><i class="fa fa-chevron-up"></i><?php } ?>
</button>