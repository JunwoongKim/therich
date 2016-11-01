<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGreetingsData");
$query->setAction("select");
$query->setPriority("");
if(isset($args->greetings)) {
${'greetings1_argument'} = new ConditionArgument('greetings', $args->greetings, 'equal');
${'greetings1_argument'}->createConditionValue();
if(!${'greetings1_argument'}->isValid()) return ${'greetings1_argument'}->getErrorMessage();
} else
${'greetings1_argument'} = NULL;if(${'greetings1_argument'} !== null) ${'greetings1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`attendance_srl`', '`attendance_srl`')
,new SelectExpression('`regdate`', '`regdate`')
,new SelectExpression('`member_srl`', '`member_srl`')
,new SelectExpression('`today_point`', '`today_point`')
,new SelectExpression('`today_random`', '`today_random`')
,new SelectExpression('`ipaddress`', '`ipaddress`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`greetings`',$greetings1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>