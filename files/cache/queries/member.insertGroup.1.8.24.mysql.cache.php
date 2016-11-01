<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl13_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl13_argument'}->ensureDefaultValue('0');
${'site_srl13_argument'}->checkNotNull();
if(!${'site_srl13_argument'}->isValid()) return ${'site_srl13_argument'}->getErrorMessage();
if(${'site_srl13_argument'} !== null) ${'site_srl13_argument'}->setColumnType('number');

${'group_srl14_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl14_argument'}->checkNotNull();
if(!${'group_srl14_argument'}->isValid()) return ${'group_srl14_argument'}->getErrorMessage();
if(${'group_srl14_argument'} !== null) ${'group_srl14_argument'}->setColumnType('number');

${'list_order15_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order15_argument'}->checkNotNull();
if(!${'list_order15_argument'}->isValid()) return ${'list_order15_argument'}->getErrorMessage();
if(${'list_order15_argument'} !== null) ${'list_order15_argument'}->setColumnType('number');

${'title16_argument'} = new Argument('title', $args->{'title'});
${'title16_argument'}->checkNotNull();
if(!${'title16_argument'}->isValid()) return ${'title16_argument'}->getErrorMessage();
if(${'title16_argument'} !== null) ${'title16_argument'}->setColumnType('varchar');

${'is_default17_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default17_argument'}->ensureDefaultValue('N');
${'is_default17_argument'}->checkNotNull();
if(!${'is_default17_argument'}->isValid()) return ${'is_default17_argument'}->getErrorMessage();
if(${'is_default17_argument'} !== null) ${'is_default17_argument'}->setColumnType('char');

${'is_admin18_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin18_argument'}->ensureDefaultValue('N');
${'is_admin18_argument'}->checkNotNull();
if(!${'is_admin18_argument'}->isValid()) return ${'is_admin18_argument'}->getErrorMessage();
if(${'is_admin18_argument'} !== null) ${'is_admin18_argument'}->setColumnType('char');

${'regdate19_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate19_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate19_argument'}->isValid()) return ${'regdate19_argument'}->getErrorMessage();
if(${'regdate19_argument'} !== null) ${'regdate19_argument'}->setColumnType('date');

${'description20_argument'} = new Argument('description', $args->{'description'});
${'description20_argument'}->ensureDefaultValue('');
if(!${'description20_argument'}->isValid()) return ${'description20_argument'}->getErrorMessage();
if(${'description20_argument'} !== null) ${'description20_argument'}->setColumnType('text');

${'image_mark21_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark21_argument'}->ensureDefaultValue('');
if(!${'image_mark21_argument'}->isValid()) return ${'image_mark21_argument'}->getErrorMessage();
if(${'image_mark21_argument'} !== null) ${'image_mark21_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl13_argument'})
,new InsertExpression('`group_srl`', ${'group_srl14_argument'})
,new InsertExpression('`list_order`', ${'list_order15_argument'})
,new InsertExpression('`title`', ${'title16_argument'})
,new InsertExpression('`is_default`', ${'is_default17_argument'})
,new InsertExpression('`is_admin`', ${'is_admin18_argument'})
,new InsertExpression('`regdate`', ${'regdate19_argument'})
,new InsertExpression('`description`', ${'description20_argument'})
,new InsertExpression('`image_mark`', ${'image_mark21_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>