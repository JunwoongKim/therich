<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMapsContent");
$query->setAction("update");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->maps_content)) {
${'maps_content2_argument'} = new Argument('maps_content', $args->{'maps_content'});
if(!${'maps_content2_argument'}->isValid()) return ${'maps_content2_argument'}->getErrorMessage();
} else
${'maps_content2_argument'} = NULL;if(${'maps_content2_argument'} !== null) ${'maps_content2_argument'}->setColumnType('bigtext');
if(isset($args->title)) {
${'title3_argument'} = new Argument('title', $args->{'title'});
if(!${'title3_argument'}->isValid()) return ${'title3_argument'}->getErrorMessage();
} else
${'title3_argument'} = NULL;if(${'title3_argument'} !== null) ${'title3_argument'}->setColumnType('varchar');
if(isset($args->content)) {
${'content4_argument'} = new Argument('content', $args->{'content'});
if(!${'content4_argument'}->isValid()) return ${'content4_argument'}->getErrorMessage();
} else
${'content4_argument'} = NULL;if(${'content4_argument'} !== null) ${'content4_argument'}->setColumnType('bigtext');
if(isset($args->ipaddress)) {
${'ipaddress5_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
} else
${'ipaddress5_argument'} = NULL;if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

${'maps_srl6_argument'} = new ConditionArgument('maps_srl', $args->maps_srl, 'equal');
${'maps_srl6_argument'}->checkNotNull();
${'maps_srl6_argument'}->createConditionValue();
if(!${'maps_srl6_argument'}->isValid()) return ${'maps_srl6_argument'}->getErrorMessage();
if(${'maps_srl6_argument'} !== null) ${'maps_srl6_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`member_srl`', ${'member_srl1_argument'})
,new UpdateExpression('`maps_content`', ${'maps_content2_argument'})
,new UpdateExpression('`title`', ${'title3_argument'})
,new UpdateExpression('`content`', ${'content4_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress5_argument'})
,new UpdateExpressionWithoutArgument('`update`', "'".date("YmdHis")."'")
));
$query->setTables(array(
new Table('`xe_maps_contents`', '`maps_contents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`maps_srl`',$maps_srl6_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>