<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module2_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module2_argument'}->checkNotNull();
${'module2_argument'}->createConditionValue();
if(!${'module2_argument'}->isValid()) return ${'module2_argument'}->getErrorMessage();
if(${'module2_argument'} !== null) ${'module2_argument'}->setColumnType('varchar');

${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->checkNotNull();
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`xe_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module2_argument,"equal")
,new ConditionWithArgument('`site_srl`',$site_srl3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>