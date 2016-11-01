<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAttendance");
$query->setAction("insert");
$query->setPriority("");

${'attendance_srl11_argument'} = new Argument('attendance_srl', $args->{'attendance_srl'});
${'attendance_srl11_argument'}->checkNotNull();
if(!${'attendance_srl11_argument'}->isValid()) return ${'attendance_srl11_argument'}->getErrorMessage();
if(${'attendance_srl11_argument'} !== null) ${'attendance_srl11_argument'}->setColumnType('number');

${'regdate12_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate12_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate12_argument'}->checkNotNull();
if(!${'regdate12_argument'}->isValid()) return ${'regdate12_argument'}->getErrorMessage();
if(${'regdate12_argument'} !== null) ${'regdate12_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');

${'ipaddress14_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress14_argument'}->ensureDefaultValue('none');
if(!${'ipaddress14_argument'}->isValid()) return ${'ipaddress14_argument'}->getErrorMessage();
if(${'ipaddress14_argument'} !== null) ${'ipaddress14_argument'}->setColumnType('varchar');

${'greetings15_argument'} = new Argument('greetings', $args->{'greetings'});
${'greetings15_argument'}->ensureDefaultValue('');
if(!${'greetings15_argument'}->isValid()) return ${'greetings15_argument'}->getErrorMessage();
if(${'greetings15_argument'} !== null) ${'greetings15_argument'}->setColumnType('varchar');
if(isset($args->today_point)) {
${'today_point16_argument'} = new Argument('today_point', $args->{'today_point'});
if(!${'today_point16_argument'}->isValid()) return ${'today_point16_argument'}->getErrorMessage();
} else
${'today_point16_argument'} = NULL;if(${'today_point16_argument'} !== null) ${'today_point16_argument'}->setColumnType('number');

${'today_random17_argument'} = new Argument('today_random', $args->{'today_random'});
${'today_random17_argument'}->ensureDefaultValue('0');
if(!${'today_random17_argument'}->isValid()) return ${'today_random17_argument'}->getErrorMessage();
if(${'today_random17_argument'} !== null) ${'today_random17_argument'}->setColumnType('number');

${'att_random_set18_argument'} = new Argument('att_random_set', $args->{'att_random_set'});
${'att_random_set18_argument'}->ensureDefaultValue('0');
if(!${'att_random_set18_argument'}->isValid()) return ${'att_random_set18_argument'}->getErrorMessage();
if(${'att_random_set18_argument'} !== null) ${'att_random_set18_argument'}->setColumnType('number');

${'perfect_m19_argument'} = new Argument('perfect_m', $args->{'perfect_m'});
${'perfect_m19_argument'}->ensureDefaultValue('N');
if(!${'perfect_m19_argument'}->isValid()) return ${'perfect_m19_argument'}->getErrorMessage();
if(${'perfect_m19_argument'} !== null) ${'perfect_m19_argument'}->setColumnType('char');

${'present_y20_argument'} = new Argument('present_y', $args->{'present_y'});
${'present_y20_argument'}->ensureDefaultValue('N');
if(!${'present_y20_argument'}->isValid()) return ${'present_y20_argument'}->getErrorMessage();
if(${'present_y20_argument'} !== null) ${'present_y20_argument'}->setColumnType('char');

${'a_continuity21_argument'} = new Argument('a_continuity', $args->{'a_continuity'});
${'a_continuity21_argument'}->ensureDefaultValue('1');
if(!${'a_continuity21_argument'}->isValid()) return ${'a_continuity21_argument'}->getErrorMessage();
if(${'a_continuity21_argument'} !== null) ${'a_continuity21_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`attendance_srl`', ${'attendance_srl11_argument'})
,new InsertExpression('`regdate`', ${'regdate12_argument'})
,new InsertExpression('`member_srl`', ${'member_srl13_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress14_argument'})
,new InsertExpression('`greetings`', ${'greetings15_argument'})
,new InsertExpression('`today_point`', ${'today_point16_argument'})
,new InsertExpression('`today_random`', ${'today_random17_argument'})
,new InsertExpression('`att_random_set`', ${'att_random_set18_argument'})
,new InsertExpression('`perfect_m`', ${'perfect_m19_argument'})
,new InsertExpression('`present_y`', ${'present_y20_argument'})
,new InsertExpression('`a_continuity`', ${'a_continuity21_argument'})
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>