<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("migrationGetSrlTotal");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`member_srl`', '`member_srl`')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>