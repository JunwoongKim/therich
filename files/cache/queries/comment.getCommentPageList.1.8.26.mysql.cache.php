<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentPageList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status35_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status35_argument'}->createConditionValue();
if(!${'status35_argument'}->isValid()) return ${'status35_argument'}->getErrorMessage();
} else
${'status35_argument'} = NULL;if(${'status35_argument'} !== null) ${'status35_argument'}->setColumnType('number');

${'document_srl36_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl36_argument'}->checkNotNull();
${'document_srl36_argument'}->createConditionValue();
if(!${'document_srl36_argument'}->isValid()) return ${'document_srl36_argument'}->getErrorMessage();
if(${'document_srl36_argument'} !== null) ${'document_srl36_argument'}->setColumnType('number');

${'page40_argument'} = new Argument('page', $args->{'page'});
${'page40_argument'}->ensureDefaultValue('1');
if(!${'page40_argument'}->isValid()) return ${'page40_argument'}->getErrorMessage();

${'page_count41_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count41_argument'}->ensureDefaultValue('10');
if(!${'page_count41_argument'}->isValid()) return ${'page_count41_argument'}->getErrorMessage();

${'list_count42_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count42_argument'}->ensureDefaultValue('list_count');
if(!${'list_count42_argument'}->isValid()) return ${'list_count42_argument'}->getErrorMessage();

${'list_order39_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order39_argument'}->ensureDefaultValue('comments_list.arrange');
if(!${'list_order39_argument'}->isValid()) return ${'list_order39_argument'}->getErrorMessage();

${'list_order38_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order38_argument'}->ensureDefaultValue('comments_list.head');
if(!${'list_order38_argument'}->isValid()) return ${'list_order38_argument'}->getErrorMessage();

${'list_order37_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order37_argument'}->ensureDefaultValue('comments.status');
if(!${'list_order37_argument'}->isValid()) return ${'list_order37_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`comments`.*')
,new SelectExpression('`comments_list`.`depth`', '`depth`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
,new Table('`xe_comments_list`', '`comments_list`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`comments`.`status`',$status35_argument,"equal", 'and')
,new ConditionWithArgument('`comments_list`.`document_srl`',$document_srl36_argument,"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`comment_srl`','`comments`.`comment_srl`',"equal", 'and')
,new ConditionWithoutArgument('`comments_list`.`head`','0',"more", 'and')
,new ConditionWithoutArgument('`comments_list`.`arrange`','0',"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'list_order37_argument'}, "desc")
,new OrderByColumn(${'list_order38_argument'}, "asc")
,new OrderByColumn(${'list_order39_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count42_argument'}, ${'page40_argument'}, ${'page_count41_argument'}));
return $query; ?>