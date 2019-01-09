<?php 
	session_start();
	include 'duanweb_connect.php';
	$sql22 = "update tbdethi set luotthi=luotthi+1 where madt='".$_SESSION['tendted']."'";
	$kq11 = mysqli_query($kn,$sql22);
?>