<?php
	session_start();
	$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
	if(!isset($_SESSION['user2'])){
   		header("Location: login.php");
	}

	if(isset($_REQUEST["mach"]) && isset($_REQUEST["tench"]) && isset($_REQUEST["paa"]) && isset($_REQUEST["pab"]) && isset($_REQUEST["pac"]) && isset($_REQUEST["pad"]) && isset($_REQUEST["dad"]))
	{
		$mach = $_REQUEST['mach'];
		$tech = $_REQUEST['tench'];
		$paa = $_REQUEST['paa'];
		$pab = $_REQUEST['pab'];
		$pac = $_REQUEST['pac'];
		$pad = $_REQUEST['pad'];
		$dad = $_REQUEST['dad'];

	}
	echo $mach;
	$sql = "update tbcauhoi set tencauhoi='".$tech."', A='".$paa."', B='".$pab."', C='".$pac."', D='".$pad."', dapand='".$dad."' where mach=".$mach;
	mysqli_query($kn,$sql);
	mysqli_close($kn);
?>