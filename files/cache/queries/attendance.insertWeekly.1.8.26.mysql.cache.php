<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertWeekly");
$query->setAction("insert");
$query->setPriority("");

${'regdate59_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate59_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate59_argument'}->checkNotNull();
if(!${'regdate59_argument'}->isValid()) return ${'regdate59_argument'}->getErrorMessage();
if(${'regdate59_argument'} !== null) ${'regdate59_argument'}->setColumnType('varchar');

${'member_srl60_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl60_argument'}->ensureDefaultValue('admin');
if(!${'member_srl60_argument'}->isValid()) return ${'member_srl60_argument'}->getErrorMessage();
if(${'member_srl60_argument'} !== null) ${'member_srl60_argument'}->setColumnType('number');
if(isset($args->weekly)) {
${'weekly61_argument'} = new Argument('weekly', $args->{'weekly'});
if(!${'weekly61_argument'}->isValid()) return ${'weekly61_argument'}->getErrorMessage();
} else
${'weekly61_argument'} = NULL;if(${'weekly61_argument'} !== null) ${'weekly61_argument'}->setColumnType('number');
if(isset($args->weekly_point)) {
${'weekly_point62_argument'} = new Argument('weekly_point', $args->{'weekly_point'});
if(!${'weekly_point62_argument'}->isValid()) return ${'weekly_point62_argument'}->getErrorMessage();
} else
${'weekly_point62_argument'} = NULL;if(${'weekly_point62_argument'} !== null) ${'weekly_point62_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate59_argument'})
,new InsertExpression('`member_srl`', ${'member_srl60_argument'})
,new InsertExpression('`weekly`', ${'weekly61_argument'})
,new InsertExpression('`weekly_point`', ${'weekly_point62_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>