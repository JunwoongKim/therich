<?php if(!defined("__XE__")) exit(); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srsl = array(); } 
$_titles = array();$_descriptions = array();$_titles[233]["ko"] = "새싹반후기"; $_descriptions[233]["ko"] = ""; $_titles[234]["ko"] = "투준반후기"; $_descriptions[234]["ko"] = ""; $_titles[235]["ko"] = "동강반후기"; $_descriptions[235]["ko"] = ""; $_titles[236]["ko"] = "연회원후기"; $_descriptions[236]["ko"] = ""; $_titles[237]["ko"] = "저서후기"; $_descriptions[237]["ko"] = ""; $menu = new stdClass;$menu->list = array(233=>array("mid" => "board_tUlO27", "module_srl" => "166","node_srl"=>"233","category_srl"=>"233","parent_srl"=>"0","text"=>$_titles[233][$lang_type],"selected"=>(in_array(Context::get("category"),array("233"))?1:0),"expand"=>"N","color"=>"","description"=>$_descriptions[233][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),234=>array("mid" => "board_tUlO27", "module_srl" => "166","node_srl"=>"234","category_srl"=>"234","parent_srl"=>"0","text"=>$_titles[234][$lang_type],"selected"=>(in_array(Context::get("category"),array("234"))?1:0),"expand"=>"N","color"=>"","description"=>$_descriptions[234][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),235=>array("mid" => "board_tUlO27", "module_srl" => "166","node_srl"=>"235","category_srl"=>"235","parent_srl"=>"0","text"=>$_titles[235][$lang_type],"selected"=>(in_array(Context::get("category"),array("235"))?1:0),"expand"=>"N","color"=>"","description"=>$_descriptions[235][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),236=>array("mid" => "board_tUlO27", "module_srl" => "166","node_srl"=>"236","category_srl"=>"236","parent_srl"=>"0","text"=>$_titles[236][$lang_type],"selected"=>(in_array(Context::get("category"),array("236"))?1:0),"expand"=>"N","color"=>"","description"=>$_descriptions[236][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),237=>array("mid" => "board_tUlO27", "module_srl" => "166","node_srl"=>"237","category_srl"=>"237","parent_srl"=>"0","text"=>$_titles[237][$lang_type],"selected"=>(in_array(Context::get("category"),array("237"))?1:0),"expand"=>"N","color"=>"","description"=>$_descriptions[237][$lang_type],"list"=>array(),"document_count"=>"0","grant"=>true?true:false),); 