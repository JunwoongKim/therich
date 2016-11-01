<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistYearly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl35_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl35_argument'}->createConditionValue();
if(!${'member_srl35_argument'}->isValid()) return ${'member_srl35_argument'}->getErrorMessage();
} else
${'member_srl35_argument'} = NULL;if(${'member_srl35_argument'} !== null) ${'member_srl35_argument'}->setColumnType('number');
if(isset($args->year)) {
${'year36_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year36_argument'}->createConditionValue();
if(!${'year36_argument'}->isValid()) return ${'year36_argument'}->getErrorMessage();
} else
${'year36_argument'} = NULL;if(${'year36_argument'} !== null) ${'year36_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl35_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year36_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>