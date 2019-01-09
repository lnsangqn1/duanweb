<?php session_start();
include 'duanweb_connect.php';
if(isset($_REQUEST["n"])){
	$checked = $_REQUEST["n"];
}
$diem = round((10/$_SESSION['socau'])*$_SESSION['socaudung'],2);
$sql = "select * from tbketqua inner join tbthanhvien on tbketqua.user = tbthanhvien.user inner join tbdethi on tbdethi.madt = tbketqua.madt";
$kq0 = mysqli_query($kn,$sql);
$scd = $checked-$_SESSION['socaudung'];
while($row = mysqli_fetch_array($kq0)){
	if($_SESSION['tendted'] == $row['madt'] && $_SESSION['user1'] == $row['user']){
		$sql1 = "update tbketqua set diem=".$diem.", socau=".$_SESSION['socau'].", socautl=".$checked.", socaudung=".$_SESSION['socaudung'].", socausai=".$scd." where madt='".$_SESSION['tendted']."' and user='".$_SESSION['user1']."'";
		$kq = mysqli_query($kn,$sql1);
		echo $diem;
		mysqli_close($kn);
		return;
	}
}
$sql1 = "insert into tbketqua(user,diem,madt,tendt,socau,socautl,socaudung,socausai) values ('".$_SESSION['user1']."',".$diem.",'".$_SESSION['tendted']."','".$_SESSION['tendt1']."',".$_SESSION['socau'].",".$checked.",".$_SESSION['socaudung'].",".($checked-$_SESSION['socaudung']).")";
$kq = mysqli_query($kn,$sql1);
//$sql12 = "select tbdethi.madt from tbdethi inner join tbmonhoc on tbmonhoc.mamh = tbdethi.mamh";
//$kq1 = mysqli_query($kn,$sql12);

//while($row = mysqli_fetch_array($kq1)){

	//if($_SESSION['tendted'] == $row['madt']){
		//$sql22 = "update tbdethi set luotthi=luotthi+1";
		//$kq11 = mysqli_query($kn,$sql22);
	//break;
	//}
//}

echo $diem;
mysqli_close($kn);
?>