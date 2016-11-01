<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateYearly");
$query->setAction("update");
$query->setPriority("");

${'regdate14_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate14_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate14_argument'}->checkNotNull();
if(!${'regdate14_argument'}->isValid()) return ${'regdate14_argument'}->getErrorMessage();
if(${'regdate14_argument'} !== null) ${'regdate14_argument'}->setColumnType('varchar');
if(isset($args->yearly)) {
${'yearly15_argument'} = new Argument('yearly', $args->{'yearly'});
if(!${'yearly15_argument'}->isValid()) return ${'yearly15_argument'}->getErrorMessage();
} else
${'yearly15_argument'} = NULL;if(${'yearly15_argument'} !== null) ${'yearly15_argument'}->setColumnType('number');
if(isset($args->yearly_point)) {
${'yearly_point16_argument'} = new Argument('yearly_point', $args->{'yearly_point'});
if(!${'yearly_point16_argument'}->isValid()) return ${'yearly_point16_argument'}->getErrorMessage();
} else
${'yearly_point16_argument'} = NULL;if(${'yearly_point16_argument'} !== null) ${'yearly_point16_argument'}->setColumnType('number');

${'member_srl17_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl17_argument'}->ensureDefaultValue('admin');
${'member_srl17_argument'}->checkNotNull();
${'member_srl17_argument'}->createConditionValue();
if(!${'member_srl17_argument'}->isValid()) return ${'member_srl17_argument'}->getErrorMessage();
if(${'member_srl17_argument'} !== null) ${'member_srl17_argument'}->setColumnType('number');

${'year18_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year18_argument'}->checkNotNull();
${'year18_argument'}->createConditionValue();
if(!${'year18_argument'}->isValid()) return ${'year18_argument'}->getErrorMessage();
if(${'year18_argument'} !== null) ${'year18_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate14_argument'})
,new UpdateExpression('`yearly`', ${'yearly15_argument'})
,new UpdateExpression('`yearly_point`', ${'yearly_point16_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl17_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year18_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>