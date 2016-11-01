<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name4_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name4_argument'}->checkNotNull();
if(!${'component_name4_argument'}->isValid()) return ${'component_name4_argument'}->getErrorMessage();
if(${'component_name4_argument'} !== null) ${'component_name4_argument'}->setColumnType('varchar');

${'enabled5_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled5_argument'}->ensureDefaultValue('N');
if(!${'enabled5_argument'}->isValid()) return ${'enabled5_argument'}->getErrorMessage();
if(${'enabled5_argument'} !== null) ${'enabled5_argument'}->setColumnType('char');

${'list_order6_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order6_argument'}->ensureDefaultValue($sequence);
if(!${'list_order6_argument'}->isValid()) return ${'list_order6_argument'}->getErrorMessage();
if(${'list_order6_argument'} !== null) ${'list_order6_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name4_argument'})
,new InsertExpression('`enabled`', ${'enabled5_argument'})
,new InsertExpression('`list_order`', ${'list_order6_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>