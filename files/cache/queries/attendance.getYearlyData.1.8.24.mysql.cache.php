<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getYearlyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->yearly)) {
${'yearly6_argument'} = new ConditionArgument('yearly', $args->yearly, 'like_prefix');
${'yearly6_argument'}->createConditionValue();
if(!${'yearly6_argument'}->isValid()) return ${'yearly6_argument'}->getErrorMessage();
} else
${'yearly6_argument'} = NULL;if(${'yearly6_argument'} !== null) ${'yearly6_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = NULL;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`yearly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$yearly6_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl7_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>