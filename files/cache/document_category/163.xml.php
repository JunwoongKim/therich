<?php define('__XE__', true); require_once('/www/ontherich_co_kr/config/config.inc.php'); $oContext = &Context::getInstance(); $oContext->init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles[293]["ko"] = "수업자료"; $_descriptions[293]["ko"] = ""; $_titles[302]["ko"] = "일반자료"; $_descriptions[302]["ko"] = "";  $oContext->close();?><root><node mid="board_lwMs56" module_srl="163" node_srl="293" parent_srl="0" category_srl="293" text="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1,135)))))?($_titles[293][$lang_type]):"")?>" url="/index.php?mid=board_lwMs56&amp;category=293" expand="N" color="" description="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1,135)))))?($_descriptions[293][$lang_type]):"")?>" document_count="7"  /><node mid="board_lwMs56" module_srl="163" node_srl="302" parent_srl="0" category_srl="302" text="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1,135)))))?($_titles[302][$lang_type]):"")?>" url="/index.php?mid=board_lwMs56&amp;category=302" expand="N" color="" description="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1,135)))))?($_descriptions[302][$lang_type]):"")?>" document_count="1"  /></root>