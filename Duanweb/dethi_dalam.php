<?php 

include 'duanweb_connect.php';
$sql = "select * from tbketqua as kq inner join tbdethi as dt on kq.madt=dt.madt inner join tbthanhvien as tv on tv.user=kq.user where kq.user='".$_SESSION['user1']."'";
$kq = mysqli_query($kn,$sql);
$dem=0;
while($row = mysqli_fetch_array($kq)){
	echo '<a id="dsd'.$dem++.'" class="dsd" style="color:#629ede;width: 27.93em;text-align: center;">'.$row['tendt'];
	echo '<div style="font-size: 13px;
	font-weight: 600;">
	<span class="tdmau2"><i class="glyphicon glyphicon-time"></i> &nbsp;'.$row['thoigian'].' phút &nbsp;&nbsp;</span>
	<span class="tdmau1"><i class="glyphicon glyphicon-stats"></i> &nbsp;'.$row['luotthi'].' lượt thi &nbsp;&nbsp;</span>
	<span class="tdmau3" id="icon1"><i class="w3-xxlarge fa fa-question-circle-o"></i> &nbsp;'.$row['dt_socau'].' câu &nbsp;&nbsp;</span>
	</div>';
	echo '<div style="display: inline-flex;"><span style="color: #999999;">Điểm |'.$row['diem'].'|</span style="color: #FE6C88;"><span style="color: #f1c40f;">Số câu trả lời |'.$row['socautl'].'|</span><span style="color: #3B3B3B;">Số câu đúng |'.$row['socaudung'].'|</span><span>Số câu sai |'.$row['socausai'].'|</span></div>';
	echo '</a>';
}
?>