<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getYearlyData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->yearly)) {
${'yearly8_argument'} = new ConditionArgument('yearly', $args->yearly, 'like_prefix');
${'yearly8_argument'}->createConditionValue();
if(!${'yearly8_argument'}->isValid()) return ${'yearly8_argument'}->getErrorMessage();
} else
${'yearly8_argument'} = NULL;if(${'yearly8_argument'} !== null) ${'yearly8_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
} else
${'member_srl9_argument'} = NULL;if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`yearly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$yearly8_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>