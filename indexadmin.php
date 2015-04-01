<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<script type="text/javascript">

function changepass() {
	window.location = "admin/changepass.php"
}

function createuser() {
	window.location = "admin/createuser.php"
}

function deleteuser() {
	window.location = "admin/deleteuser.php"
}

</script>

<div class="main">
<!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->

<form action="" method="POST">
<fieldset>
  <legend style="font-weight:bold;">Admin Interface</legend>
<div style="background-color:red;border:1px solid black;padding:10px;">

<input type='button' id='changePassBtn' value='ChangePassWord' onclick="changepass()" >
<input type='button' id='createUserBtn' value='CreateUser' onclick="createuser()" >

  <input type='button' id='deleteUserBtn' value='DeleteUser' onclick="deleteuser()" >

</div>
</fieldset>
</form>


<form action="viewdata.php" method="post">


<fieldset>
  <legend style="font-weight:bold;">Please Select sensor :
</legend>


<input type="submit" value="EC" name="ecbtn">
<input type="submit" value="PH" name="phbtn">
<input type="submit" value="TEMP" name="tempbtn">

</fieldset>

</form>
</body>
</html>
