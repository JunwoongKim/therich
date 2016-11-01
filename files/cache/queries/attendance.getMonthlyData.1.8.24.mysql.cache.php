<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMonthlyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monthly)) {
${'monthly4_argument'} = new ConditionArgument('monthly', $args->monthly, 'like_prefix');
${'monthly4_argument'}->createConditionValue();
if(!${'monthly4_argument'}->isValid()) return ${'monthly4_argument'}->getErrorMessage();
} else
${'monthly4_argument'} = NULL;if(${'monthly4_argument'} !== null) ${'monthly4_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`monthly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monthly4_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>