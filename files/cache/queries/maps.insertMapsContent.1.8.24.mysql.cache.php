<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMapsContent");
$query->setAction("insert");
$query->setPriority("");

${'maps_srl1_argument'} = new Argument('maps_srl', $args->{'maps_srl'});
${'maps_srl1_argument'}->ensureDefaultValue('0');
if(!${'maps_srl1_argument'}->isValid()) return ${'maps_srl1_argument'}->getErrorMessage();
if(${'maps_srl1_argument'} !== null) ${'maps_srl1_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
} else
${'member_srl2_argument'} = NULL;if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->maps_content)) {
${'maps_content3_argument'} = new Argument('maps_content', $args->{'maps_content'});
if(!${'maps_content3_argument'}->isValid()) return ${'maps_content3_argument'}->getErrorMessage();
} else
${'maps_content3_argument'} = NULL;if(${'maps_content3_argument'} !== null) ${'maps_content3_argument'}->setColumnType('bigtext');
if(isset($args->title)) {
${'title4_argument'} = new Argument('title', $args->{'title'});
if(!${'title4_argument'}->isValid()) return ${'title4_argument'}->getErrorMessage();
} else
${'title4_argument'} = NULL;if(${'title4_argument'} !== null) ${'title4_argument'}->setColumnType('varchar');
if(isset($args->content)) {
${'content5_argument'} = new Argument('content', $args->{'content'});
if(!${'content5_argument'}->isValid()) return ${'content5_argument'}->getErrorMessage();
} else
${'content5_argument'} = NULL;if(${'content5_argument'} !== null) ${'content5_argument'}->setColumnType('bigtext');
if(isset($args->ipaddress)) {
${'ipaddress6_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
if(!${'ipaddress6_argument'}->isValid()) return ${'ipaddress6_argument'}->getErrorMessage();
} else
${'ipaddress6_argument'} = NULL;if(${'ipaddress6_argument'} !== null) ${'ipaddress6_argument'}->setColumnType('varchar');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

${'update8_argument'} = new Argument('update', $args->{'update'});
${'update8_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'update8_argument'}->isValid()) return ${'update8_argument'}->getErrorMessage();
if(${'update8_argument'} !== null) ${'update8_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`maps_srl`', ${'maps_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`maps_content`', ${'maps_content3_argument'})
,new InsertExpression('`title`', ${'title4_argument'})
,new InsertExpression('`content`', ${'content5_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
,new InsertExpression('`update`', ${'update8_argument'})
));
$query->setTables(array(
new Table('`xe_maps_contents`', '`maps_contents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>