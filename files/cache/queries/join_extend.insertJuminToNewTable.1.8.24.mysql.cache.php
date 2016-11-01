<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertJuminToNewTable");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'jumin2_argument'} = new Argument('jumin', $args->{'jumin'});
${'jumin2_argument'}->ensureDefaultValue('null');
if(!${'jumin2_argument'}->isValid()) return ${'jumin2_argument'}->getErrorMessage();
if(${'jumin2_argument'} !== null) ${'jumin2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl1_argument'})
,new InsertExpression('`jumin`', ${'jumin2_argument'})
));
$query->setTables(array(
new Table('`xe_join_extend`', '`join_extend`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>