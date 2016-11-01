<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMonthlyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->month)) {
${'month19_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month19_argument'}->createConditionValue();
if(!${'month19_argument'}->isValid()) return ${'month19_argument'}->getErrorMessage();
} else
${'month19_argument'} = NULL;if(${'month19_argument'} !== null) ${'month19_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl20_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl20_argument'}->createConditionValue();
if(!${'member_srl20_argument'}->isValid()) return ${'member_srl20_argument'}->getErrorMessage();
} else
${'member_srl20_argument'} = NULL;if(${'member_srl20_argument'} !== null) ${'member_srl20_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`monthly`', '`monthly`')
,new SelectExpression('`monthly_point`', '`monthly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$month19_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl20_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>