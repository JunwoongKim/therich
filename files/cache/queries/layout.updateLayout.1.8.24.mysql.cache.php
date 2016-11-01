<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title12_argument'} = new Argument('title', $args->{'title'});
if(!${'title12_argument'}->isValid()) return ${'title12_argument'}->getErrorMessage();
} else
${'title12_argument'} = NULL;if(${'title12_argument'} !== null) ${'title12_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars13_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars13_argument'}->isValid()) return ${'extra_vars13_argument'}->getErrorMessage();
} else
${'extra_vars13_argument'} = NULL;if(${'extra_vars13_argument'} !== null) ${'extra_vars13_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout14_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout14_argument'}->isValid()) return ${'layout14_argument'}->getErrorMessage();
} else
${'layout14_argument'} = NULL;if(${'layout14_argument'} !== null) ${'layout14_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path15_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path15_argument'}->isValid()) return ${'layout_path15_argument'}->getErrorMessage();
} else
${'layout_path15_argument'} = NULL;if(${'layout_path15_argument'} !== null) ${'layout_path15_argument'}->setColumnType('varchar');

${'layout_srl16_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl16_argument'}->checkFilter('number');
${'layout_srl16_argument'}->checkNotNull();
${'layout_srl16_argument'}->createConditionValue();
if(!${'layout_srl16_argument'}->isValid()) return ${'layout_srl16_argument'}->getErrorMessage();
if(${'layout_srl16_argument'} !== null) ${'layout_srl16_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title12_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars13_argument'})
,new UpdateExpression('`layout`', ${'layout14_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path15_argument'})
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl16_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>