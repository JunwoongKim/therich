<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCountNotify");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_join_extend_notify`', '`join_extend_notify`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>