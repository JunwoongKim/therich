<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistYearly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl32_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl32_argument'}->createConditionValue();
if(!${'member_srl32_argument'}->isValid()) return ${'member_srl32_argument'}->getErrorMessage();
} else
${'member_srl32_argument'} = NULL;if(${'member_srl32_argument'} !== null) ${'member_srl32_argument'}->setColumnType('number');
if(isset($args->year)) {
${'year33_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year33_argument'}->createConditionValue();
if(!${'year33_argument'}->isValid()) return ${'year33_argument'}->getErrorMessage();
} else
${'year33_argument'} = NULL;if(${'year33_argument'} !== null) ${'year33_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl32_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year33_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>