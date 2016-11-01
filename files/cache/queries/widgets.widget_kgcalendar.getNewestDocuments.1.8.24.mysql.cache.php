<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestDocuments");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'list_count4_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count4_argument'}->ensureDefaultValue('20');
if(!${'list_count4_argument'}->isValid()) return ${'list_count4_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

${'order_type3_argument'} = new SortArgument('order_type3', $args->order_type);
${'order_type3_argument'}->ensureDefaultValue('asc');
if(!${'order_type3_argument'}->isValid()) return ${'order_type3_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`module_srl`','0',"not_in", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$module_srl1_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, $order_type3_argument)
));
$query->setLimit(new Limit(${'list_count4_argument'}));
return $query; ?>