<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertInstalledPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl26_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl26_argument'}->checkFilter('number');
${'package_srl26_argument'}->checkNotNull();
if(!${'package_srl26_argument'}->isValid()) return ${'package_srl26_argument'}->getErrorMessage();
if(${'package_srl26_argument'} !== null) ${'package_srl26_argument'}->setColumnType('number');

${'version27_argument'} = new Argument('version', $args->{'version'});
${'version27_argument'}->checkNotNull();
if(!${'version27_argument'}->isValid()) return ${'version27_argument'}->getErrorMessage();
if(${'version27_argument'} !== null) ${'version27_argument'}->setColumnType('varchar');

${'current_version28_argument'} = new Argument('current_version', $args->{'current_version'});
${'current_version28_argument'}->checkNotNull();
if(!${'current_version28_argument'}->isValid()) return ${'current_version28_argument'}->getErrorMessage();
if(${'current_version28_argument'} !== null) ${'current_version28_argument'}->setColumnType('varchar');
if(isset($args->need_update)) {
${'need_update29_argument'} = new Argument('need_update', $args->{'need_update'});
if(!${'need_update29_argument'}->isValid()) return ${'need_update29_argument'}->getErrorMessage();
} else
${'need_update29_argument'} = NULL;if(${'need_update29_argument'} !== null) ${'need_update29_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl26_argument'})
,new InsertExpression('`version`', ${'version27_argument'})
,new InsertExpression('`current_version`', ${'current_version28_argument'})
,new InsertExpression('`need_update`', ${'need_update29_argument'})
));
$query->setTables(array(
new Table('`xe_ai_installed_packages`', '`ai_installed_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>