<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl23_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl23_argument'}->checkFilter('number');
${'member_srl23_argument'}->checkNotNull();
if(!${'member_srl23_argument'}->isValid()) return ${'member_srl23_argument'}->getErrorMessage();
if(${'member_srl23_argument'} !== null) ${'member_srl23_argument'}->setColumnType('number');

${'point24_argument'} = new Argument('point', $args->{'point'});
${'point24_argument'}->checkFilter('number');
${'point24_argument'}->ensureDefaultValue('0');
${'point24_argument'}->checkNotNull();
if(!${'point24_argument'}->isValid()) return ${'point24_argument'}->getErrorMessage();
if(${'point24_argument'} !== null) ${'point24_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl23_argument'})
,new InsertExpression('`point`', ${'point24_argument'})
));
$query->setTables(array(
new Table('`xe_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>