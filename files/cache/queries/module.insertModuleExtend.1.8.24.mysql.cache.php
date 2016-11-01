<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtend");
$query->setAction("insert");
$query->setPriority("");

${'parent_module8_argument'} = new Argument('parent_module', $args->{'parent_module'});
${'parent_module8_argument'}->checkNotNull();
if(!${'parent_module8_argument'}->isValid()) return ${'parent_module8_argument'}->getErrorMessage();
if(${'parent_module8_argument'} !== null) ${'parent_module8_argument'}->setColumnType('varchar');

${'extend_module9_argument'} = new Argument('extend_module', $args->{'extend_module'});
${'extend_module9_argument'}->checkNotNull();
if(!${'extend_module9_argument'}->isValid()) return ${'extend_module9_argument'}->getErrorMessage();
if(${'extend_module9_argument'} !== null) ${'extend_module9_argument'}->setColumnType('varchar');

${'type10_argument'} = new Argument('type', $args->{'type'});
${'type10_argument'}->checkNotNull();
if(!${'type10_argument'}->isValid()) return ${'type10_argument'}->getErrorMessage();
if(${'type10_argument'} !== null) ${'type10_argument'}->setColumnType('varchar');
if(isset($args->kind)) {
${'kind11_argument'} = new Argument('kind', $args->{'kind'});
if(!${'kind11_argument'}->isValid()) return ${'kind11_argument'}->getErrorMessage();
} else
${'kind11_argument'} = NULL;if(${'kind11_argument'} !== null) ${'kind11_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`parent_module`', ${'parent_module8_argument'})
,new InsertExpression('`extend_module`', ${'extend_module9_argument'})
,new InsertExpression('`type`', ${'type10_argument'})
,new InsertExpression('`kind`', ${'kind11_argument'})
));
$query->setTables(array(
new Table('`xe_module_extend`', '`module_extend`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>