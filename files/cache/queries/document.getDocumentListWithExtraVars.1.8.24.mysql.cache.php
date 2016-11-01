<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListWithExtraVars");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
} else
${'module_srl1_argument'} = NULL;if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl2_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl2_argument'}->checkFilter('number');
${'category_srl2_argument'}->createConditionValue();
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
} else
${'category_srl2_argument'} = NULL;if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'var_idx4_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx4_argument'}->checkNotNull();
${'var_idx4_argument'}->createConditionValue();
if(!${'var_idx4_argument'}->isValid()) return ${'var_idx4_argument'}->getErrorMessage();
if(${'var_idx4_argument'} !== null) ${'var_idx4_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList5_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList5_argument'}->createConditionValue();
if(!${'statusList5_argument'}->isValid()) return ${'statusList5_argument'}->getErrorMessage();
} else
${'statusList5_argument'} = NULL;if(${'statusList5_argument'} !== null) ${'statusList5_argument'}->setColumnType('varchar');

${'var_value6_argument'} = new ConditionArgument('var_value', $args->var_value, 'like');
${'var_value6_argument'}->checkNotNull();
${'var_value6_argument'}->createConditionValue();
if(!${'var_value6_argument'}->isValid()) return ${'var_value6_argument'}->getErrorMessage();
if(${'var_value6_argument'} !== null) ${'var_value6_argument'}->setColumnType('bigtext');

${'page9_argument'} = new Argument('page', $args->{'page'});
${'page9_argument'}->ensureDefaultValue('1');
if(!${'page9_argument'}->isValid()) return ${'page9_argument'}->getErrorMessage();

${'page_count10_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count10_argument'}->ensureDefaultValue('10');
if(!${'page_count10_argument'}->isValid()) return ${'page_count10_argument'}->getErrorMessage();

${'list_count11_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count11_argument'}->ensureDefaultValue('20');
if(!${'list_count11_argument'}->isValid()) return ${'list_count11_argument'}->getErrorMessage();

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('documents.list_order');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

${'order_type8_argument'} = new SortArgument('order_type8', $args->order_type);
${'order_type8_argument'}->ensureDefaultValue('asc');
if(!${'order_type8_argument'}->isValid()) return ${'order_type8_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`documents`.*')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_document_extra_vars`', '`extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`module_srl`',$module_srl1_argument,"in")
,new ConditionWithArgument('`documents`.`category_srl`',$category_srl2_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`member_srl`',$member_srl3_argument,"equal", 'and')
,new ConditionWithoutArgument('`extra_vars`.`module_srl`','`documents`.`module_srl`',"equal", 'and')
,new ConditionWithoutArgument('`extra_vars`.`document_srl`','`documents`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`extra_vars`.`var_idx`',$var_idx4_argument,"equal", 'and')
,new ConditionWithArgument('`documents`.`status`',$statusList5_argument,"in", 'and')
,new ConditionWithArgument('`extra_vars`.`value`',$var_value6_argument,"like", 'and')))
));
$query->setGroups(array(
'`extra_vars`.`document_srl`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, $order_type8_argument)
));
$query->setLimit(new Limit(${'list_count11_argument'}, ${'page9_argument'}, ${'page_count10_argument'}));
return $query; ?>