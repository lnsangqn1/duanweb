<?php
	session_start();
    if(!isset($_SESSION['user2'])){
        header("Location: login.php");
    }
    $kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");

    if(isset($_REQUEST["user"]) && isset($_REQUEST["id"])){
		$user = $_REQUEST['user'];
		$id = $_REQUEST['id'];
	}
	//while($stt<=$user)
		$sql0 = "alter TABLE tbketqua DROP FOREIGN KEY fk_user";
		mysqli_query($kn,$sql0);
		$sql = "delete from tbthanhvien where tbthanhvien.user='".$user."'";
	mysqli_query($kn,$sql);
		$sql01 = "delete from tbketqua where tbketqua.user='".$user."'";
		mysqli_query($kn,$sql01);
	$sql1 = "alter TABLE tbketqua ADD CONSTRAINT fk_user FOREIGN KEY(user) REFERENCES tbthanhvien(user)";
	mysqli_query($kn,$sql1);
	mysqli_close($kn);
?>