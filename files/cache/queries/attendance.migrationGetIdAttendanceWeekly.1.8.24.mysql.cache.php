<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("migrationGetIdAttendanceWeekly");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`user_id`')
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>