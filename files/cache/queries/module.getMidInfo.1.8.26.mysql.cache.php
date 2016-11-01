<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid50_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid50_argument'}->createConditionValue();
if(!${'mid50_argument'}->isValid()) return ${'mid50_argument'}->getErrorMessage();
} else
${'mid50_argument'} = NULL;if(${'mid50_argument'} !== null) ${'mid50_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl51_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl51_argument'}->createConditionValue();
if(!${'module_srl51_argument'}->isValid()) return ${'module_srl51_argument'}->getErrorMessage();
} else
${'module_srl51_argument'} = NULL;if(${'module_srl51_argument'} !== null) ${'module_srl51_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl52_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl52_argument'}->createConditionValue();
if(!${'site_srl52_argument'}->isValid()) return ${'site_srl52_argument'}->getErrorMessage();
} else
${'site_srl52_argument'} = NULL;if(${'site_srl52_argument'} !== null) ${'site_srl52_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid50_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl51_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl52_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>