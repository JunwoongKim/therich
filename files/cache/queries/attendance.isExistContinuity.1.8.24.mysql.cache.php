<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistContinuity");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl2_argument'}->createConditionValue();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->yesterday)) {
${'yesterday3_argument'} = new ConditionArgument('yesterday', $args->yesterday, 'equal');
${'yesterday3_argument'}->createConditionValue();
if(!${'yesterday3_argument'}->isValid()) return ${'yesterday3_argument'}->getErrorMessage();
} else
${'yesterday3_argument'} = NULL;
$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`xe_attendance_total`', '`attendance_total`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl2_argument,"equal", 'and')
,new ConditionWithArgument('substr(`regdate`,1,8)',$yesterday3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>