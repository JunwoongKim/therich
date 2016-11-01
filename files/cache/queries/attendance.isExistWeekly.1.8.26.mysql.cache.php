<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistWeekly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl53_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl53_argument'}->createConditionValue();
if(!${'member_srl53_argument'}->isValid()) return ${'member_srl53_argument'}->getErrorMessage();
} else
${'member_srl53_argument'} = NULL;if(${'member_srl53_argument'} !== null) ${'member_srl53_argument'}->setColumnType('number');
if(isset($args->monday)) {
${'monday54_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday54_argument'}->createConditionValue();
if(!${'monday54_argument'}->isValid()) return ${'monday54_argument'}->getErrorMessage();
} else
${'monday54_argument'} = NULL;if(${'monday54_argument'} !== null) ${'monday54_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday55_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday55_argument'}->createConditionValue();
if(!${'sunday55_argument'}->isValid()) return ${'sunday55_argument'}->getErrorMessage();
} else
${'sunday55_argument'} = NULL;if(${'sunday55_argument'} !== null) ${'sunday55_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl53_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$monday54_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday55_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>