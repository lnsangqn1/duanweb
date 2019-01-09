<?php 
	session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
if(isset($_REQUEST["mamh"]) && isset($_REQUEST["matl"]) && isset($_REQUEST["tentl"]) && isset($_REQUEST["dl"]))
{
	$mamh = $_REQUEST['mamh'];
	$matl = $_REQUEST['matl'];
	$tentl = $_REQUEST['tentl'];
	$dl = $_REQUEST['dl'];
}
	$thaythe = str_replace(' ', '-', $tentl);
       // $kq = mysqli_query($kn,$sql);
	$bien = explode('tailieuontap/', $dl);
	$bien1 = end($bien);
	echo $bien1;
    $ten0 = explode('.',$dl);
    $ten = end($ten0);
  //  $ten1 = '../tailieuontap'."/".$_POST['e_mh'].'_'.$thaythe.".".$ten;
    $sang1 = 'duanweb/tailieuontap'."/".$mamh.'_'.$thaythe.".".$ten;
	$sql="update tbtailieu set tentl='".$tentl."', mamh='".$mamh."', duongdan='".$sang1."' where matl=".$matl;
	mysqli_query($kn,$sql);
    rename('../tailieuontap/'.$bien1, '../tailieuontap/'.$mamh.'_'.$thaythe.".".$ten);
    mysqli_close($kn);
 ?>