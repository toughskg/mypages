<?php
ini_set('display_errors', 'off'); //test
$database['server'] = 'localhost';
$database['dbms'] = 'MySQL';
$database['database'] = 'toughskg';
$database['port'] = '3306';
$database['username'] = 'toughskg';
$database['password'] = 'shin8520';
$database['prefix'] = 'tc_';
$service['type'] = 'single';
$service['domain'] = 'mypages.co.kr';
$service['path'] = '';
$service['skin'] = 'periwinkle';
$service['favicon_daily_traffic'] = 10; // 10MB
$service['useSSL'] = false;  // Force SSL protocol (via https)
//$serviceURL = 'http://toughskg.cafe24.com/textcube' ; // for path of Skin, plugin and etc.
//$service['reader'] = true; // Use Textcube reader. You can set it to false if you do not use Textcube reader, and want to decrease DB load.
//$service['debugmode'] = true; // uncomment for debugging, e.g. displaying DB Query or Session info
//$service['pagecache'] = false; // uncomment if you want to disable page cache feature.
//$service['codecache'] = true; // uncomment if you want to enable code cache feature.
//$service['debug_session_dump'] = true; // session info debuging.
//$service['debug_rewrite_module'] = true; // rewrite handling module debuging.
//$service['session_cookie_path'] = $service['path']; // for avoiding spoiling other textcube's session id sharing root.
//$service['allowBlogVisibilitySetting'] = true; // Allow service users to change blog visibility.
?>