<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMonthly");
$query->setAction("update");
$query->setPriority("");

${'regdate48_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate48_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate48_argument'}->checkNotNull();
if(!${'regdate48_argument'}->isValid()) return ${'regdate48_argument'}->getErrorMessage();
if(${'regdate48_argument'} !== null) ${'regdate48_argument'}->setColumnType('varchar');
if(isset($args->monthly)) {
${'monthly49_argument'} = new Argument('monthly', $args->{'monthly'});
if(!${'monthly49_argument'}->isValid()) return ${'monthly49_argument'}->getErrorMessage();
} else
${'monthly49_argument'} = NULL;if(${'monthly49_argument'} !== null) ${'monthly49_argument'}->setColumnType('number');
if(isset($args->monthly_point)) {
${'monthly_point50_argument'} = new Argument('monthly_point', $args->{'monthly_point'});
if(!${'monthly_point50_argument'}->isValid()) return ${'monthly_point50_argument'}->getErrorMessage();
} else
${'monthly_point50_argument'} = NULL;if(${'monthly_point50_argument'} !== null) ${'monthly_point50_argument'}->setColumnType('number');

${'member_srl51_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl51_argument'}->ensureDefaultValue('admin');
${'member_srl51_argument'}->checkNotNull();
${'member_srl51_argument'}->createConditionValue();
if(!${'member_srl51_argument'}->isValid()) return ${'member_srl51_argument'}->getErrorMessage();
if(${'member_srl51_argument'} !== null) ${'member_srl51_argument'}->setColumnType('number');

${'month52_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month52_argument'}->checkNotNull();
${'month52_argument'}->createConditionValue();
if(!${'month52_argument'}->isValid()) return ${'month52_argument'}->getErrorMessage();
if(${'month52_argument'} !== null) ${'month52_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate48_argument'})
,new UpdateExpression('`monthly`', ${'monthly49_argument'})
,new UpdateExpression('`monthly_point`', ${'monthly_point50_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl51_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$month52_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>