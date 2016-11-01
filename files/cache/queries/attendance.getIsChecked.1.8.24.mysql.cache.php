<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getIsChecked");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');
if(isset($args->day)) {
${'day4_argument'} = new ConditionArgument('day', $args->day, 'like_prefix');
${'day4_argument'}->createConditionValue();
if(!${'day4_argument'}->isValid()) return ${'day4_argument'}->getErrorMessage();
} else
${'day4_argument'} = NULL;if(${'day4_argument'} !== null) ${'day4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$day4_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>