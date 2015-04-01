<?php
	include('session.php');

?>


<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<script type="text/javascript">

function changepass() {
	window.location = "changepass.php"
}

function createuser() {
	window.location = "createuser.php"
}

function deleteuser() {
	window.location = "deleteuser.php"
}

</script>

<div class="main">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
<form action="" method="post">
<?php
	if($login_permit==true) {
?>
        <input type='button' id='changePassBtn' value='ChangePassWord' onclick="changepass()" >
        <input type='button' id='createUserBtn' value='CreateUser' onclick="createuser()" >
        <input type='button' id='deleteUserBtn' value='DeleteUser' onclick="deleteuser()" >

<?php
    }
?>
</form>


<form action="viewdata.php" method="post">

Please Select sensor name :

<input type="submit" value="EC" name="ecbtn">
<input type="submit" value="PH" name="phbtn">
<input type="submit" value="TEMP" name="tempbtn">

</form>
</body>
</html>
