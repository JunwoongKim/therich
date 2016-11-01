<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module10_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module10_argument'}->checkNotNull();
${'module10_argument'}->createConditionValue();
if(!${'module10_argument'}->isValid()) return ${'module10_argument'}->getErrorMessage();
if(${'module10_argument'} !== null) ${'module10_argument'}->setColumnType('varchar');

${'module_srl11_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl11_argument'}->checkNotNull();
${'module_srl11_argument'}->createConditionValue();
if(!${'module_srl11_argument'}->isValid()) return ${'module_srl11_argument'}->getErrorMessage();
if(${'module_srl11_argument'} !== null) ${'module_srl11_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module10_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>