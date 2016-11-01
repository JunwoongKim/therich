<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = 'run_selected';
$ml = array(
'board_lmCh18' => 1,
);
$addon_file = './addons/addon_write_insert_media/addon_write_insert_media.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE5OiJpbnNlcnRfbWVkaWFfZWRpdG9yIjtzOjg6ImRvY3VtZW50IjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6MTI6ImJvYXJkX2xtQ2gxOCI7fX0=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6NDp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjE5OiJpbnNlcnRfbWVkaWFfZWRpdG9yIjtzOjg6ImRvY3VtZW50IjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjEyOiJydW5fc2VsZWN0ZWQiO3M6ODoibWlkX2xpc3QiO2E6MTp7aTowO3M6MTI6ImJvYXJkX2xtQ2gxOCI7fX0=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "addon_write_insert_media";
$addon_time_log->called_extension = "addon_write_insert_media";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'no_run_selected';
$ml = array(
);
$addon_file = './addons/block_control/block_control.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6ODp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjg6Im5vX2NsaWNrIjtzOjE6InkiO3M6Nzoibm9fZHJhZyI7czoxOiJ5IjtzOjk6Im5vX3NlbGVjdCI7czoxOiJ5IjtzOjE0OiJhZG1pbl9ub19jbGljayI7czoxOiJuIjtzOjEzOiJhZG1pbl9ub19kcmFnIjtzOjE6Im4iO3M6MTU6ImFkbWluX25vX3NlbGVjdCI7czoxOiJ5IjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6ODp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjg6Im5vX2NsaWNrIjtzOjE6InkiO3M6Nzoibm9fZHJhZyI7czoxOiJ5IjtzOjk6Im5vX3NlbGVjdCI7czoxOiJ5IjtzOjE0OiJhZG1pbl9ub19jbGljayI7czoxOiJuIjtzOjEzOiJhZG1pbl9ub19kcmFnIjtzOjE6Im4iO3M6MTU6ImFkbWluX25vX3NlbGVjdCI7czoxOiJ5IjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "block_control";
$addon_time_log->called_extension = "block_control";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);