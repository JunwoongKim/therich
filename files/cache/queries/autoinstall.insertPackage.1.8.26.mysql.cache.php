<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPackage");
$query->setAction("insert");
$query->setPriority("");

${'package_srl17_argument'} = new Argument('package_srl', $args->{'package_srl'});
${'package_srl17_argument'}->checkFilter('number');
${'package_srl17_argument'}->checkNotNull();
if(!${'package_srl17_argument'}->isValid()) return ${'package_srl17_argument'}->getErrorMessage();
if(${'package_srl17_argument'} !== null) ${'package_srl17_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl18_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl18_argument'}->checkFilter('number');
if(!${'category_srl18_argument'}->isValid()) return ${'category_srl18_argument'}->getErrorMessage();
} else
${'category_srl18_argument'} = NULL;if(${'category_srl18_argument'} !== null) ${'category_srl18_argument'}->setColumnType('number');

${'path19_argument'} = new Argument('path', $args->{'path'});
${'path19_argument'}->checkNotNull();
if(!${'path19_argument'}->isValid()) return ${'path19_argument'}->getErrorMessage();
if(${'path19_argument'} !== null) ${'path19_argument'}->setColumnType('varchar');

${'have_instance20_argument'} = new Argument('have_instance', $args->{'have_instance'});
${'have_instance20_argument'}->checkNotNull();
if(!${'have_instance20_argument'}->isValid()) return ${'have_instance20_argument'}->getErrorMessage();
if(${'have_instance20_argument'} !== null) ${'have_instance20_argument'}->setColumnType('char');

${'updatedate21_argument'} = new Argument('updatedate', $args->{'updatedate'});
${'updatedate21_argument'}->checkNotNull();
if(!${'updatedate21_argument'}->isValid()) return ${'updatedate21_argument'}->getErrorMessage();
if(${'updatedate21_argument'} !== null) ${'updatedate21_argument'}->setColumnType('date');

${'latest_item_srl22_argument'} = new Argument('latest_item_srl', $args->{'latest_item_srl'});
${'latest_item_srl22_argument'}->checkNotNull();
if(!${'latest_item_srl22_argument'}->isValid()) return ${'latest_item_srl22_argument'}->getErrorMessage();
if(${'latest_item_srl22_argument'} !== null) ${'latest_item_srl22_argument'}->setColumnType('number');

${'version23_argument'} = new Argument('version', $args->{'version'});
${'version23_argument'}->checkNotNull();
if(!${'version23_argument'}->isValid()) return ${'version23_argument'}->getErrorMessage();
if(${'version23_argument'} !== null) ${'version23_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`package_srl`', ${'package_srl17_argument'})
,new InsertExpression('`category_srl`', ${'category_srl18_argument'})
,new InsertExpression('`path`', ${'path19_argument'})
,new InsertExpression('`have_instance`', ${'have_instance20_argument'})
,new InsertExpression('`updatedate`', ${'updatedate21_argument'})
,new InsertExpression('`latest_item_srl`', ${'latest_item_srl22_argument'})
,new InsertExpression('`version`', ${'version23_argument'})
));
$query->setTables(array(
new Table('`xe_autoinstall_packages`', '`autoinstall_packages`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>