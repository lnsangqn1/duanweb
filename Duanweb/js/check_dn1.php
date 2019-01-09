<?php 
	session_start();
	if(isset($_SESSION['fullname1'])){
		echo $_SESSION['fullname1'];
		return;
	}	
//	if(isset($_POST['dn-uname']) && isset($_POST['dn-mk'])){
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
		$kn = mysqli_connect("localhost","root","","duanweb") or die("Ket noi csdl that bai");
		$dn_uname =  $_POST["dn-uname"];
		$dn_mk = $_POST["dn-mk"];
		mysqli_query($kn, "set names utf8");
		$sql = "select user, pass from tbthanhvien where user='$dn_uname' and pass='".md5($dn_mk)."'" or die("Truy van loi");
		$sql1 = "select * from tbthanhvien";
		$kq = mysqli_query($kn,$sql);
		$kq1 = mysqli_query($kn, $sql1);
		if(mysqli_num_rows($kq) > 0){
			
			while($row = mysqli_fetch_array($kq1)){
				if($row['user'] == $dn_uname){
				$_SESSION['user1'] = $row['user'];
				$_SESSION['fullname1'] = $row['fullname'];
				$_SESSION['email1'] = $row['email'];
				$_SESSION['phone1'] = $row['phone'];
				$_SESSION['pass1'] = $row['pass'];
				$_SESSION['socaudung'] = 0;
				setcookie("user1",$_SESSION['user1'],time()+60);
				echo $_SESSION['fullname1'];
				echo '<script type="text/javascript">var ad=1;</script>';
				//echo $_SESSION['fullname1'];
				return;
				}
			}
			//header("location: trangtonghop.php");
		}
		else{
			echo '<script type="text/javascript">var ad = 0;</script>';
			echo '<script type="text/javascript">document.getElementById("err_dn").innerHTML="Tài khoản hoặc mật khẩu không đúng";</script>';
			die();
		}
		mysqli_close($kn);
?>