<?php 
session_start();

include 'duanweb_connect.php';

$sql = "select * from tbcauhoi inner join tbdethi on tbcauhoi.madt = tbdethi.madt inner join tbmonhoc on tbdethi.mamh = tbmonhoc.mamh";
$kq = mysqli_query($kn,$sql);
if( isset($_REQUEST["mach"]) && isset($_REQUEST["dapan"]))
{
	$mch = $_REQUEST['mach'];
	$da = $_REQUEST['dapan'];
}

while($row = mysqli_fetch_array($kq)){
	if($mch == $row['mach']){
		if(($row['dapand'] == $da)){
			$mch1 = $row['mach'];
			if(isset($_SESSION['"$mch1"']) && $_SESSION['"$mch1"'] == $row['mach'])
				break;
			echo $_SESSION['socaudung']++;
			$_SESSION['"$mch1"'] = $row['mach'];
		}
		else{
			if(isset($_SESSION['"$mch1"']) && $_SESSION['"$mch1"'] == $row['mach']){
				$_SESSION['socaudung']--;
				unset($_SESSION['"$mch1"']);
				//break;
			}
		}
	}
}

mysqli_close($kn);
?>
