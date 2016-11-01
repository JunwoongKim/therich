<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateComponent");
$query->setAction("update");
$query->setPriority("");
if(isset($args->enabled)) {
${'enabled1_argument'} = new Argument('enabled', $args->{'enabled'});
if(!${'enabled1_argument'}->isValid()) return ${'enabled1_argument'}->getErrorMessage();
} else
${'enabled1_argument'} = NULL;if(${'enabled1_argument'} !== null) ${'enabled1_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars2_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars2_argument'}->isValid()) return ${'extra_vars2_argument'}->getErrorMessage();
} else
${'extra_vars2_argument'} = NULL;if(${'extra_vars2_argument'} !== null) ${'extra_vars2_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order3_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order3_argument'}->isValid()) return ${'list_order3_argument'}->getErrorMessage();
} else
${'list_order3_argument'} = NULL;if(${'list_order3_argument'} !== null) ${'list_order3_argument'}->setColumnType('number');

${'component_name4_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name4_argument'}->checkNotNull();
${'component_name4_argument'}->createConditionValue();
if(!${'component_name4_argument'}->isValid()) return ${'component_name4_argument'}->getErrorMessage();
if(${'component_name4_argument'} !== null) ${'component_name4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`enabled`', ${'enabled1_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars2_argument'})
,new UpdateExpression('`list_order`', ${'list_order3_argument'})
));
$query->setTables(array(
new Table('`xe_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name4_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>