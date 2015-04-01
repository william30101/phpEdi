<?php

include ("/usr/share/apache2/htdocs/configure.php");
include ("/usr/share/apache2/htdocs/connect_db.php");

if (isset($_POST['host']))
{
	foreach ($_POST['host'] as $id)
	{
	    echo 'delete ID = '.$id. '<br>';

		// sql to delete a record
		$sql = "DELETE FROM login WHERE id='$id'";

		$result = mysql_query($sql, $Link);

		//if ($mysql_query($sql,$Link) == TRUE) {

		echo "delete user success <br>";
		echo 'waiting 3 seconds redirect to home page'."\r\n";


	}

	mysql_close($Link);

	header("HTTP/1.1 301 Moved Permanently");
	header( "refresh:3; url=../indexadmin.php" );

}
else
{
	echo 'you did not check any numbers';
}


?>
