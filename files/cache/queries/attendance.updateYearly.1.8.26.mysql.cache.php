<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateYearly");
$query->setAction("update");
$query->setPriority("");

${'regdate39_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate39_argument'}->ensureDefaultValue(date("YmdHis"));
${'regdate39_argument'}->checkNotNull();
if(!${'regdate39_argument'}->isValid()) return ${'regdate39_argument'}->getErrorMessage();
if(${'regdate39_argument'} !== null) ${'regdate39_argument'}->setColumnType('varchar');
if(isset($args->yearly)) {
${'yearly40_argument'} = new Argument('yearly', $args->{'yearly'});
if(!${'yearly40_argument'}->isValid()) return ${'yearly40_argument'}->getErrorMessage();
} else
${'yearly40_argument'} = NULL;if(${'yearly40_argument'} !== null) ${'yearly40_argument'}->setColumnType('number');
if(isset($args->yearly_point)) {
${'yearly_point41_argument'} = new Argument('yearly_point', $args->{'yearly_point'});
if(!${'yearly_point41_argument'}->isValid()) return ${'yearly_point41_argument'}->getErrorMessage();
} else
${'yearly_point41_argument'} = NULL;if(${'yearly_point41_argument'} !== null) ${'yearly_point41_argument'}->setColumnType('number');

${'member_srl42_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl42_argument'}->ensureDefaultValue('admin');
${'member_srl42_argument'}->checkNotNull();
${'member_srl42_argument'}->createConditionValue();
if(!${'member_srl42_argument'}->isValid()) return ${'member_srl42_argument'}->getErrorMessage();
if(${'member_srl42_argument'} !== null) ${'member_srl42_argument'}->setColumnType('number');

${'year43_argument'} = new ConditionArgument('year', $args->year, 'like_prefix');
${'year43_argument'}->checkNotNull();
${'year43_argument'}->createConditionValue();
if(!${'year43_argument'}->isValid()) return ${'year43_argument'}->getErrorMessage();
if(${'year43_argument'} !== null) ${'year43_argument'}->setColumnType('varchar');

$query->setColumns(array(
new UpdateExpression('`regdate`', ${'regdate39_argument'})
,new UpdateExpression('`yearly`', ${'yearly40_argument'})
,new UpdateExpression('`yearly_point`', ${'yearly_point41_argument'})
));
$query->setTables(array(
new Table('`xe_attendance_yearly`', '`attendance_yearly`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl42_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$year43_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>