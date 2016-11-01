<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status45_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status45_argument'}->createConditionValue();
if(!${'status45_argument'}->isValid()) return ${'status45_argument'}->getErrorMessage();
} else
${'status45_argument'} = NULL;if(${'status45_argument'} !== null) ${'status45_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl46_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl46_argument'}->checkFilter('number');
${'module_srl46_argument'}->createConditionValue();
if(!${'module_srl46_argument'}->isValid()) return ${'module_srl46_argument'}->getErrorMessage();
} else
${'module_srl46_argument'} = NULL;if(${'module_srl46_argument'} !== null) ${'module_srl46_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl47_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl47_argument'}->checkFilter('number');
${'document_srl47_argument'}->createConditionValue();
if(!${'document_srl47_argument'}->isValid()) return ${'document_srl47_argument'}->getErrorMessage();
} else
${'document_srl47_argument'} = NULL;if(${'document_srl47_argument'} !== null) ${'document_srl47_argument'}->setColumnType('number');

${'list_count49_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count49_argument'}->ensureDefaultValue('20');
if(!${'list_count49_argument'}->isValid()) return ${'list_count49_argument'}->getErrorMessage();

${'sort_index48_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index48_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index48_argument'}->isValid()) return ${'sort_index48_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status45_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl46_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl47_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index48_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count49_argument'}));
return $query; ?>