<?php 
	session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
if(isset($_REQUEST["tendt"]) && isset($_REQUEST["mamh"]) && isset($_REQUEST["tg"]) && isset($_REQUEST["madt1"]))
{
	$madt1 = $_REQUEST['madt1'];
	$tendt = $_REQUEST['tendt'];
	$mamh = $_REQUEST['mamh'];
	$tg = $_REQUEST['tg'];

}
	$sql = "update tbtendt set tendt='".$tendt."' where madt='".$madt1."'";
	mysqli_query($kn,$sql);
	$sql1 = "update tbdethi set thoigian=".$tg." where madt='".$madt1."'";
	mysqli_query($kn,$sql1);
	$sql2 = "update tbdethi set mamh='".$mamh."' where tbdethi.madt='".$madt1."'";
	mysqli_query($kn,$sql2);
    mysqli_close($kn);
?>