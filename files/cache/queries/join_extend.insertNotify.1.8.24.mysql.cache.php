<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertNotify");
$query->setAction("insert");
$query->setPriority("");

${'mode3_argument'} = new Argument('mode', $args->{'mode'});
${'mode3_argument'}->checkNotNull();
if(!${'mode3_argument'}->isValid()) return ${'mode3_argument'}->getErrorMessage();
if(${'mode3_argument'} !== null) ${'mode3_argument'}->setColumnType('varchar');

${'member_info4_argument'} = new Argument('member_info', $args->{'member_info'});
${'member_info4_argument'}->checkNotNull();
if(!${'member_info4_argument'}->isValid()) return ${'member_info4_argument'}->getErrorMessage();
if(${'member_info4_argument'} !== null) ${'member_info4_argument'}->setColumnType('text');

${'regdate5_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate5_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`mode`', ${'mode3_argument'})
,new InsertExpression('`member_info`', ${'member_info4_argument'})
,new InsertExpression('`regdate`', ${'regdate5_argument'})
));
$query->setTables(array(
new Table('`xe_join_extend_notify`', '`join_extend_notify`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>