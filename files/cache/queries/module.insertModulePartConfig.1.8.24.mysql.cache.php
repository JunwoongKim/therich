<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModulePartConfig");
$query->setAction("insert");
$query->setPriority("");

${'module4_argument'} = new Argument('module', $args->{'module'});
${'module4_argument'}->checkNotNull();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');

${'module_srl5_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl5_argument'}->checkNotNull();
if(!${'module_srl5_argument'}->isValid()) return ${'module_srl5_argument'}->getErrorMessage();
if(${'module_srl5_argument'} !== null) ${'module_srl5_argument'}->setColumnType('number');
if(isset($args->config)) {
${'config6_argument'} = new Argument('config', $args->{'config'});
if(!${'config6_argument'}->isValid()) return ${'config6_argument'}->getErrorMessage();
} else
${'config6_argument'} = NULL;if(${'config6_argument'} !== null) ${'config6_argument'}->setColumnType('text');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module4_argument'})
,new InsertExpression('`module_srl`', ${'module_srl5_argument'})
,new InsertExpression('`config`', ${'config6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>