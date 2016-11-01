<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getWeeklyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->monday)) {
${'monday56_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday56_argument'}->createConditionValue();
if(!${'monday56_argument'}->isValid()) return ${'monday56_argument'}->getErrorMessage();
} else
${'monday56_argument'} = NULL;if(${'monday56_argument'} !== null) ${'monday56_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday57_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday57_argument'}->createConditionValue();
if(!${'sunday57_argument'}->isValid()) return ${'sunday57_argument'}->getErrorMessage();
} else
${'sunday57_argument'} = NULL;if(${'sunday57_argument'} !== null) ${'sunday57_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl58_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl58_argument'}->createConditionValue();
if(!${'member_srl58_argument'}->isValid()) return ${'member_srl58_argument'}->getErrorMessage();
} else
${'member_srl58_argument'} = NULL;if(${'member_srl58_argument'} !== null) ${'member_srl58_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`weekly_count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$monday56_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday57_argument,"less", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl58_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>