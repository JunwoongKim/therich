<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin55_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin55_argument'}->ensureDefaultValue('.');
${'skin55_argument'}->createConditionValue();
if(!${'skin55_argument'}->isValid()) return ${'skin55_argument'}->getErrorMessage();
if(${'skin55_argument'} !== null) ${'skin55_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin55_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>