<?php
$Link = mysql_connect($cfgDB_HOST . ":" . $cfgDB_PORT, $cfgDB_USERNAME, $cfgDB_PASSWORD);

mysql_select_db($cfgDB_NAME, $Link);
?>
