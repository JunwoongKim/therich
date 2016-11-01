<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl2_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl2_argument'}->createConditionValue();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
} else
${'module_srl2_argument'} = NULL;if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');
if(isset($args->module_srls)) {
${'module_srls3_argument'} = new ConditionArgument('module_srls', $args->module_srls, 'in');
${'module_srls3_argument'}->createConditionValue();
if(!${'module_srls3_argument'}->isValid()) return ${'module_srls3_argument'}->getErrorMessage();
} else
${'module_srls3_argument'} = NULL;if(${'module_srls3_argument'} !== null) ${'module_srls3_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl4_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl4_argument'}->createConditionValue();
if(!${'site_srl4_argument'}->isValid()) return ${'site_srl4_argument'}->getErrorMessage();
} else
${'site_srl4_argument'} = NULL;if(${'site_srl4_argument'} !== null) ${'site_srl4_argument'}->setColumnType('number');
if(isset($args->module)) {
${'module5_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module5_argument'}->createConditionValue();
if(!${'module5_argument'}->isValid()) return ${'module5_argument'}->getErrorMessage();
} else
${'module5_argument'} = NULL;if(${'module5_argument'} !== null) ${'module5_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl6_argument'} = new ConditionArgument('module_category_srl', $args->module_category_srl, 'equal');
${'module_category_srl6_argument'}->createConditionValue();
if(!${'module_category_srl6_argument'}->isValid()) return ${'module_category_srl6_argument'}->getErrorMessage();
} else
${'module_category_srl6_argument'} = NULL;if(${'module_category_srl6_argument'} !== null) ${'module_category_srl6_argument'}->setColumnType('number');

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('browser_title');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srls3_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`module`',$module5_argument,"equal", 'and')
,new ConditionWithArgument('`module_category_srl`',$module_category_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "asc")
));
$query->setLimit();
return $query; ?>