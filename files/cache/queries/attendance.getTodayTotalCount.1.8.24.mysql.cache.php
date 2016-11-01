<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTodayTotalCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->today)) {
${'today1_argument'} = new ConditionArgument('today', $args->today, 'like_prefix');
${'today1_argument'}->createConditionValue();
if(!${'today1_argument'}->isValid()) return ${'today1_argument'}->getErrorMessage();
} else
${'today1_argument'} = NULL;if(${'today1_argument'} !== null) ${'today1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance`', '`attendance`')
,new JoinTable('`xe_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`attendance`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`attendance`.`regdate`',$today1_argument,"like_prefix")
,new ConditionWithoutArgument('`attendance`.`member_srl`','`member`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>