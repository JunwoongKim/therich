<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("migrationGetIdAttendanceYearly");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`user_id`')
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>