<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleSkinDotList");
$query->setAction("select");
$query->setPriority("");

${'skin59_argument'} = new ConditionArgument('skin', $args->skin, 'like');
${'skin59_argument'}->ensureDefaultValue('.');
${'skin59_argument'}->createConditionValue();
if(!${'skin59_argument'}->isValid()) return ${'skin59_argument'}->getErrorMessage();
if(${'skin59_argument'} !== null) ${'skin59_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`module`')
,new SelectExpression('`skin`')
));
$query->setTables(array(
new Table('`xe_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`skin`',$skin59_argument,"like")))
));
$query->setGroups(array(
'`skin`' ));
$query->setOrder(array());
$query->setLimit();
return $query; ?>