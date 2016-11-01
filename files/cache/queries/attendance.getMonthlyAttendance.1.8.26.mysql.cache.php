<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMonthlyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->month)) {
${'month46_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month46_argument'}->createConditionValue();
if(!${'month46_argument'}->isValid()) return ${'month46_argument'}->getErrorMessage();
} else
${'month46_argument'} = NULL;if(${'month46_argument'} !== null) ${'month46_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl47_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl47_argument'}->createConditionValue();
if(!${'member_srl47_argument'}->isValid()) return ${'member_srl47_argument'}->getErrorMessage();
} else
${'member_srl47_argument'} = NULL;if(${'member_srl47_argument'} !== null) ${'member_srl47_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`monthly`', '`monthly`')
,new SelectExpression('`monthly_point`', '`monthly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$month46_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl47_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>