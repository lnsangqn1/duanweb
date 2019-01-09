<?php
	session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
if(isset($_REQUEST["madt"]))
{
	$madt = $_REQUEST['madt'];
}
$sql = "delete from tbcauhoi where madt='".$madt."'";
mysqli_query($kn,$sql);
$sql1 = "delete from tbtendt where madt='".$madt."'";
mysqli_query($kn,$sql1);
$sql2 = "delete from tbdethi where madt'".$madt."'";
mysqli_query($kn,$sql2);
mysqli_close($kn);
?>