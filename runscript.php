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


$ledColor = $_GET['ledColor'];
$ledValue = $_GET['ledValue'];



//$output = array();
//exec("/usr/bin/sudo /usr/bin/python /home/daemon/gpioout.py $ledValue 2>&1", $output, $ret_code);
echo $ledColor.' led value is '.$ledValue.'<br>';


//var_dump( $output);
//echo $ret_code;
exec("/usr/bin/sudo /usr/bin/python /home/daemon/gpioout.py '$ledColor' '$ledValue'");


echo 'waiting 1 seconds redirect to home page'."<br>";
header("HTTP/1.1 301 Moved Permanently");
header( "refresh:3; url=../indexadmin.php" );


?>

<!-- <script type="text/javascript">setTimeout("window.close();", 2000);</script> -->


<html>
<head>
<script type='text/javascript'>

//(function()
//{
  //if( window.localStorage )
  //{
    //if( !localStorage.getItem( 'firstLoad' ) )
    //{
      //localStorage[ 'firstLoad' ] = true;
      //window.location.reload();
    //}
    //else
    //{

      //localStorage.removeItem( 'firstLoad' );
    //}
  //}
//})();

</script>


</head>
<body>
</body>
</html>
