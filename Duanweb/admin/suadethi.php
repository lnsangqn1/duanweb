<?php
	session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
if(isset($_REQUEST["madt"]))
{
	$madt = $_REQUEST['madt'];
}
$sql001 = "select * from tbdethi as dt inner join tbtendt as tdt on tdt.madt=dt.madt inner join tbmonhoc as mh on mh.mamh=dt.mamh where dt.madt='".$madt."'";
$dem=0;

$kq = mysqli_query($kn,$sql001);

while ($row = mysqli_fetch_array($kq)) {
	$dem++;
	echo '
	<div class="modal-body">
	<p style="margin: 0px!important;">Tên đề thi <input type="text" id="e_tendt'.$dem.'" name="e_tendt'.$dem.'" value="'.$row['tendt'].'"></p>
	<p style="margin: 0px!important;">Môn học 
	<select name="e_mh'.$dem.'" id="e_mh'.$dem.'">
	<option value="4">Vật lý</option>
	<option value="5">Toán học</option>
	<option value="2">Hóa học</option>
	<option value="1">Sinh học</option>
	<option value="3">Tiếng anh</option>
	</select></p>
	<p style="margin: 0px!important;">Thời gian <input type="number" id="e_tg'.$dem.'" name="e_tg'.$dem.'" value="'.$row["thoigian"].'"></p>
	</div>';
}
echo '<div class="modal-footer">
	<button type="button" onclick="capnhat('."'".$madt."'".');" name="e_sbm" class="btn btn-default">Cập nhật</button>
	</div>';
mysqli_close($kn);
?>