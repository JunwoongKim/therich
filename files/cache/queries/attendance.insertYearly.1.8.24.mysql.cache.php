<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertYearly");
$query->setAction("insert");
$query->setPriority("");

${'regdate34_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate34_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate34_argument'}->checkNotNull();
if(!${'regdate34_argument'}->isValid()) return ${'regdate34_argument'}->getErrorMessage();
if(${'regdate34_argument'} !== null) ${'regdate34_argument'}->setColumnType('varchar');

${'member_srl35_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl35_argument'}->ensureDefaultValue('admin');
if(!${'member_srl35_argument'}->isValid()) return ${'member_srl35_argument'}->getErrorMessage();
if(${'member_srl35_argument'} !== null) ${'member_srl35_argument'}->setColumnType('number');
if(isset($args->yearly)) {
${'yearly36_argument'} = new Argument('yearly', $args->{'yearly'});
if(!${'yearly36_argument'}->isValid()) return ${'yearly36_argument'}->getErrorMessage();
} else
${'yearly36_argument'} = NULL;if(${'yearly36_argument'} !== null) ${'yearly36_argument'}->setColumnType('number');
if(isset($args->yearly_point)) {
${'yearly_point37_argument'} = new Argument('yearly_point', $args->{'yearly_point'});
if(!${'yearly_point37_argument'}->isValid()) return ${'yearly_point37_argument'}->getErrorMessage();
} else
${'yearly_point37_argument'} = NULL;if(${'yearly_point37_argument'} !== null) ${'yearly_point37_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate34_argument'})
,new InsertExpression('`member_srl`', ${'member_srl35_argument'})
,new InsertExpression('`yearly`', ${'yearly36_argument'})
,new InsertExpression('`yearly_point`', ${'yearly_point37_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>