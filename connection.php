<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name =  "emasedb";
$conn = mysqli_connect($host, $user, $pass, $db_name);

mysqli_set_charset($conn,"utf8");

if($conn)
{
 //    	echo '<script language="javascript">';
	// echo 'alert ("connected")';
	// echo '';

}else{
	echo '';
	echo 'alert ("connection Error")';
	echo '';

}

?>