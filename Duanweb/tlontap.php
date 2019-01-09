<?php 
session_start();
if(isset($_SESSION['user1']) && $_SESSION['user1']!=null)
	$user = 1;
else
	$user = 0;
include 'duanweb_connect.php';
if( isset($_REQUEST["mamh"]) )
{
	$mmh = $_REQUEST['mamh'];	
//	echo "Welcome ". $name;
}
$sql = "select * from tbtailieu inner join tbmonhoc on tbtailieu.mamh=tbmonhoc.mamh where tbtailieu.mamh='".$mmh."'";
$kq = mysqli_query($kn, $sql);
$dem=0;
while($row = mysqli_fetch_array($kq)){
	echo '<a target=_blank id="dsd'.$row['mamh'].'" class="dsd" href="http://localhost/'.$row['duongdan'].'" >'.$row['tentl'].'</a>';
}

?>