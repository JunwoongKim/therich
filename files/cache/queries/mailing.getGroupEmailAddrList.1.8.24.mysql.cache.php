<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getEmailAddrList");
$query->setAction("select");
$query->setPriority("");

${'group_srl1_argument'} = new ConditionArgument('group_srl', $args->group_srl, 'in');
${'group_srl1_argument'}->checkNotNull();
${'group_srl1_argument'}->createConditionValue();
if(!${'group_srl1_argument'}->isValid()) return ${'group_srl1_argument'}->getErrorMessage();
if(${'group_srl1_argument'} !== null) ${'group_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`member`.`nick_name`')
,new SelectExpression('`member`.`allow_mailing`')
,new SelectExpression('`member`.`email_address`')
));
$query->setTables(array(
new Table('`xe_member`', '`member`')
,new Table('`xe_member_group_member`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_group`.`group_srl`',$group_srl1_argument,"in")
,new ConditionWithoutArgument('`member`.`member_srl`','`member_group`.`member_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>