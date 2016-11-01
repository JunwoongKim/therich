<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl53_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl53_argument'}->checkFilter('number');
${'site_srl53_argument'}->ensureDefaultValue('0');
${'site_srl53_argument'}->checkNotNull();
${'site_srl53_argument'}->createConditionValue();
if(!${'site_srl53_argument'}->isValid()) return ${'site_srl53_argument'}->getErrorMessage();
if(${'site_srl53_argument'} !== null) ${'site_srl53_argument'}->setColumnType('number');

${'layout_type54_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type54_argument'}->ensureDefaultValue('P');
${'layout_type54_argument'}->createConditionValue();
if(!${'layout_type54_argument'}->isValid()) return ${'layout_type54_argument'}->getErrorMessage();
if(${'layout_type54_argument'} !== null) ${'layout_type54_argument'}->setColumnType('char');

${'layout55_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout55_argument'}->ensureDefaultValue('.');
${'layout55_argument'}->createConditionValue();
if(!${'layout55_argument'}->isValid()) return ${'layout55_argument'}->getErrorMessage();
if(${'layout55_argument'} !== null) ${'layout55_argument'}->setColumnType('varchar');

${'sort_index56_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index56_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index56_argument'}->isValid()) return ${'sort_index56_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl53_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type54_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout55_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index56_argument'}, "desc")
));
$query->setLimit();
return $query; ?>