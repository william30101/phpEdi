<html>
<body>
	<strong>Delete user</strong></p>

</body>
<html>


<?php
include ("/usr/share/apache2/htdocs/configure.php");
include ("/usr/share/apache2/htdocs/connect_db.php");

$host = array();

$sql = "SELECT * from login ";

$result = mysql_query($sql, $Link);

if($result)
{
	echo '<table border=2>';
	$fdnum = mysql_num_fields($result);

	echo '<form action="deleteusersql.php" method="POST"> ';
	$num_hosts = count($host);
	while ($row = mysql_fetch_array($result)) {

		//$row["欄位名稱"]
		echo '<tr>';
			echo '<td>';
			echo $row["username"];
			echo '</td>';
			echo '<td>';
			echo"<input type='checkbox' name='host[]' value='".$row["id"]."'";
			echo '</td>';
		echo '</tr>';
	}

	echo '</table>';
	echo "<input type='submit' value='submit'>";

	echo '</form> ';

}
else
{
	echo 'fail to read';
}



?>
<br>
	<input type="submit" name="backbtn" value="Home" onclick="javascript:location.href='../indexadmin.php'" >

