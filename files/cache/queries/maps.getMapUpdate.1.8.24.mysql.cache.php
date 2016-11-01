<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMapUpdate");
$query->setAction("select");
$query->setPriority("");

${'maps_srl1_argument'} = new ConditionArgument('maps_srl', $args->maps_srl, 'equal');
${'maps_srl1_argument'}->checkFilter('number');
${'maps_srl1_argument'}->checkNotNull();
${'maps_srl1_argument'}->createConditionValue();
if(!${'maps_srl1_argument'}->isValid()) return ${'maps_srl1_argument'}->getErrorMessage();
if(${'maps_srl1_argument'} !== null) ${'maps_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`maps_srl`')
,new SelectExpression('`update`')
));
$query->setTables(array(
new Table('`xe_maps_contents`', '`maps_contents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`maps_srl`',$maps_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>