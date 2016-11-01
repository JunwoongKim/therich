<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateGroup");
$query->setAction("update");
$query->setPriority("");

${'title7_argument'} = new Argument('title', $args->{'title'});
${'title7_argument'}->checkNotNull();
if(!${'title7_argument'}->isValid()) return ${'title7_argument'}->getErrorMessage();
if(${'title7_argument'} !== null) ${'title7_argument'}->setColumnType('varchar');

${'is_default8_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default8_argument'}->ensureDefaultValue('N');
${'is_default8_argument'}->checkNotNull();
if(!${'is_default8_argument'}->isValid()) return ${'is_default8_argument'}->getErrorMessage();
if(${'is_default8_argument'} !== null) ${'is_default8_argument'}->setColumnType('char');

${'description9_argument'} = new Argument('description', $args->{'description'});
${'description9_argument'}->ensureDefaultValue('');
if(!${'description9_argument'}->isValid()) return ${'description9_argument'}->getErrorMessage();
if(${'description9_argument'} !== null) ${'description9_argument'}->setColumnType('text');

${'image_mark10_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark10_argument'}->ensureDefaultValue('');
if(!${'image_mark10_argument'}->isValid()) return ${'image_mark10_argument'}->getErrorMessage();
if(${'image_mark10_argument'} !== null) ${'image_mark10_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();
} else
${'list_order11_argument'} = NULL;if(${'list_order11_argument'} !== null) ${'list_order11_argument'}->setColumnType('number');

${'group_srl12_argument'} = new ConditionArgument('group_srl', $args->group_srl, 'equal');
${'group_srl12_argument'}->checkFilter('number');
${'group_srl12_argument'}->checkNotNull();
${'group_srl12_argument'}->createConditionValue();
if(!${'group_srl12_argument'}->isValid()) return ${'group_srl12_argument'}->getErrorMessage();
if(${'group_srl12_argument'} !== null) ${'group_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title7_argument'})
,new UpdateExpression('`is_default`', ${'is_default8_argument'})
,new UpdateExpression('`description`', ${'description9_argument'})
,new UpdateExpression('`image_mark`', ${'image_mark10_argument'})
,new UpdateExpression('`list_order`', ${'list_order11_argument'})
));
$query->setTables(array(
new Table('`xe_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`group_srl`',$group_srl12_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>