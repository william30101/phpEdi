<?php

$hostname_localhost ="localhost";
$database_localhost ="mydatabase";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost);

mysql_select_db($database_localhost, $localhost);

$username = $_POST['username'];
$password = $_POST['password'];
$query_search = "select * from tbl_user where username = '".$username."' AND password = '".$password. "'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 0) {
 echo "No Such User Found";
 }
 else  {
	echo "User Found";
}
?>
