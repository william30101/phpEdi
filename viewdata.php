<?php
include ("/usr/share/apache2/htdocs/configure.php");
include ("/usr/share/apache2/htdocs/connect_db.php");

$SensorDataArray = array();
$SensorTimeArray = array();

if (!is_null($_POST[ecbtn]))
{
	$SensorName=$_POST[ecbtn];
}

if (!is_null($_POST[phbtn]))
{
	$SensorName=$_POST[phbtn];

}

if (!is_null($_POST[tempbtn]))
{
	$SensorName=$_POST[tempbtn];

}

if (!is_null($_POST[earthbtn]))
{
	$SensorName=$_POST[earthbtn];

}


#$SensorName=$_POST[ecbtn];
echo ' sensor name = '.$SensorName."\n<br>";

$sql = "SELECT * from SENSORDATA WHERE SENSOR_NAME = '$SensorName' ";

$result = mysql_query($sql, $Link);

if($result)
{
	echo '<table border=2>';
	$fdnum = mysql_num_fields($result);
	echo 'success fdnum = '.$fdnum.'<br>';
	while ($row = mysql_fetch_array($result)) {
		array_push($SensorDataArray , $row["DATA"]);
		array_push($SensorTimeArray , $row["TIME"]);

		//$row["欄位名稱"]
		echo '<tr>';
			echo '<td>';
			echo "TIME=".$row["TIME"];
			echo '</td>';
			echo '<td>';
			echo "data=".$row["DATA"];
			echo '</td>';
		echo '</tr>';
	}

	echo '</table>';



}
else
{
	echo 'fail to read';
}


?>


<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

google.load('visualization', '1', {packages: ['corechart', 'line']});
google.setOnLoadCallback(drawLineColors);

function drawLineColors() {
      var data = new google.visualization.DataTable();
      var value = "<?php echo $SensorName;?>";
      var sensorDataArray = <?php echo JSON_encode($SensorDataArray); ?>;
      var sensorTimeArray = <?php echo JSON_encode($SensorTimeArray); ?>;

      var rows = [];
      var sensorData;
      var sensorTime;

      data.addColumn('string', 'X');
      data.addColumn('number', value);

//	for (var i in sensorDataArray) {
 	for (var i = 0; i < sensorDataArray.length ; i++) {
	  //alert(sensorDataArray[i]);
	  sensorData = parseFloat(sensorDataArray[i]);
	  sensorTime = sensorTimeArray[i];

	//data.addRows([i,sensorDataArray[i],100])
		rows.push([sensorTime,sensorData]);
	}


	data.addRows(rows);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'value'
        },
	autosize: true,
        colors: ['#a52714', '#097138']
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }

    </script>
  </head>

  <body>
	<input type="submit" name="backbtn" value="Home" onclick="javascript:location.href='indexadmin.php'" >
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>

