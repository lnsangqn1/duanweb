<?php
	session_start();
	if(!isset($_SESSION['user2'])){
		header("Location: login.php");
	}
	$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
	if(isset($_REQUEST["user"]) && isset($_REQUEST["level"])){
		$user = $_REQUEST['user'];
		$level = $_REQUEST['level'];
	}

	$sql = "update tbthanhvien set level=".$level." where user='".$user."'";
	mysqli_query($kn,$sql);
	mysqli_close($kn);
?>