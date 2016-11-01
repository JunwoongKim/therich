<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday47_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday47_argument'}->createConditionValue();
if(!${'monday47_argument'}->isValid()) return ${'monday47_argument'}->getErrorMessage();
} else
${'monday47_argument'} = NULL;if(${'monday47_argument'} !== null) ${'monday47_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday48_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday48_argument'}->createConditionValue();
if(!${'sunday48_argument'}->isValid()) return ${'sunday48_argument'}->getErrorMessage();
} else
${'sunday48_argument'} = NULL;if(${'sunday48_argument'} !== null) ${'sunday48_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl49_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl49_argument'}->createConditionValue();
if(!${'member_srl49_argument'}->isValid()) return ${'member_srl49_argument'}->getErrorMessage();
} else
${'member_srl49_argument'} = NULL;if(${'member_srl49_argument'} !== null) ${'member_srl49_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`weekly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday47_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday48_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl49_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>