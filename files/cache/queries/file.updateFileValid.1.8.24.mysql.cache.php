<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid28_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid28_argument'}->ensureDefaultValue('Y');
${'isvalid28_argument'}->checkNotNull();
if(!${'isvalid28_argument'}->isValid()) return ${'isvalid28_argument'}->getErrorMessage();
if(${'isvalid28_argument'} !== null) ${'isvalid28_argument'}->setColumnType('char');

${'upload_target_srl29_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl29_argument'}->checkFilter('number');
${'upload_target_srl29_argument'}->checkNotNull();
${'upload_target_srl29_argument'}->createConditionValue();
if(!${'upload_target_srl29_argument'}->isValid()) return ${'upload_target_srl29_argument'}->getErrorMessage();
if(${'upload_target_srl29_argument'} !== null) ${'upload_target_srl29_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid28_argument'})
));
$query->setTables(array(
new Table('`xe_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl29_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>