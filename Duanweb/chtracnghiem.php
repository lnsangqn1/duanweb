<?php 
session_start();
include 'duanweb_connect.php';

$sql = "select *,tbtendt.madt tb from tbcauhoi inner join tbdethi on tbcauhoi.madt = tbdethi.madt inner join tbmonhoc on tbdethi.mamh = tbmonhoc.mamh inner join tbtendt on tbdethi.madt = tbtendt.madt";
$kq = mysqli_query($kn,$sql);
$ch = 1;
$_SESSION['socau'] = 0;
while($row = mysqli_fetch_array($kq)){
	if($_SESSION['tendted'] == $row['madt']){
		$_SESSION['tendt1'] = $row['tendt'];
		$_SESSION['socau']++;
	echo '<div class="chtn" id="'.$row['mach'].'"><p><u style="font-family: sans-serif;font-size: 1.1em;font-weight: bold; color: #389bff;">Câu '.$ch++.':</u> '.$row['tencauhoi'].'</p>';
	echo '<div class="ddc"><span class=""></span> <input class="abc" name="'.$row['mach'].'" id="'.$row['mach'].'" type="radio"  size="" style="" value="A" onclick="click1('.$row['mach'].');"> <span class="ddd"><b style="color: #389bff">A.</b> '.$row['A'].'</span></div><br>';
	echo '<div class="ddc"><span class=""></span> <input class="abc" name="'.$row['mach'].'" id="'.$row['mach'].'" type="radio" readonly="readonly" size="" style="" value="B" onclick="click2('.$row['mach'].');"> <span class="ddd"><b style="color: #389bff">B.</b> '.$row['B'].'</span></div><br>';
	echo '<div class="ddc"><span class=""></span> <input class="abc" name="'.$row['mach'].'" id="'.$row['mach'].'" type="radio" readonly="readonly" size="" style="" value="C" onclick="click3('.$row['mach'].');"> <span class="ddd"><b style="color: #389bff">C.</b> '.$row['C'].'</span></div><br>';
	echo '<div  class="ddc"><span class=""></span> <input class="abc" name="'.$row['mach'].'" id="'.$row['mach'].'" type="radio" readonly="readonly" size="" style="" value="D" onclick="click4('.$row['mach'].');"> <span class="ddd"><b style="color: #389bff">D.</b> '.$row['D'].'</span></div><br><p class="tich">Đáp án đúng: '.$row['dapand'].'</p></div>';
	
	}
}
?>
