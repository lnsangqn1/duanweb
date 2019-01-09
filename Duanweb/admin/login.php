<?php
	session_start();
	$thongbao='';
	if(isset($_POST['btn-dn'])){
		if(empty($_POST['user']) || empty($_POST['pass'])){
			$thongbao = 'Tài khoản hoặc mật khẩu không được để trống';
		}
		else{
		
			$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
			$sql = "select * from tbthanhvien where user='".$_POST['user']."' and pass='".md5($_POST['pass'])."' and level=1";
			$kq = mysqli_query($kn,$sql);
			$dem = mysqli_num_rows($kq);
			if($dem>0){
				$_SESSION['user2'] = $_POST['user'];
				header("Location: index.php");
			}
			else{
				$thongbao = 'Tài khoản hoặc mật khẩu không đúng';
			}
		}
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 	*{
 		margin: 0px;
 		padding: 0px;
 	}	
 	.form1{
 		text-align: center;
 	}
 		.form-dn{
 			width: 30%;
 			text-align: center;
 			box-shadow: 0px 0px 1px 3px #333;
 			margin: auto;
 			margin-top: 5em;
 			padding: 2em;
 		}
 	</style>
 </head>
 <body>
 	<div id="form1">
 		<form method="post" class="form-dn">
 			<div>
 				Username: <input type="text" name="user">
 			</div>
 			<div>
 				Password: <input type="Password" name="pass">
 			</div>
 			<input type="submit" name="btn-dn" value="Đăng nhập"><br>
 			<?php echo $thongbao; ?>
 		</form>
 	</div>
 </body>
 </html>