<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMapsAdminList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->maps_srl)) {
${'maps_srl1_argument'} = new ConditionArgument('maps_srl', $args->maps_srl, 'in');
${'maps_srl1_argument'}->checkFilter('number');
${'maps_srl1_argument'}->createConditionValue();
if(!${'maps_srl1_argument'}->isValid()) return ${'maps_srl1_argument'}->getErrorMessage();
} else
${'maps_srl1_argument'} = NULL;if(${'maps_srl1_argument'} !== null) ${'maps_srl1_argument'}->setColumnType('number');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('20');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('maps_srl');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

${'order_type3_argument'} = new SortArgument('order_type3', $args->order_type);
${'order_type3_argument'}->ensureDefaultValue('asc');
if(!${'order_type3_argument'}->isValid()) return ${'order_type3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`maps_srl`')
,new SelectExpression('`title`')
,new SelectExpression('`content`')
,new SelectExpression('`regdate`')
,new SelectExpression('`update`')
));
$query->setTables(array(
new Table('`xe_maps_contents`', '`maps_contents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`maps_srl`',$maps_srl1_argument,"in")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, $order_type3_argument)
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>