<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act1_argument'} = new Argument('act', $args->{'act'});
${'act1_argument'}->checkNotNull();
if(!${'act1_argument'}->isValid()) return ${'act1_argument'}->getErrorMessage();
if(${'act1_argument'} !== null) ${'act1_argument'}->setColumnType('varchar');

${'module2_argument'} = new Argument('module', $args->{'module'});
${'module2_argument'}->checkNotNull();
if(!${'module2_argument'}->isValid()) return ${'module2_argument'}->getErrorMessage();
if(${'module2_argument'} !== null) ${'module2_argument'}->setColumnType('varchar');

${'type3_argument'} = new Argument('type', $args->{'type'});
${'type3_argument'}->checkNotNull();
if(!${'type3_argument'}->isValid()) return ${'type3_argument'}->getErrorMessage();
if(${'type3_argument'} !== null) ${'type3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act1_argument'})
,new InsertExpression('`module`', ${'module2_argument'})
,new InsertExpression('`type`', ${'type3_argument'})
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>