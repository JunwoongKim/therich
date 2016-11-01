<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLoginCountByIp");
$query->setAction("insert");
$query->setPriority("");

${'ipaddress3_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress3_argument'}->checkNotNull();
if(!${'ipaddress3_argument'}->isValid()) return ${'ipaddress3_argument'}->getErrorMessage();
if(${'ipaddress3_argument'} !== null) ${'ipaddress3_argument'}->setColumnType('varchar');

${'count4_argument'} = new Argument('count', $args->{'count'});
${'count4_argument'}->checkNotNull();
if(!${'count4_argument'}->isValid()) return ${'count4_argument'}->getErrorMessage();
if(${'count4_argument'} !== null) ${'count4_argument'}->setColumnType('number');

${'regdate5_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate5_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('date');

${'last_update6_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update6_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update6_argument'}->isValid()) return ${'last_update6_argument'}->getErrorMessage();
if(${'last_update6_argument'} !== null) ${'last_update6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`ipaddress`', ${'ipaddress3_argument'})
,new InsertExpression('`count`', ${'count4_argument'})
,new InsertExpression('`regdate`', ${'regdate5_argument'})
,new InsertExpression('`last_update`', ${'last_update6_argument'})
));
$query->setTables(array(
new Table('`xe_member_login_count`', '`member_login_count`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>