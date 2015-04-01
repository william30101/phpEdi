<?php

include ("/usr/share/apache2/htdocs/configure.php");
include ("/usr/share/apache2/htdocs/connect_db.php");

$username=$_POST[username];
$password=$_POST[password];

$sql = "select * from login where username = '".$username."'";
$result = mysql_query($sql,$Link);
$row = mysql_fetch_array($result);

echo 'data = ' . $row["id"]."<br>";

if($row > 0){
	echo 'User Found  ';

	$sql2 = "UPDATE login SET password='$password' WHERE id='".$row["id"]."'";

	$result2 = mysql_query($sql2, $Link);

	if($result2)
	{
		echo 'change password success   ';
	}
	else
	{
		echo 'fail'."<br>";
	}

	echo 'waiting 3 seconds redirect to home page'."<br>";
	header("HTTP/1.1 301 Moved Permanently");
	header( "refresh:3; url=../indexadmin.php" );



}
else
{

		echo 'fail'."<br>";
		echo 'waiting 3 seconds redirect to change password page'."<br>";
		header("HTTP/1.1 301 Moved Permanently");
		header( "refresh:3; url=changepass.php" );

}



?>
