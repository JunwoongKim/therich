<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMapbySrl");
$query->setAction("select");
$query->setPriority("");

${'maps_srl2_argument'} = new ConditionArgument('maps_srl', $args->maps_srl, 'equal');
${'maps_srl2_argument'}->checkFilter('number');
${'maps_srl2_argument'}->checkNotNull();
${'maps_srl2_argument'}->createConditionValue();
if(!${'maps_srl2_argument'}->isValid()) return ${'maps_srl2_argument'}->getErrorMessage();
if(${'maps_srl2_argument'} !== null) ${'maps_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`maps_srl`')
,new SelectExpression('`member_srl`')
,new SelectExpression('`maps_content`')
,new SelectExpression('`title`')
,new SelectExpression('`content`')
,new SelectExpression('`ipaddress`')
,new SelectExpression('`regdate`')
,new SelectExpression('`update`')
));
$query->setTables(array(
new Table('`xe_maps_contents`', '`maps_contents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`maps_srl`',$maps_srl2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>