<?php

include ("/usr/share/apache2/htdocs/configure.php");
include ("/usr/share/apache2/htdocs/connect_db.php");

$username=$_POST[username];
$password=$_POST[password];

$query_search = "select username from login where username = '".$username."'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);

if($rows > 0){
	echo 'User Found <br>';
	echo 'create fail <br>';
	echo 'waiting 3 seconds redirect to create user page<br>';
	header("HTTP/1.1 301 Moved Permanently");
	header( "refresh:3; url=createuser.php" );

}
else
{

	$sql = "INSERT INTO login(username,password)
		VALUES ('$username', '$password' )";

	$result = mysql_query($sql, $Link);

	if($result)
	{
		echo 'create user success   <br>';
		echo 'waiting 3 seconds redirect to home page'."<br>";
		header("HTTP/1.1 301 Moved Permanently");
		header( "refresh:3; url=../indexadmin.php" );
	}
	else
	{
		echo 'fail';
	}
}
?>
