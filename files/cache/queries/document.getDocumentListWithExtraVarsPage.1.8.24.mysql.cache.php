<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentListWithExtraVarsPage");
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
if(isset($args->list_order)) {
${'list_order7_argument'} = new ConditionArgument('list_order', $args->list_order, 'less');
${'list_order7_argument'}->checkFilter('number');
${'list_order7_argument'}->createConditionValue();
if(!${'list_order7_argument'}->isValid()) return ${'list_order7_argument'}->getErrorMessage();
} else
${'list_order7_argument'} = NULL;if(${'list_order7_argument'} !== null) ${'list_order7_argument'}->setColumnType('number');
if(isset($args->rev_list_order)) {
${'rev_list_order8_argument'} = new ConditionArgument('rev_list_order', $args->rev_list_order, 'more');
${'rev_list_order8_argument'}->checkFilter('number');
${'rev_list_order8_argument'}->createConditionValue();
if(!${'rev_list_order8_argument'}->isValid()) return ${'rev_list_order8_argument'}->getErrorMessage();
} else
${'rev_list_order8_argument'} = NULL;if(${'rev_list_order8_argument'} !== null) ${'rev_list_order8_argument'}->setColumnType('number');
if(isset($args->update_order)) {
${'update_order9_argument'} = new ConditionArgument('update_order', $args->update_order, 'less');
${'update_order9_argument'}->checkFilter('number');
${'update_order9_argument'}->createConditionValue();
if(!${'update_order9_argument'}->isValid()) return ${'update_order9_argument'}->getErrorMessage();
} else
${'update_order9_argument'} = NULL;if(${'update_order9_argument'} !== null) ${'update_order9_argument'}->setColumnType('number');
if(isset($args->rev_update_order)) {
${'rev_update_order10_argument'} = new ConditionArgument('rev_update_order', $args->rev_update_order, 'more');
${'rev_update_order10_argument'}->checkFilter('number');
${'rev_update_order10_argument'}->createConditionValue();
if(!${'rev_update_order10_argument'}->isValid()) return ${'rev_update_order10_argument'}->getErrorMessage();
} else
${'rev_update_order10_argument'} = NULL;if(${'rev_update_order10_argument'} !== null) ${'rev_update_order10_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(distinct `documents`.`document_srl`)', '`count`')
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
,new ConditionGroup(array(
new ConditionWithArgument('`documents`.`list_order`',$list_order7_argument,"less", 'and')
,new ConditionWithArgument('`documents`.`list_order`',$rev_list_order8_argument,"more", 'and')
,new ConditionWithArgument('`documents`.`update_order`',$update_order9_argument,"less", 'and')
,new ConditionWithArgument('`documents`.`update_order`',$rev_update_order10_argument,"more", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>