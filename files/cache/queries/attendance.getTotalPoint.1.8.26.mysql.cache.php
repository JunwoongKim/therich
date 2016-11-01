<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalPoint");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl28_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl28_argument'}->createConditionValue();
if(!${'member_srl28_argument'}->isValid()) return ${'member_srl28_argument'}->getErrorMessage();
} else
${'member_srl28_argument'} = NULL;if(${'member_srl28_argument'} !== null) ${'member_srl28_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`total_point`', '`total_point`')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl28_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>