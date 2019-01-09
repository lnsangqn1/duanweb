<?php
	session_start();
	$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
	if(!isset($_SESSION['user2'])){
   		header("Location: login.php");
	}
	if(isset($_REQUEST["mach"]))
	{
		$mach = $_REQUEST['mach'];
	}
	$sql = "delete from tbcauhoi where mach=".$mach;
	mysqli_query($kn,$sql);
	mysqli_close($kn);
?>