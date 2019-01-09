<?php 
	session_start();
	$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
	if(!isset($_SESSION['user2'])){
   		header("Location: login.php");
	}
	if(isset($_REQUEST["mach"]))
	{
		$mach = $_REQUEST['mach'];
	}
	$dem=0;
	$sql = "select * FROM tbcauhoi where tbcauhoi.mach=".$mach;
	$kq = mysqli_query($kn,$sql);

	while ($row = mysqli_fetch_array($kq)) {
		$dem++;
		echo '
		<div class="modal-body">
		<p style="margin: 0px!important;">Nộp dung câu hỏi <textarea id="e_tench'.$dem.'" name="e_tench'.$dem.'">'.$row['tencauhoi'].'</textarea></p>
		<p style="margin: 0px!important;">Phương án A 
			<input type="text" id="e_paa'.$dem.'" name="e_paa'.$dem.'" value="'.$row['A'].'"/>
		</p>
		<p style="margin: 0px!important;">Phương án B 
			<input type="text" id="e_pab'.$dem.'" name="e_pab'.$dem.'" value="'.$row['B'].'"/>
		</p>
		<p style="margin: 0px!important;">Phương án C 
			<input type="text" id="e_pac'.$dem.'" name="e_pac'.$dem.'" value="'.$row['C'].'"/>
		</p>
		<p style="margin: 0px!important;">Phương án D 
			<input type="text" id="e_pad'.$dem.'" name="e_pad'.$dem.'" value="'.$row['D'].'"/>
		</p>
		<p style="margin: 0px!important;">';
		echo 'Đáp án đúng 
		<select name="e_dad'.$dem.'" id="e_dad'.$dem.'">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
		</select></p>
		</div>';
	}
	echo '<div class="modal-footer">
	<button type="button" onclick="capnhatch('."'".$mach."'".');" name="e_sbm" class="btn btn-default">Cập nhật</button>
	</div>';
	mysqli_close($kn);
?>