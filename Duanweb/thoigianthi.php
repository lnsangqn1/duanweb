<?php
session_start();
include 'duanweb_connect.php';
if( isset($_REQUEST["so"]) )
{
	$so = $_REQUEST['so'];
//	echo "Welcome ". $name;
}
$sql = "select * from tbdethi where madt='".$_SESSION['tendted']."'";
$kq = mysqli_query($kn,$sql);
if($row = mysqli_fetch_array($kq)){
	echo $row['thoigian']*$so;
}
mysqli_close($kn);
?>