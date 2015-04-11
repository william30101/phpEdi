<?php

#for auto refresh page once
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate'); // HTTP/1.1
header( 'Cache-Control: post-check=0, pre-check=0', false );
header( 'Pragma: no-cache' );

#echo '<br>';
#echo exec('whoami');
#echo '<br>';

$started = $_GET['started'];
echo "script status = ".$started;
if ($started == 'start')
	exec("/usr/bin/sudo /usr/bin/python /home/root/serialtest.py");
elseif ($started == 'stop')
	exec("/usr/bin/sudo /usr/bin/python /home/root/processkill.py");



//$output = array();
//exec("/usr/bin/sudo /usr/bin/python /home/daemon/gpioout.py $ledValue 2>&1", $output, $ret_code);


//var_dump( $output);
//echo $ret_code;


echo 'waiting 1 seconds redirect to home page'."<br>";
header("HTTP/1.1 301 Moved Permanently");
header( "refresh:3; url=../indexadmin.php" );


?>

