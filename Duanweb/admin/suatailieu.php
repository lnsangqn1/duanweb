<?php 
	session_start();
    if(!isset($_SESSION['user2'])){
        header("Location: login.php");
    }
	$kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");
    if(isset($_REQUEST["matl"]) && isset($_REQUEST['dl']))
{
	$matl = $_REQUEST['matl'];
	$dl = $_REQUEST['dl'];
}
    $sql1 = "select * from tbtailieu where matl=".$matl;
    // $thaythe = str_replace(' ', '-', $_POST['e_tentl']);
    //    // $kq = mysqli_query($kn,$sql);
    // $ten0 = explode(".",$_GLOBALS['path']);
    // $ten = end($ten0);
    // $ten1 = '../tailieuontap'."/".$_POST['e_mh'].'_'.$thaythe.".".$ten;
    // $sang1 = 'duanweb/tailieuontap'."/".$_POST['e_mh'].'_'.$thaythe.".".$ten;
    // $sql="update tbtailieu set tentl='".$_POST['e_tentl']."', mamh='".$_POST['e_mh']."', duongdan='".$sang1."'";
    // mysqli_query($kn,$sql);
    // rename('../tailieuontap/sang1.txt', '../tailieuontap/'.$_POST['e_mh'].'_'.$thaythe.".".$ten);
    $dem=0;
    $kq = mysqli_query($kn,$sql1);
    while ($row = mysqli_fetch_array($kq)) {
    	$dem++;
    	echo '
    	<div class="modal-body">
    	<p style="margin: 0px!important;">Môn học 
    	<select name="e_mh'.$dem.'" id="e_mh'.$dem.'">
    	<option value="4">Vật lý</option>
    	<option value="5">Toán học</option>
    	<option value="2">Hóa học</option>
    	<option value="1">Sinh học</option>
    	<option value="3">Tiếng anh</option>
    	</select></p>
    	<p style="margin: 0px!important;">Tên tài liệu <input type="text" id="e_tentl'.$dem.'" name="e_tentl'.$dem.'" value="'.$row["tentl"].'"></p>
    	</div>';
    }
echo '<div class="modal-footer">
	<button type="button" onclick="capnhat('."'".$matl."'".','."'".$dl."'".');" name="e_sbm" class="btn btn-default">Cập nhật</button>
	</div>';
mysqli_close($kn);
 ?>