<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertWeekly");
$query->setAction("insert");
$query->setPriority("");

${'regdate50_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate50_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate50_argument'}->checkNotNull();
if(!${'regdate50_argument'}->isValid()) return ${'regdate50_argument'}->getErrorMessage();
if(${'regdate50_argument'} !== null) ${'regdate50_argument'}->setColumnType('varchar');

${'member_srl51_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl51_argument'}->ensureDefaultValue('admin');
if(!${'member_srl51_argument'}->isValid()) return ${'member_srl51_argument'}->getErrorMessage();
if(${'member_srl51_argument'} !== null) ${'member_srl51_argument'}->setColumnType('number');
if(isset($args->weekly)) {
${'weekly52_argument'} = new Argument('weekly', $args->{'weekly'});
if(!${'weekly52_argument'}->isValid()) return ${'weekly52_argument'}->getErrorMessage();
} else
${'weekly52_argument'} = NULL;if(${'weekly52_argument'} !== null) ${'weekly52_argument'}->setColumnType('number');
if(isset($args->weekly_point)) {
${'weekly_point53_argument'} = new Argument('weekly_point', $args->{'weekly_point'});
if(!${'weekly_point53_argument'}->isValid()) return ${'weekly_point53_argument'}->getErrorMessage();
} else
${'weekly_point53_argument'} = NULL;if(${'weekly_point53_argument'} !== null) ${'weekly_point53_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`regdate`', ${'regdate50_argument'})
,new InsertExpression('`member_srl`', ${'member_srl51_argument'})
,new InsertExpression('`weekly`', ${'weekly52_argument'})
,new InsertExpression('`weekly_point`', ${'weekly_point53_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>