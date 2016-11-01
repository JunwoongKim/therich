<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAttendance");
$query->setAction("insert");
$query->setPriority("");

${'attendance_srl13_argument'} = new Argument('attendance_srl', $args->{'attendance_srl'});
${'attendance_srl13_argument'}->checkNotNull();
if(!${'attendance_srl13_argument'}->isValid()) return ${'attendance_srl13_argument'}->getErrorMessage();
if(${'attendance_srl13_argument'} !== null) ${'attendance_srl13_argument'}->setColumnType('number');

${'regdate14_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate14_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate14_argument'}->checkNotNull();
if(!${'regdate14_argument'}->isValid()) return ${'regdate14_argument'}->getErrorMessage();
if(${'regdate14_argument'} !== null) ${'regdate14_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl15_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl15_argument'}->isValid()) return ${'member_srl15_argument'}->getErrorMessage();
} else
${'member_srl15_argument'} = NULL;if(${'member_srl15_argument'} !== null) ${'member_srl15_argument'}->setColumnType('number');

${'ipaddress16_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress16_argument'}->ensureDefaultValue('none');
if(!${'ipaddress16_argument'}->isValid()) return ${'ipaddress16_argument'}->getErrorMessage();
if(${'ipaddress16_argument'} !== null) ${'ipaddress16_argument'}->setColumnType('varchar');

${'greetings17_argument'} = new Argument('greetings', $args->{'greetings'});
${'greetings17_argument'}->ensureDefaultValue('');
if(!${'greetings17_argument'}->isValid()) return ${'greetings17_argument'}->getErrorMessage();
if(${'greetings17_argument'} !== null) ${'greetings17_argument'}->setColumnType('varchar');
if(isset($args->today_point)) {
${'today_point18_argument'} = new Argument('today_point', $args->{'today_point'});
if(!${'today_point18_argument'}->isValid()) return ${'today_point18_argument'}->getErrorMessage();
} else
${'today_point18_argument'} = NULL;if(${'today_point18_argument'} !== null) ${'today_point18_argument'}->setColumnType('number');

${'today_random19_argument'} = new Argument('today_random', $args->{'today_random'});
${'today_random19_argument'}->ensureDefaultValue('0');
if(!${'today_random19_argument'}->isValid()) return ${'today_random19_argument'}->getErrorMessage();
if(${'today_random19_argument'} !== null) ${'today_random19_argument'}->setColumnType('number');

${'att_random_set20_argument'} = new Argument('att_random_set', $args->{'att_random_set'});
${'att_random_set20_argument'}->ensureDefaultValue('0');
if(!${'att_random_set20_argument'}->isValid()) return ${'att_random_set20_argument'}->getErrorMessage();
if(${'att_random_set20_argument'} !== null) ${'att_random_set20_argument'}->setColumnType('number');

${'perfect_m21_argument'} = new Argument('perfect_m', $args->{'perfect_m'});
${'perfect_m21_argument'}->ensureDefaultValue('N');
if(!${'perfect_m21_argument'}->isValid()) return ${'perfect_m21_argument'}->getErrorMessage();
if(${'perfect_m21_argument'} !== null) ${'perfect_m21_argument'}->setColumnType('char');

${'present_y22_argument'} = new Argument('present_y', $args->{'present_y'});
${'present_y22_argument'}->ensureDefaultValue('N');
if(!${'present_y22_argument'}->isValid()) return ${'present_y22_argument'}->getErrorMessage();
if(${'present_y22_argument'} !== null) ${'present_y22_argument'}->setColumnType('char');

${'a_continuity23_argument'} = new Argument('a_continuity', $args->{'a_continuity'});
${'a_continuity23_argument'}->ensureDefaultValue('1');
if(!${'a_continuity23_argument'}->isValid()) return ${'a_continuity23_argument'}->getErrorMessage();
if(${'a_continuity23_argument'} !== null) ${'a_continuity23_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`attendance_srl`', ${'attendance_srl13_argument'})
,new InsertExpression('`regdate`', ${'regdate14_argument'})
,new InsertExpression('`member_srl`', ${'member_srl15_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress16_argument'})
,new InsertExpression('`greetings`', ${'greetings17_argument'})
,new InsertExpression('`today_point`', ${'today_point18_argument'})
,new InsertExpression('`today_random`', ${'today_random19_argument'})
,new InsertExpression('`att_random_set`', ${'att_random_set20_argument'})
,new InsertExpression('`perfect_m`', ${'perfect_m21_argument'})
,new InsertExpression('`present_y`', ${'present_y22_argument'})
,new InsertExpression('`a_continuity`', ${'a_continuity23_argument'})
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>