<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("IsExistWeekly");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl44_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl44_argument'}->createConditionValue();
if(!${'member_srl44_argument'}->isValid()) return ${'member_srl44_argument'}->getErrorMessage();
} else
${'member_srl44_argument'} = NULL;if(${'member_srl44_argument'} !== null) ${'member_srl44_argument'}->setColumnType('number');
if(isset($args->monday)) {
${'monday45_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday45_argument'}->createConditionValue();
if(!${'monday45_argument'}->isValid()) return ${'monday45_argument'}->getErrorMessage();
} else
${'monday45_argument'} = NULL;if(${'monday45_argument'} !== null) ${'monday45_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday46_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday46_argument'}->createConditionValue();
if(!${'sunday46_argument'}->isValid()) return ${'sunday46_argument'}->getErrorMessage();
} else
${'sunday46_argument'} = NULL;if(${'sunday46_argument'} !== null) ${'sunday46_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl44_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$monday45_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday46_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>