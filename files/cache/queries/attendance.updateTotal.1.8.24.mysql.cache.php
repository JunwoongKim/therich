<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateTotal");
$query->setAction("update");
$query->setPriority("");

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate6_argument'}->checkNotNull();
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('varchar');
if(isset($args->total)) {
${'total7_argument'} = new Argument('total', $args->{'total'});
if(!${'total7_argument'}->isValid()) return ${'total7_argument'}->getErrorMessage();
} else
${'total7_argument'} = NULL;if(${'total7_argument'} !== null) ${'total7_argument'}->setColumnType('number');
if(isset($args->total_point)) {
${'total_point8_argument'} = new Argument('total_point', $args->{'total_point'});
if(!${'total_point8_argument'}->isValid()) return ${'total_point8_argument'}->getErrorMessage();
} else
${'total_point8_argument'} = NULL;if(${'total_point8_argument'} !== null) ${'total_point8_argument'}->setColumnType('number');
if(isset($args->continuity)) {
${'continuity9_argument'} = new Argument('continuity', $args->{'continuity'});
if(!${'continuity9_argument'}->isValid()) return ${'continuity9_argument'}->getErrorMessage();
} else
${'continuity9_argument'} = NULL;if(${'continuity9_argument'} !== null) ${'continuity9_argument'}->setColumnType('number');
if(isset($args->continuity_point)) {
${'continuity_point10_argument'} = new Argument('continuity_point', $args->{'continuity_point'});
if(!${'continuity_point10_argument'}->isValid()) return ${'continuity_point10_argument'}->getErrorMessage();
} else
${'continuity_point10_argument'} = NULL;if(${'continuity_point10_argument'} !== null) ${'continuity_point10_argument'}->setColumnType('number');

${'member_srl11_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl11_argument'}->checkNotNull();
${'member_srl11_argument'}->createConditionValue();
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate6_argument'})
,new UpdateExpression('`total`', ${'total7_argument'})
,new UpdateExpression('`total_point`', ${'total_point8_argument'})
,new UpdateExpression('`continuity`', ${'continuity9_argument'})
,new UpdateExpression('`continuity_point`', ${'continuity_point10_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl11_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>