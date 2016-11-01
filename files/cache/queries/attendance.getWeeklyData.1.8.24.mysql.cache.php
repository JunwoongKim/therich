<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday8_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday8_argument'}->createConditionValue();
if(!${'monday8_argument'}->isValid()) return ${'monday8_argument'}->getErrorMessage();
} else
${'monday8_argument'} = NULL;if(${'monday8_argument'} !== null) ${'monday8_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday9_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday9_argument'}->createConditionValue();
if(!${'sunday9_argument'}->isValid()) return ${'sunday9_argument'}->getErrorMessage();
} else
${'sunday9_argument'} = NULL;if(${'sunday9_argument'} !== null) ${'sunday9_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl10_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl10_argument'}->createConditionValue();
if(!${'member_srl10_argument'}->isValid()) return ${'member_srl10_argument'}->getErrorMessage();
} else
${'member_srl10_argument'} = NULL;if(${'member_srl10_argument'} !== null) ${'member_srl10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`weekly`', '`weekly`')
,new SelectExpression('`weekly_point`', '`weekly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday8_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday9_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl10_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>