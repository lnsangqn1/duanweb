<?php 
session_start();
include 'duanweb_connect.php';

$sql = "select * from tbcauhoi inner join tbdethi on tbcauhoi.madt = tbdethi.madt inner join tbmonhoc on tbdethi.mamh = tbmonhoc.mamh";
$kq = mysqli_query($kn,$sql);
while($row = mysqli_fetch_array($kq)){
	if($_SESSION['tendted'] == $row['madt']){
		echo $row['dapand'];
	}
}


 ?>