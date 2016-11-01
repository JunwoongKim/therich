<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl60_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl60_argument'}->checkNotNull();
${'site_srl60_argument'}->createConditionValue();
if(!${'site_srl60_argument'}->isValid()) return ${'site_srl60_argument'}->getErrorMessage();
if(${'site_srl60_argument'} !== null) ${'site_srl60_argument'}->setColumnType('number');

${'addon61_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon61_argument'}->checkNotNull();
${'addon61_argument'}->createConditionValue();
if(!${'addon61_argument'}->isValid()) return ${'addon61_argument'}->getErrorMessage();
if(${'addon61_argument'} !== null) ${'addon61_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl60_argument,"equal")
,new ConditionWithArgument('`addon`',$addon61_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>