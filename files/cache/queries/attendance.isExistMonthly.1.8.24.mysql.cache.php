<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistMonthly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl38_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl38_argument'}->createConditionValue();
if(!${'member_srl38_argument'}->isValid()) return ${'member_srl38_argument'}->getErrorMessage();
} else
${'member_srl38_argument'} = NULL;if(${'member_srl38_argument'} !== null) ${'member_srl38_argument'}->setColumnType('number');
if(isset($args->month)) {
${'month39_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month39_argument'}->createConditionValue();
if(!${'month39_argument'}->isValid()) return ${'month39_argument'}->getErrorMessage();
} else
${'month39_argument'} = NULL;if(${'month39_argument'} !== null) ${'month39_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl38_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$month39_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>