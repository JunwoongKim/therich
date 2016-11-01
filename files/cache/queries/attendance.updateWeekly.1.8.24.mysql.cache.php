<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateWeekly");
$query->setAction("update");
$query->setPriority("");

${'regdate26_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate26_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate26_argument'}->checkNotNull();
if(!${'regdate26_argument'}->isValid()) return ${'regdate26_argument'}->getErrorMessage();
if(${'regdate26_argument'} !== null) ${'regdate26_argument'}->setColumnType('varchar');
if(isset($args->weekly)) {
${'weekly27_argument'} = new Argument('weekly', $args->{'weekly'});
if(!${'weekly27_argument'}->isValid()) return ${'weekly27_argument'}->getErrorMessage();
} else
${'weekly27_argument'} = NULL;if(${'weekly27_argument'} !== null) ${'weekly27_argument'}->setColumnType('number');
if(isset($args->weekly_point)) {
${'weekly_point28_argument'} = new Argument('weekly_point', $args->{'weekly_point'});
if(!${'weekly_point28_argument'}->isValid()) return ${'weekly_point28_argument'}->getErrorMessage();
} else
${'weekly_point28_argument'} = NULL;if(${'weekly_point28_argument'} !== null) ${'weekly_point28_argument'}->setColumnType('number');

${'member_srl29_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl29_argument'}->ensureDefaultValue('admin');
${'member_srl29_argument'}->createConditionValue();
if(!${'member_srl29_argument'}->isValid()) return ${'member_srl29_argument'}->getErrorMessage();
if(${'member_srl29_argument'} !== null) ${'member_srl29_argument'}->setColumnType('number');
if(isset($args->monday)) {
${'monday30_argument'} = new ConditionArgument('monday', $args->monday, 'more');
${'monday30_argument'}->createConditionValue();
if(!${'monday30_argument'}->isValid()) return ${'monday30_argument'}->getErrorMessage();
} else
${'monday30_argument'} = NULL;if(${'monday30_argument'} !== null) ${'monday30_argument'}->setColumnType('varchar');
if(isset($args->sunday)) {
${'sunday31_argument'} = new ConditionArgument('sunday', $args->sunday, 'less');
${'sunday31_argument'}->createConditionValue();
if(!${'sunday31_argument'}->isValid()) return ${'sunday31_argument'}->getErrorMessage();
} else
${'sunday31_argument'} = NULL;if(${'sunday31_argument'} !== null) ${'sunday31_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate26_argument'})
,new UpdateExpression('`weekly`', ${'weekly27_argument'})
,new UpdateExpression('`weekly_point`', ${'weekly_point28_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_weekly`', '`attendance_weekly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl29_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$monday30_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$sunday31_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>