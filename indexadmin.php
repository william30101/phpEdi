<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>


<div class="main">
<!-- <b id="logout"><a href="logout.php">Log Out</a></b> -->

<form action="" method="POST">
<fieldset>
  <legend style="font-weight:bold;">Admin Interface</legend>
<div style="background-color:red;border:1px solid black;padding:10px;">

<input type='button' id='changePassBtn' value='ChangePassWord' onclick="changepass()" >
<input type='button' id='createUserBtn' value='CreateUser' onclick="createuser()" >

  <input type='button' id='deleteUserBtn' value='DeleteUser' onclick="deleteuser()" >

  <input type='button' id='clearAllData' value='cleardata' onclick="clearalldata()" >


</div>
</fieldset>
</form>


<form action="" method="post">
<fieldset>
  <legend style="font-weight:bold;">Controll</legend>
<div style="background-color:blue;border:1px solid black;padding:10px;">

<font color="orange" size="3">Gpio8 : </font><br>
<input type="button" value="high" name="rLedOn" onclick="ledOnOff('red','high')">
<input type="button" value="low" name="rLedOff" onclick="ledOnOff('red','low')" >
<br>

<br>
<font color="orange" size="3">Gpio9 : </font><br>
<input type="button" value="high" name="rLedOn" onclick="ledOnOff('green','high')">
<input type="button" value="low" name="rLedOff" onclick="ledOnOff('green','low')" >


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
<input type="submit" value="EARTH" name="earthbtn">


</fieldset>

</form>

<form action="viewdata.php" method="post">

<fieldset>
  <legend style="font-weight:bold;">IP Cam</legend>
</legend>

 IP Address (ex:192.168.1.185): <input type="text"  name="ipcam" style="width: 115px;" maxlength="20" value="192.168.1.185"><br>
  <input type='button'  value="OpenIPCam" onclick="openIPCam()" >
</fieldset>

</form>

<form action="" method="post">
<fieldset>
  <legend style="font-weight:bold;">GetSensorData</legend>
</legend>

<div style="background-color:#CC00CC;border:1px solid black;padding:10px;">

<input type="button" value="start" onclick="runSerial('start')" >
<input type="button" value="stop" onclick="runSerial('stop')" >


</div>
</fieldset>

</form>



<script type="text/javascript">

function clearalldata(){
	alert("test");
	window.location = "createTable.php"
	//window.open("runscript.php?ledColor="+ledColor+"&ledValue="+ledValue);

}


function runSerial(started){
	window.open("runserial.php?started="+started);
}

function ledOnOff(ledColor,ledValue){
	//alert(ledColor);
	window.location = "runscript.php?ledColor="+ledColor+"&ledValue="+ledValue
	//window.open("runscript.php?ledColor="+ledColor+"&ledValue="+ledValue);

}


function changepass() {
	window.location = "admin/changepass.php"
}

function createuser() {
	window.location = "admin/createuser.php"
}

function deleteuser() {
	window.location = "admin/deleteuser.php"
}

function openIPCam()
{
	var head = "http://";
	var tail = "/mvideo.htm";
	var textAddress = document.getElementsByName('ipcam')[0].value;
	var ipAddress = head.concat(textAddress);
	ipAddress = ipAddress.concat(tail);
	alert(ipAddress);
	window.open(ipAddress,"IPCam","width=700,height=500,left=150,top=200,toolbar=0,status=0,");

}

</script>


</body>
</html>
