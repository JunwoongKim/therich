<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMonthly");
$query->setAction("update");
$query->setPriority("");

${'regdate21_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate21_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate21_argument'}->checkNotNull();
if(!${'regdate21_argument'}->isValid()) return ${'regdate21_argument'}->getErrorMessage();
if(${'regdate21_argument'} !== null) ${'regdate21_argument'}->setColumnType('varchar');
if(isset($args->monthly)) {
${'monthly22_argument'} = new Argument('monthly', $args->{'monthly'});
if(!${'monthly22_argument'}->isValid()) return ${'monthly22_argument'}->getErrorMessage();
} else
${'monthly22_argument'} = NULL;if(${'monthly22_argument'} !== null) ${'monthly22_argument'}->setColumnType('number');
if(isset($args->monthly_point)) {
${'monthly_point23_argument'} = new Argument('monthly_point', $args->{'monthly_point'});
if(!${'monthly_point23_argument'}->isValid()) return ${'monthly_point23_argument'}->getErrorMessage();
} else
${'monthly_point23_argument'} = NULL;if(${'monthly_point23_argument'} !== null) ${'monthly_point23_argument'}->setColumnType('number');

${'member_srl24_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl24_argument'}->ensureDefaultValue('admin');
${'member_srl24_argument'}->checkNotNull();
${'member_srl24_argument'}->createConditionValue();
if(!${'member_srl24_argument'}->isValid()) return ${'member_srl24_argument'}->getErrorMessage();
if(${'member_srl24_argument'} !== null) ${'member_srl24_argument'}->setColumnType('number');

${'month25_argument'} = new ConditionArgument('month', $args->month, 'like_prefix');
${'month25_argument'}->checkNotNull();
${'month25_argument'}->createConditionValue();
if(!${'month25_argument'}->isValid()) return ${'month25_argument'}->getErrorMessage();
if(${'month25_argument'} !== null) ${'month25_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate21_argument'})
,new UpdateExpression('`monthly`', ${'monthly22_argument'})
,new UpdateExpression('`monthly_point`', ${'monthly_point23_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl24_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$month25_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>