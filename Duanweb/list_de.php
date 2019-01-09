
<?php

if(isset($_SESSION['user1']) && $_SESSION['user1']!=null)
	$user = 1;
else
	$user = 0;
include "duanweb_connect.php";
$sql = "select DISTINCT tbdethi.mamh, tbtendt.tendt, tbdethi.luotthi, tbdethi.thoigian, tbdethi.dt_socau from tbdethi inner join tbtendt on tbtendt.madt = tbdethi.madt inner join tbmonhoc on tbdethi.mamh = tbmonhoc.mamh";
$kq = mysqli_query($kn,$sql);
$dem = 0;
while($row = mysqli_fetch_array($kq)){
	echo '<a id="dsd'.$dem++.'" class="dsd" href="#" onclick="chondethi('.$dem.','.$user.');">'.$row['tendt'];
	echo '<div style="font-size: 13px;
	font-weight: 600;">
	<span class="tdmau2"><i class="glyphicon glyphicon-time"></i> &nbsp;'.$row['thoigian'].' phút &nbsp;&nbsp;</span>
	<span class="tdmau1"><i class="glyphicon glyphicon-stats"></i> &nbsp;'.$row['luotthi'].' lượt thi &nbsp;&nbsp;</span>
	<span class="tdmau3" id="icon1"><i class="w3-xxlarge fa fa-question-circle-o"></i> &nbsp;'.$row['dt_socau'].' câu &nbsp;&nbsp;</span>
	</div>';
	echo '</a>';
}
?>