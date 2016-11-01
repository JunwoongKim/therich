<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAdminGiftList");
$query->setAction("select");
$query->setPriority("");

${'page2_argument'} = new Argument('page', $args->{'page'});
${'page2_argument'}->ensureDefaultValue('1');
if(!${'page2_argument'}->isValid()) return ${'page2_argument'}->getErrorMessage();

${'page_count3_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count3_argument'}->ensureDefaultValue('10');
if(!${'page_count3_argument'}->isValid()) return ${'page_count3_argument'}->getErrorMessage();

${'list_count4_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count4_argument'}->ensureDefaultValue('20');
if(!${'list_count4_argument'}->isValid()) return ${'list_count4_argument'}->getErrorMessage();

${'list_order1_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order1_argument'}->ensureDefaultValue('regdate');
if(!${'list_order1_argument'}->isValid()) return ${'list_order1_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_attendance_present`', '`attendance_present`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order1_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count4_argument'}, ${'page2_argument'}, ${'page_count3_argument'}));
return $query; ?>