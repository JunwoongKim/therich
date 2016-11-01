<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModuleLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->layout_srl)) {
${'layout_srl4_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl4_argument'}->isValid()) return ${'layout_srl4_argument'}->getErrorMessage();
} else
${'layout_srl4_argument'} = NULL;if(${'layout_srl4_argument'} !== null) ${'layout_srl4_argument'}->setColumnType('number');

${'module_srls5_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls5_argument'}->checkNotNull();
${'module_srls5_argument'}->createConditionValue();
if(!${'module_srls5_argument'}->isValid()) return ${'module_srls5_argument'}->getErrorMessage();
if(${'module_srls5_argument'} !== null) ${'module_srls5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`layout_srl`', ${'layout_srl4_argument'})
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srls5_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>