<?php
defined('server') ? null : define("server", "sql5.freesqldatabase.com");
defined('user') ? null : define ("user", "sql5439255") ;
defined('pass') ? null : define("pass","R4LPLdWd1Z");
defined('database_name') ? null : define("database_name", "sql5439255") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>
