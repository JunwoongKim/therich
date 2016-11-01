<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutModules");
$query->setAction("select");
$query->setPriority("");

${'menu_srl2_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl2_argument'}->checkNotNull();
${'menu_srl2_argument'}->createConditionValue();
if(!${'menu_srl2_argument'}->isValid()) return ${'menu_srl2_argument'}->getErrorMessage();
if(${'menu_srl2_argument'} !== null) ${'menu_srl2_argument'}->setColumnType('number');

${'site_srl3_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl3_argument'}->ensureDefaultValue('0');
${'site_srl3_argument'}->createConditionValue();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`module_srl`')
));
$query->setTables(array(
new Table('`xe_menu_item`', '`menu_item`')
,new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item`.`menu_srl`',$menu_srl2_argument,"equal")
,new ConditionWithArgument('`modules`.`site_srl`',$site_srl3_argument,"equal", 'and')
,new ConditionWithoutArgument('`menu_item`.`url`','`modules`.`mid`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>