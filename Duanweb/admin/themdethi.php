<?php
session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
if(isset($_REQUEST["tench"]) && isset($_REQUEST["paa"]) && isset($_REQUEST["pab"]) && isset($_REQUEST["pac"]) && isset($_REQUEST["pad"]) && isset($_REQUEST["dad"]) && isset($_REQUEST["madt"]))
{
	$tench = $_REQUEST['tench'];
	$paa = $_REQUEST['paa'];
	$pab = $_REQUEST['pab'];
	$pac = $_REQUEST['pac'];
	$pad = $_REQUEST['pad'];
	$dad = $_REQUEST['dad'];
	$madt = $_REQUEST['madt'];
}
	$sql01 = "insert into tbcauhoi (tencauhoi,A,B,C,D,dapand,madt) values('".$tench."','".$paa."','".$pab."','".$pac."','".$pad."','".$dad."','".$madt."')";
	$kq02 = mysqli_query($kn,$sql01);
	echo $tench+$paa+$pab+$pac+$pad+$dad+$madt;
	mysqli_close($kn);
?>