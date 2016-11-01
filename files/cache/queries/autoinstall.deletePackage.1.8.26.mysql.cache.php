<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deletePackage");
$query->setAction("delete");
$query->setPriority("");

${'path24_argument'} = new ConditionArgument('path', $args->path, 'equal');
${'path24_argument'}->checkNotNull();
${'path24_argument'}->createConditionValue();
if(!${'path24_argument'}->isValid()) return ${'path24_argument'}->getErrorMessage();
if(${'path24_argument'} !== null) ${'path24_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`path`',$path24_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>