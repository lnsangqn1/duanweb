<?php
	session_start();
    if(!isset($_SESSION['user2'])){
        header("Location: login.php");
    }
    $kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");

    if(isset($_REQUEST["user"])){
		$user = $_REQUEST['user'];
	}
	$sql = "select * from tbthanhvien where user='".$user."'";
	 $dem=0;
    $kq = mysqli_query($kn,$sql);
    while ($row = mysqli_fetch_array($kq)) {
    	$dem++;
    	echo '
    	<div class="modal-body">
    	<p style="margin: 0px!important;">Phân quyền cho người này là 
    	<select name="e_level'.$dem.'" id="e_level'.$dem.'">
    	<option value="0">Member</option>
    	<option value="1">Admin</option>
    	</select></p>
    	</div>';
    }
	echo '<div class="modal-footer">
	<button type="button" onclick="capnhat('."'".$user."'".');" name="e_sbm" class="btn btn-default">Cập nhật</button>
	</div>';
	mysqli_close($kn);
?>