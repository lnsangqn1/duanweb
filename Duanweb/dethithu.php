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
$sql = "select tdt.tendt, dt.mamh, dt.luotthi, dt.thoigian, dt.dt_socau from tbtendt as tdt inner join tbdethi as dt on tdt.madt = dt.madt inner join tbmonhoc as mh on mh.mamh = dt.mamh where mh.mamh = $mmh";
$kq = mysqli_query($kn, $sql);
$dem=0;
while($row = mysqli_fetch_array($kq)){
	echo '<a id="dsd'.$row['mamh'].'" class="dsd" href="#" onclick="chondethi('.$row['mamh'].','.$user.');">'.$row['tendt'].'<div style="font-size: 13px;
	font-weight: 600;">
	<span class="tdmau2"><i class="glyphicon glyphicon-time"></i> &nbsp;'.$row['thoigian'].' phút &nbsp;&nbsp;</span>
	<span class="tdmau1"><i class="glyphicon glyphicon-stats"></i> &nbsp;'.$row['luotthi'].' lượt thi &nbsp;&nbsp;</span>
	<span class="tdmau3" id="icon1"><i class="w3-xxlarge fa fa-question-circle-o"></i> &nbsp;'.$row['dt_socau'].' câu &nbsp;&nbsp;</span>
	</div></a>';
}

?>