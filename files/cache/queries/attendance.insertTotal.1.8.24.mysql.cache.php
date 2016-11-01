<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTotal");
$query->setAction("insert");
$query->setPriority("");

${'regdate26_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate26_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate26_argument'}->checkNotNull();
if(!${'regdate26_argument'}->isValid()) return ${'regdate26_argument'}->getErrorMessage();
if(${'regdate26_argument'} !== null) ${'regdate26_argument'}->setColumnType('varchar');

${'member_srl27_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl27_argument'}->ensureDefaultValue('admin');
if(!${'member_srl27_argument'}->isValid()) return ${'member_srl27_argument'}->getErrorMessage();
if(${'member_srl27_argument'} !== null) ${'member_srl27_argument'}->setColumnType('number');

${'total28_argument'} = new Argument('total', $args->{'total'});
${'total28_argument'}->ensureDefaultValue('0');
if(!${'total28_argument'}->isValid()) return ${'total28_argument'}->getErrorMessage();
if(${'total28_argument'} !== null) ${'total28_argument'}->setColumnType('number');

${'total_point29_argument'} = new Argument('total_point', $args->{'total_point'});
${'total_point29_argument'}->ensureDefaultValue('0');
if(!${'total_point29_argument'}->isValid()) return ${'total_point29_argument'}->getErrorMessage();
if(${'total_point29_argument'} !== null) ${'total_point29_argument'}->setColumnType('number');

${'continuity30_argument'} = new Argument('continuity', $args->{'continuity'});
${'continuity30_argument'}->ensureDefaultValue('0');
if(!${'continuity30_argument'}->isValid()) return ${'continuity30_argument'}->getErrorMessage();
if(${'continuity30_argument'} !== null) ${'continuity30_argument'}->setColumnType('number');

${'continuity_point31_argument'} = new Argument('continuity_point', $args->{'continuity_point'});
${'continuity_point31_argument'}->ensureDefaultValue('0');
if(!${'continuity_point31_argument'}->isValid()) return ${'continuity_point31_argument'}->getErrorMessage();
if(${'continuity_point31_argument'} !== null) ${'continuity_point31_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate26_argument'})
,new InsertExpression('`member_srl`', ${'member_srl27_argument'})
,new InsertExpression('`total`', ${'total28_argument'})
,new InsertExpression('`total_point`', ${'total_point29_argument'})
,new InsertExpression('`continuity`', ${'continuity30_argument'})
,new InsertExpression('`continuity_point`', ${'continuity_point31_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>