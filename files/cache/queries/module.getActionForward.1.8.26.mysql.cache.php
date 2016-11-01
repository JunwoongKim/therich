<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act57_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act57_argument'}->createConditionValue();
if(!${'act57_argument'}->isValid()) return ${'act57_argument'}->getErrorMessage();
} else
${'act57_argument'} = NULL;if(${'act57_argument'} !== null) ${'act57_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act57_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>