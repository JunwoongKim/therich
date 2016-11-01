<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin62_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin62_argument'}->createConditionValue();
if(!${'is_admin62_argument'}->isValid()) return ${'is_admin62_argument'}->getErrorMessage();
} else
${'is_admin62_argument'} = NULL;if(${'is_admin62_argument'} !== null) ${'is_admin62_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied63_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied63_argument'}->createConditionValue();
if(!${'is_denied63_argument'}->isValid()) return ${'is_denied63_argument'}->getErrorMessage();
} else
${'is_denied63_argument'} = NULL;if(${'is_denied63_argument'} !== null) ${'is_denied63_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls64_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls64_argument'}->createConditionValue();
if(!${'member_srls64_argument'}->isValid()) return ${'member_srls64_argument'}->getErrorMessage();
} else
${'member_srls64_argument'} = NULL;if(${'member_srls64_argument'} !== null) ${'member_srls64_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id65_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id65_argument'}->createConditionValue();
if(!${'s_user_id65_argument'}->isValid()) return ${'s_user_id65_argument'}->getErrorMessage();
} else
${'s_user_id65_argument'} = NULL;if(${'s_user_id65_argument'} !== null) ${'s_user_id65_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name66_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name66_argument'}->createConditionValue();
if(!${'s_user_name66_argument'}->isValid()) return ${'s_user_name66_argument'}->getErrorMessage();
} else
${'s_user_name66_argument'} = NULL;if(${'s_user_name66_argument'} !== null) ${'s_user_name66_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name67_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name67_argument'}->createConditionValue();
if(!${'s_nick_name67_argument'}->isValid()) return ${'s_nick_name67_argument'}->getErrorMessage();
} else
${'s_nick_name67_argument'} = NULL;if(${'s_nick_name67_argument'} !== null) ${'s_nick_name67_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name68_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name68_argument'}->createConditionValue();
if(!${'html_nick_name68_argument'}->isValid()) return ${'html_nick_name68_argument'}->getErrorMessage();
} else
${'html_nick_name68_argument'} = NULL;if(${'html_nick_name68_argument'} !== null) ${'html_nick_name68_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address69_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address69_argument'}->createConditionValue();
if(!${'s_email_address69_argument'}->isValid()) return ${'s_email_address69_argument'}->getErrorMessage();
} else
${'s_email_address69_argument'} = NULL;if(${'s_email_address69_argument'} !== null) ${'s_email_address69_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday70_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday70_argument'}->createConditionValue();
if(!${'s_birthday70_argument'}->isValid()) return ${'s_birthday70_argument'}->getErrorMessage();
} else
${'s_birthday70_argument'} = NULL;if(${'s_birthday70_argument'} !== null) ${'s_birthday70_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars71_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars71_argument'}->createConditionValue();
if(!${'s_extra_vars71_argument'}->isValid()) return ${'s_extra_vars71_argument'}->getErrorMessage();
} else
${'s_extra_vars71_argument'} = NULL;if(${'s_extra_vars71_argument'} !== null) ${'s_extra_vars71_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate72_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate72_argument'}->createConditionValue();
if(!${'s_regdate72_argument'}->isValid()) return ${'s_regdate72_argument'}->getErrorMessage();
} else
${'s_regdate72_argument'} = NULL;if(${'s_regdate72_argument'} !== null) ${'s_regdate72_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login73_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login73_argument'}->createConditionValue();
if(!${'s_last_login73_argument'}->isValid()) return ${'s_last_login73_argument'}->getErrorMessage();
} else
${'s_last_login73_argument'} = NULL;if(${'s_last_login73_argument'} !== null) ${'s_last_login73_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more74_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more74_argument'}->createConditionValue();
if(!${'s_regdate_more74_argument'}->isValid()) return ${'s_regdate_more74_argument'}->getErrorMessage();
} else
${'s_regdate_more74_argument'} = NULL;if(${'s_regdate_more74_argument'} !== null) ${'s_regdate_more74_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less75_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less75_argument'}->createConditionValue();
if(!${'s_regdate_less75_argument'}->isValid()) return ${'s_regdate_less75_argument'}->getErrorMessage();
} else
${'s_regdate_less75_argument'} = NULL;if(${'s_regdate_less75_argument'} !== null) ${'s_regdate_less75_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more76_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more76_argument'}->createConditionValue();
if(!${'s_last_login_more76_argument'}->isValid()) return ${'s_last_login_more76_argument'}->getErrorMessage();
} else
${'s_last_login_more76_argument'} = NULL;if(${'s_last_login_more76_argument'} !== null) ${'s_last_login_more76_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less77_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less77_argument'}->createConditionValue();
if(!${'s_last_login_less77_argument'}->isValid()) return ${'s_last_login_less77_argument'}->getErrorMessage();
} else
${'s_last_login_less77_argument'} = NULL;if(${'s_last_login_less77_argument'} !== null) ${'s_last_login_less77_argument'}->setColumnType('date');

${'page80_argument'} = new Argument('page', $args->{'page'});
${'page80_argument'}->ensureDefaultValue('1');
if(!${'page80_argument'}->isValid()) return ${'page80_argument'}->getErrorMessage();

${'page_count81_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count81_argument'}->ensureDefaultValue('10');
if(!${'page_count81_argument'}->isValid()) return ${'page_count81_argument'}->getErrorMessage();

${'list_count82_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count82_argument'}->ensureDefaultValue('20');
if(!${'list_count82_argument'}->isValid()) return ${'list_count82_argument'}->getErrorMessage();

${'sort_index78_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index78_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index78_argument'}->isValid()) return ${'sort_index78_argument'}->getErrorMessage();

${'sort_order79_argument'} = new SortArgument('sort_order79', $args->sort_order);
${'sort_order79_argument'}->ensureDefaultValue('asc');
if(!${'sort_order79_argument'}->isValid()) return ${'sort_order79_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin62_argument,"equal")
,new ConditionWithArgument('`denied`',$is_denied63_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls64_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id65_argument,"like")
,new ConditionWithArgument('`user_name`',$s_user_name66_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name67_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name68_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address69_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday70_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars71_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate72_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login73_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more74_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less75_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more76_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less77_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index78_argument'}, $sort_order79_argument)
));
$query->setLimit(new Limit(${'list_count82_argument'}, ${'page80_argument'}, ${'page_count81_argument'}));
return $query; ?>