<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module4_argument'} = new Argument('module', $args->{'module'});
${'module4_argument'}->checkNotNull();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config5_argument'} = new Argument('config', $args->{'config'});
if(!${'config5_argument'}->isValid()) return ${'config5_argument'}->getErrorMessage();
} else
${'config5_argument'} = NULL;if(${'config5_argument'} !== null) ${'config5_argument'}->setColumnType('text');

${'site_srl6_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl6_argument'}->checkNotNull();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module4_argument'})
,new InsertExpression('`config`', ${'config5_argument'})
,new InsertExpression('`site_srl`', ${'site_srl6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>