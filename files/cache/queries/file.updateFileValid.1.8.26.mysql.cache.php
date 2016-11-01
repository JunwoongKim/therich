<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid40_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid40_argument'}->ensureDefaultValue('Y');
${'isvalid40_argument'}->checkNotNull();
if(!${'isvalid40_argument'}->isValid()) return ${'isvalid40_argument'}->getErrorMessage();
if(${'isvalid40_argument'} !== null) ${'isvalid40_argument'}->setColumnType('char');

${'upload_target_srl41_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl41_argument'}->checkFilter('number');
${'upload_target_srl41_argument'}->checkNotNull();
${'upload_target_srl41_argument'}->createConditionValue();
if(!${'upload_target_srl41_argument'}->isValid()) return ${'upload_target_srl41_argument'}->getErrorMessage();
if(${'upload_target_srl41_argument'} !== null) ${'upload_target_srl41_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid40_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl41_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>