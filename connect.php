<?php
/**
*checks the connection to the local install of Mysql
*/

require_once('db.php')
if (!$dbconn = mysql_connect(DB_HOST, DB_USER, DB_PW)){
ECHO 'COULD NOT CONNECT TO MYSQL ON'.DB_HOST."\n";
exit;
}

echo 'connected to mysql on'.BD_HOST."\n";

if(!mysql_select_db(DB_NAME.$dbconn)){
echo 'could not use database'.DB_NAME."\n";
echo mysql_error()."\n";
exit;
}

echo 'connected to database' . DB_NAME."\n";
?>