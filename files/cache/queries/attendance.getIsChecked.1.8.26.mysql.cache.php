<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getIsChecked");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl5_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl5_argument'}->createConditionValue();
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
} else
${'member_srl5_argument'} = NULL;if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');
if(isset($args->day)) {
${'day6_argument'} = new ConditionArgument('day', $args->day, 'like_prefix');
${'day6_argument'}->createConditionValue();
if(!${'day6_argument'}->isValid()) return ${'day6_argument'}->getErrorMessage();
} else
${'day6_argument'} = NULL;if(${'day6_argument'} !== null) ${'day6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl5_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$day6_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>