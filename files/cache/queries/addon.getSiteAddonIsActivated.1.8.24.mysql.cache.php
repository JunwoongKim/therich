<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl56_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl56_argument'}->checkNotNull();
${'site_srl56_argument'}->createConditionValue();
if(!${'site_srl56_argument'}->isValid()) return ${'site_srl56_argument'}->getErrorMessage();
if(${'site_srl56_argument'} !== null) ${'site_srl56_argument'}->setColumnType('number');

${'addon57_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon57_argument'}->checkNotNull();
${'addon57_argument'}->createConditionValue();
if(!${'addon57_argument'}->isValid()) return ${'addon57_argument'}->getErrorMessage();
if(${'addon57_argument'} !== null) ${'addon57_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl56_argument,"equal")
,new ConditionWithArgument('`addon`',$addon57_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>