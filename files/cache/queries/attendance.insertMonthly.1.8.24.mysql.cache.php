<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMonthly");
$query->setAction("insert");
$query->setPriority("");

${'regdate40_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate40_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate40_argument'}->checkNotNull();
if(!${'regdate40_argument'}->isValid()) return ${'regdate40_argument'}->getErrorMessage();
if(${'regdate40_argument'} !== null) ${'regdate40_argument'}->setColumnType('varchar');

${'member_srl41_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl41_argument'}->ensureDefaultValue('admin');
if(!${'member_srl41_argument'}->isValid()) return ${'member_srl41_argument'}->getErrorMessage();
if(${'member_srl41_argument'} !== null) ${'member_srl41_argument'}->setColumnType('number');
if(isset($args->monthly)) {
${'monthly42_argument'} = new Argument('monthly', $args->{'monthly'});
if(!${'monthly42_argument'}->isValid()) return ${'monthly42_argument'}->getErrorMessage();
} else
${'monthly42_argument'} = NULL;if(${'monthly42_argument'} !== null) ${'monthly42_argument'}->setColumnType('number');
if(isset($args->monthly_point)) {
${'monthly_point43_argument'} = new Argument('monthly_point', $args->{'monthly_point'});
if(!${'monthly_point43_argument'}->isValid()) return ${'monthly_point43_argument'}->getErrorMessage();
} else
${'monthly_point43_argument'} = NULL;if(${'monthly_point43_argument'} !== null) ${'monthly_point43_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate40_argument'})
,new InsertExpression('`member_srl`', ${'member_srl41_argument'})
,new InsertExpression('`monthly`', ${'monthly42_argument'})
,new InsertExpression('`monthly_point`', ${'monthly_point43_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_monthly`', '`attendance_monthly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>