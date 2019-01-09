<?php
session_start();
if(!isset($_SESSION['user1'])){
	return;
}
include "../Duanweb/duanweb_connect.php";
$sql = "select DISTINCT tbdethi.mamh, tbtendt.tendt, tbdethi.madt from tbdethi inner join tbtendt on tbtendt.madt = tbdethi.madt inner join tbmonhoc on tbdethi.mamh = tbmonhoc.mamh";
$kq = mysqli_query($kn,$sql);
if( isset($_REQUEST["dem1"]) )
{
	$de = $_REQUEST['dem1'];
//	echo "Welcome ". $name;
}
$bdem = 0;
while($rows = mysqli_fetch_array($kq)){
	$bdem++;
	if($de == $bdem){
		$_SESSION['tendted']=$rows['madt'];
		echo $rows['tendt'];
		break;
	}
}
mysqli_close($kn);
?>