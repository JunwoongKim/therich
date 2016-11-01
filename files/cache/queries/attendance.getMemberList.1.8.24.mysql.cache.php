<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_nick_name)) {
${'s_nick_name1_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name1_argument'}->createConditionValue();
if(!${'s_nick_name1_argument'}->isValid()) return ${'s_nick_name1_argument'}->getErrorMessage();
} else
${'s_nick_name1_argument'} = NULL;if(${'s_nick_name1_argument'} !== null) ${'s_nick_name1_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name2_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name2_argument'}->createConditionValue();
if(!${'s_user_name2_argument'}->isValid()) return ${'s_user_name2_argument'}->getErrorMessage();
} else
${'s_user_name2_argument'} = NULL;if(${'s_user_name2_argument'} !== null) ${'s_user_name2_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id3_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id3_argument'}->createConditionValue();
if(!${'s_user_id3_argument'}->isValid()) return ${'s_user_id3_argument'}->getErrorMessage();
} else
${'s_user_id3_argument'} = NULL;if(${'s_user_id3_argument'} !== null) ${'s_user_id3_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address4_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address4_argument'}->createConditionValue();
if(!${'s_email_address4_argument'}->isValid()) return ${'s_email_address4_argument'}->getErrorMessage();
} else
${'s_email_address4_argument'} = NULL;if(${'s_email_address4_argument'} !== null) ${'s_email_address4_argument'}->setColumnType('varchar');
if(isset($args->s_extra_vars)) {
${'s_extra_vars5_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars5_argument'}->createConditionValue();
if(!${'s_extra_vars5_argument'}->isValid()) return ${'s_extra_vars5_argument'}->getErrorMessage();
} else
${'s_extra_vars5_argument'} = NULL;if(${'s_extra_vars5_argument'} !== null) ${'s_extra_vars5_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate6_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate6_argument'}->createConditionValue();
if(!${'s_regdate6_argument'}->isValid()) return ${'s_regdate6_argument'}->getErrorMessage();
} else
${'s_regdate6_argument'} = NULL;if(${'s_regdate6_argument'} !== null) ${'s_regdate6_argument'}->setColumnType('date');
if(isset($args->s_last_login)) {
${'s_last_login7_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login7_argument'}->createConditionValue();
if(!${'s_last_login7_argument'}->isValid()) return ${'s_last_login7_argument'}->getErrorMessage();
} else
${'s_last_login7_argument'} = NULL;if(${'s_last_login7_argument'} !== null) ${'s_last_login7_argument'}->setColumnType('date');
if(isset($args->s_regdate_more)) {
${'s_regdate_more8_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more8_argument'}->createConditionValue();
if(!${'s_regdate_more8_argument'}->isValid()) return ${'s_regdate_more8_argument'}->getErrorMessage();
} else
${'s_regdate_more8_argument'} = NULL;if(${'s_regdate_more8_argument'} !== null) ${'s_regdate_more8_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less9_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less9_argument'}->createConditionValue();
if(!${'s_regdate_less9_argument'}->isValid()) return ${'s_regdate_less9_argument'}->getErrorMessage();
} else
${'s_regdate_less9_argument'} = NULL;if(${'s_regdate_less9_argument'} !== null) ${'s_regdate_less9_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more10_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more10_argument'}->createConditionValue();
if(!${'s_last_login_more10_argument'}->isValid()) return ${'s_last_login_more10_argument'}->getErrorMessage();
} else
${'s_last_login_more10_argument'} = NULL;if(${'s_last_login_more10_argument'} !== null) ${'s_last_login_more10_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less11_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less11_argument'}->createConditionValue();
if(!${'s_last_login_less11_argument'}->isValid()) return ${'s_last_login_less11_argument'}->getErrorMessage();
} else
${'s_last_login_less11_argument'} = NULL;if(${'s_last_login_less11_argument'} !== null) ${'s_last_login_less11_argument'}->setColumnType('date');

${'page13_argument'} = new Argument('page', $args->{'page'});
${'page13_argument'}->ensureDefaultValue('1');
if(!${'page13_argument'}->isValid()) return ${'page13_argument'}->getErrorMessage();

${'page_count14_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count14_argument'}->ensureDefaultValue('10');
if(!${'page_count14_argument'}->isValid()) return ${'page_count14_argument'}->getErrorMessage();

${'list_count15_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count15_argument'}->ensureDefaultValue('20');
if(!${'list_count15_argument'}->isValid()) return ${'list_count15_argument'}->getErrorMessage();

${'sort_index12_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index12_argument'}->ensureDefaultValue('attendance_total.total');
if(!${'sort_index12_argument'}->isValid()) return ${'sort_index12_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`attendance_total`.*')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`attendance_total`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`attendance_total`.`member_srl`',"equal")))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`nick_name`',$s_nick_name1_argument,"like")
,new ConditionWithArgument('`member`.`user_name`',$s_user_name2_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id3_argument,"like", 'or')
,new ConditionWithArgument('`member`.`email_address`',$s_email_address4_argument,"like", 'or')
,new ConditionWithArgument('`member`.`extra_vars`',$s_extra_vars5_argument,"like", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate6_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login7_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more8_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less9_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more10_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less11_argument,"less", 'or')),'and')
));
$query->setGroups(array(
'`member`.`member_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index12_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count15_argument'}, ${'page13_argument'}, ${'page_count14_argument'}));
return $query; ?>