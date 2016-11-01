<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point25_argument'} = new Argument('point', $args->{'point'});
if(!${'point25_argument'}->isValid()) return ${'point25_argument'}->getErrorMessage();
} else
${'point25_argument'} = NULL;if(${'point25_argument'} !== null) ${'point25_argument'}->setColumnType('number');

${'member_srl26_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl26_argument'}->checkFilter('number');
${'member_srl26_argument'}->checkNotNull();
${'member_srl26_argument'}->createConditionValue();
if(!${'member_srl26_argument'}->isValid()) return ${'member_srl26_argument'}->getErrorMessage();
if(${'member_srl26_argument'} !== null) ${'member_srl26_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point25_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl26_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>