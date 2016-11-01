<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCouponList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->coupon_code)) {
${'coupon_code1_argument'} = new ConditionArgument('coupon_code', $args->coupon_code, 'like');
${'coupon_code1_argument'}->createConditionValue();
if(!${'coupon_code1_argument'}->isValid()) return ${'coupon_code1_argument'}->getErrorMessage();
} else
${'coupon_code1_argument'} = NULL;if(${'coupon_code1_argument'} !== null) ${'coupon_code1_argument'}->setColumnType('varchar');
if(isset($args->own_member_srl)) {
${'own_member_srl2_argument'} = new ConditionArgument('own_member_srl', $args->own_member_srl, 'equal');
${'own_member_srl2_argument'}->createConditionValue();
if(!${'own_member_srl2_argument'}->isValid()) return ${'own_member_srl2_argument'}->getErrorMessage();
} else
${'own_member_srl2_argument'} = NULL;if(${'own_member_srl2_argument'} !== null) ${'own_member_srl2_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->regdate)) {
${'regdate4_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate4_argument'}->createConditionValue();
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
} else
${'regdate4_argument'} = NULL;if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');
if(isset($args->joindate)) {
${'joindate5_argument'} = new ConditionArgument('joindate', $args->joindate, 'like_prefix');
${'joindate5_argument'}->createConditionValue();
if(!${'joindate5_argument'}->isValid()) return ${'joindate5_argument'}->getErrorMessage();
} else
${'joindate5_argument'} = NULL;if(${'joindate5_argument'} !== null) ${'joindate5_argument'}->setColumnType('date');

${'page7_argument'} = new Argument('page', $args->{'page'});
${'page7_argument'}->ensureDefaultValue('1');
if(!${'page7_argument'}->isValid()) return ${'page7_argument'}->getErrorMessage();

${'page_count8_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count8_argument'}->ensureDefaultValue('10');
if(!${'page_count8_argument'}->isValid()) return ${'page_count8_argument'}->getErrorMessage();

${'list_count9_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count9_argument'}->ensureDefaultValue('100');
if(!${'list_count9_argument'}->isValid()) return ${'list_count9_argument'}->getErrorMessage();

${'sort_index6_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index6_argument'}->ensureDefaultValue('coupon_srl');
if(!${'sort_index6_argument'}->isValid()) return ${'sort_index6_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_join_extend_coupon`', '`join_extend_coupon`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`code`',$coupon_code1_argument,"like")
,new ConditionWithArgument('`own_member_srl`',$own_member_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$regdate4_argument,"like_prefix", 'and')
,new ConditionWithArgument('`joindate`',$joindate5_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index6_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count9_argument'}, ${'page7_argument'}, ${'page_count8_argument'}));
return $query; ?>