<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl50_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl50_argument'}->checkFilter('number');
${'site_srl50_argument'}->ensureDefaultValue('0');
${'site_srl50_argument'}->checkNotNull();
${'site_srl50_argument'}->createConditionValue();
if(!${'site_srl50_argument'}->isValid()) return ${'site_srl50_argument'}->getErrorMessage();
if(${'site_srl50_argument'} !== null) ${'site_srl50_argument'}->setColumnType('number');

${'layout_type51_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type51_argument'}->ensureDefaultValue('P');
${'layout_type51_argument'}->createConditionValue();
if(!${'layout_type51_argument'}->isValid()) return ${'layout_type51_argument'}->getErrorMessage();
if(${'layout_type51_argument'} !== null) ${'layout_type51_argument'}->setColumnType('char');

${'layout52_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout52_argument'}->ensureDefaultValue('.');
${'layout52_argument'}->createConditionValue();
if(!${'layout52_argument'}->isValid()) return ${'layout52_argument'}->getErrorMessage();
if(${'layout52_argument'} !== null) ${'layout52_argument'}->setColumnType('varchar');

${'sort_index53_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index53_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index53_argument'}->isValid()) return ${'sort_index53_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl50_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type51_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout52_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index53_argument'}, "desc")
));
$query->setLimit();
return $query; ?>