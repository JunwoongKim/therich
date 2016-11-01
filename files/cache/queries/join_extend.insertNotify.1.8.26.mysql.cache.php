<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertNotify");
$query->setAction("insert");
$query->setPriority("");

${'mode32_argument'} = new Argument('mode', $args->{'mode'});
${'mode32_argument'}->checkNotNull();
if(!${'mode32_argument'}->isValid()) return ${'mode32_argument'}->getErrorMessage();
if(${'mode32_argument'} !== null) ${'mode32_argument'}->setColumnType('varchar');

${'member_info33_argument'} = new Argument('member_info', $args->{'member_info'});
${'member_info33_argument'}->checkNotNull();
if(!${'member_info33_argument'}->isValid()) return ${'member_info33_argument'}->getErrorMessage();
if(${'member_info33_argument'} !== null) ${'member_info33_argument'}->setColumnType('text');

${'regdate34_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate34_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate34_argument'}->isValid()) return ${'regdate34_argument'}->getErrorMessage();
if(${'regdate34_argument'} !== null) ${'regdate34_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`mode`', ${'mode32_argument'})
,new InsertExpression('`member_info`', ${'member_info33_argument'})
,new InsertExpression('`regdate`', ${'regdate34_argument'})
));
$query->setTables(array(
new Table('`xe_join_extend_notify`', '`join_extend_notify`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>