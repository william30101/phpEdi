<?php
//session_start(); // Starting Session
//$error=''; // Variable To Store Error Message
	////if (isset($_POST['submit'])) {
		////if (empty($_POST['username']) || empty($_POST['password'])) {
			////$error = "Username or Password is invalid";
		////}
	////else
	////{
		//// Define $username and $password
		//$username=$_POST['username'];
		//$password=$_POST['password'];
		//// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		//$connection = mysql_connect("localhost", "root", "");
		//// To protect MySQL injection for Security purpose
		//$username = stripslashes($username);
		//$password = stripslashes($password);
		//$username = mysql_real_escape_string($username);
		//$password = mysql_real_escape_string($password);
		//// Selecting Database
		//$db = mysql_select_db("SensorDb", $connection);
		//// SQL query to fetch information of registerd users and finds user match.
		//$query = mysql_query("select * from login where password='".$password."' AND username='".$username."'", $connection);
		//$rows = mysql_num_rows($query);
		////if ($rows == 1) {
			////echo 'User Found';
			////$_SESSION['login_user']=$username; // Initializing Session
			////header("location: indexadmin.php"); // Redirecting To Other Page
		////} else {
			////echo ''
			////$error = "Username or Password is invalid";
		////}
		//if ($rows == 0) {
			//echo 'User Not Found';
			//$error = "Username or Password is invalid";

		//} else {
			//echo 'User Found';
			//$_SESSION['login_user']=$username; // Initializing Session
			//header("location: indexadmin.php"); // Redirecting To Other Page

		//}

	//mysql_close($connection); // Closing Connection
	////}
//}


session_start(); // Starting Session


$hostname_localhost ="localhost";
$database_localhost ="SensorDb";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost);

mysql_select_db($database_localhost, $localhost);

$username = $_POST['username'];
$password = $_POST['password'];
$query_search = "select * from login where username = '".$username."' AND password = '".$password. "'";
$query_exec = mysql_query($query_search) or die(mysql_error());
$rows = mysql_num_rows($query_exec);
//echo $rows;
 if($rows == 0) {
 echo "No Such User Found";

 }
 else  {
	echo "User Found";
	$_SESSION['login_user']=$username; // Initializing Session

}


	mysql_close($localhost); // Closing Connection


?>
