<?php
session_start();
include 'duanweb_connect.php';

$sql = "select * from tbketqua inner join tbthanhvien on tbketqua.user=tbthanhvien.user where madt='".$_SESSION['tendted']."' order by diem DESC";
$kq = mysqli_query($kn,$sql);
$stt = 0;

while($row = mysqli_fetch_array($kq)){
	$stt++;
	echo '<div style="display: inline-flex;padding-top: 1em;"><span class="bangdiem tdmau'.$stt.'" id="stt1">'.$stt.'</span><span class="bangdiem" id="user1" style="width: 9em;">'.$row['fullname'].' ('.$row['user'].')</span><span class="bangdiem" id="diem1"><span class="tdmau'.$stt.'">'.$row['socaudung'].'</span>/'.$row['socau'].'</span></div><br>';
}
mysqli_close($kn);
?>