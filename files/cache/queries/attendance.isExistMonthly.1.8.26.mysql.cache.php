<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistMonthly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl44_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl44_argument'}->createConditionValue();
if(!${'member_srl44_argument'}->isValid()) return ${'member_srl44_argument'}->getErrorMessage();
} else
${'member_srl44_argument'} = NULL;if(${'member_srl44_argument'} !== null) ${'member_srl44_argument'}->setColumnType('number');
if(isset($args->month)) {
${'month45_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month45_argument'}->createConditionValue();
if(!${'month45_argument'}->isValid()) return ${'month45_argument'}->getErrorMessage();
} else
${'month45_argument'} = NULL;if(${'month45_argument'} !== null) ${'month45_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl44_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$month45_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>