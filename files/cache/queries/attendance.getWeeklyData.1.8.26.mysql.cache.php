<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday10_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday10_argument'}->createConditionValue();
if(!${'monday10_argument'}->isValid()) return ${'monday10_argument'}->getErrorMessage();
} else
${'monday10_argument'} = NULL;if(${'monday10_argument'} !== null) ${'monday10_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday11_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday11_argument'}->createConditionValue();
if(!${'sunday11_argument'}->isValid()) return ${'sunday11_argument'}->getErrorMessage();
} else
${'sunday11_argument'} = NULL;if(${'sunday11_argument'} !== null) ${'sunday11_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl12_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl12_argument'}->createConditionValue();
if(!${'member_srl12_argument'}->isValid()) return ${'member_srl12_argument'}->getErrorMessage();
} else
${'member_srl12_argument'} = NULL;if(${'member_srl12_argument'} !== null) ${'member_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`weekly`', '`weekly`')
,new SelectExpression('`weekly_point`', '`weekly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday10_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday11_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl12_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>