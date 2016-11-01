<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getYearlyAttendance");
$query->setAction("select");
$query->setPriority("");
if(isset($args->year)) {
${'year12_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year12_argument'}->createConditionValue();
if(!${'year12_argument'}->isValid()) return ${'year12_argument'}->getErrorMessage();
} else
${'year12_argument'} = NULL;if(${'year12_argument'} !== null) ${'year12_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl13_argument'}->createConditionValue();
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`yearly`', '`yearly`')
,new SelectExpression('`yearly_point`', '`yearly_point`')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`regdate`',$year12_argument,"like_prefix", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl13_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>