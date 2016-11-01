<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTotal");
$query->setAction("update");
$query->setPriority("");

${'regdate29_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate29_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate29_argument'}->checkNotNull();
if(!${'regdate29_argument'}->isValid()) return ${'regdate29_argument'}->getErrorMessage();
if(${'regdate29_argument'} !== null) ${'regdate29_argument'}->setColumnType('varchar');
if(isset($args->total)) {
${'total30_argument'} = new Argument('total', $args->{'total'});
if(!${'total30_argument'}->isValid()) return ${'total30_argument'}->getErrorMessage();
} else
${'total30_argument'} = NULL;if(${'total30_argument'} !== null) ${'total30_argument'}->setColumnType('number');
if(isset($args->total_point)) {
${'total_point31_argument'} = new Argument('total_point', $args->{'total_point'});
if(!${'total_point31_argument'}->isValid()) return ${'total_point31_argument'}->getErrorMessage();
} else
${'total_point31_argument'} = NULL;if(${'total_point31_argument'} !== null) ${'total_point31_argument'}->setColumnType('number');
if(isset($args->continuity)) {
${'continuity32_argument'} = new Argument('continuity', $args->{'continuity'});
if(!${'continuity32_argument'}->isValid()) return ${'continuity32_argument'}->getErrorMessage();
} else
${'continuity32_argument'} = NULL;if(${'continuity32_argument'} !== null) ${'continuity32_argument'}->setColumnType('number');
if(isset($args->continuity_point)) {
${'continuity_point33_argument'} = new Argument('continuity_point', $args->{'continuity_point'});
if(!${'continuity_point33_argument'}->isValid()) return ${'continuity_point33_argument'}->getErrorMessage();
} else
${'continuity_point33_argument'} = NULL;if(${'continuity_point33_argument'} !== null) ${'continuity_point33_argument'}->setColumnType('number');

${'member_srl34_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl34_argument'}->checkNotNull();
${'member_srl34_argument'}->createConditionValue();
if(!${'member_srl34_argument'}->isValid()) return ${'member_srl34_argument'}->getErrorMessage();
if(${'member_srl34_argument'} !== null) ${'member_srl34_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate29_argument'})
,new UpdateExpression('`total`', ${'total30_argument'})
,new UpdateExpression('`total_point`', ${'total_point31_argument'})
,new UpdateExpression('`continuity`', ${'continuity32_argument'})
,new UpdateExpression('`continuity_point`', ${'continuity_point33_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl34_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>