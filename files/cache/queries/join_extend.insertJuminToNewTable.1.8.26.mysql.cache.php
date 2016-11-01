<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertJuminToNewTable");
$query->setAction("insert");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl30_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl30_argument'}->isValid()) return ${'member_srl30_argument'}->getErrorMessage();
} else
${'member_srl30_argument'} = NULL;if(${'member_srl30_argument'} !== null) ${'member_srl30_argument'}->setColumnType('number');

${'jumin31_argument'} = new Argument('jumin', $args->{'jumin'});
${'jumin31_argument'}->ensureDefaultValue('null');
if(!${'jumin31_argument'}->isValid()) return ${'jumin31_argument'}->getErrorMessage();
if(${'jumin31_argument'} !== null) ${'jumin31_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl30_argument'})
,new InsertExpression('`jumin`', ${'jumin31_argument'})
));
$query->setTables(array(
new Table('`xe_join_extend`', '`join_extend`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>