<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'youchan',
    'db_password' => 'b612b612',
    'db_database' => 'youchan',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'youchan',
      'db_password' => 'b612b612',
      'db_database' => 'youchan',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://youchan.woweb.net/xe',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'Y',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
  'use_sso' => 'N',
  'use_html5' => 'N',
  'admin_ip_list' => NULL,
);