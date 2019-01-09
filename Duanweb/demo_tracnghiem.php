
<?php 
	include "./connect.php";

?>

<head>
	<style type="text/css">
		.container1 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default radio button */
.container1 input {
    position: absolute;
    opacity: 0;
}

/* Create a custom radio button */
.checkmark1 {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark1 {
    background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container1 input:checked ~ .checkmark1 {
    background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark1:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the indicator (dot/circle) when checked */
.container1 input:checked ~ .checkmark1:after {
    display: block;
}

/* Style the indicator (dot/circle) */
.container1 .checkmark1:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
	</style>
</head>
<body>
<form method="post" action>
<?php
	$sql = "select a.id,a.tencauhoi,b.A,b.B,b.C,b.D from monhoa_cauhoi as a inner join monhoa_dapan as b where a.id = b.cauhoiid";
	$kq = mysqli_query($kn,$sql);	
 ?>
 <?php 
while($row = mysqli_fetch_array($kq)){
		echo '<i style="font-weight: bold; text-decoration: underline">';
		echo 'Câu '.$row['id'];
		echo '</i>';
		echo ': ';
	echo $row['tencauhoi'].'</br>';
  ?>
  <label class="container1">
 <input type="radio" name="<?php echo $row['id']; ?>" value="A" />A. <?php echo $row['A'].'</br>';?>
 <span class="checkmark1"></span>
</label>

 <label class="container1">
 <input type="radio" name="<?php echo $row['id']; ?>" value="B">B. <?php echo $row['B'].'</br>'; ?>
 <span class="checkmark1"></span>
 </label>

 <label class="container1">
 <input type="radio" name="<?php echo $row['id']; ?>" value="C">C. <?php echo $row['C'].'</br>'; ?>
 <span class="checkmark1"></span>
</label>

 <label class="container1">
 <input type="radio" name="<?php echo $row['id']; ?>" value="D">D. <?php echo $row['D'].'</br>'; ?>
 <span class="checkmark1"></span>
 </label>
 <?php } 
	if(isset($_POST['gui'])){
		$arr = $_POST;
		$dung = 0;
		$sai = 4;
		foreach ($arr as $key => $value) {
			if(is_numeric($key)){
			//	echo $key.'|'.$value.'<br>';
				$sql2 = "select dapandung from monhoa_cauhoi where id = {$key} limit 1";
				$kq1 = mysqli_query($kn,$sql2);
				$dad = mysqli_fetch_array($kq1);
				if($dad['dapandung'] == $value){
					$dung++;
					$sai--;
					echo "Câu {$key} đúng!<br>";
				}else{
					echo "Câu {$key} sai!<br>";
				}
			}
		}
		echo "Có $dung câu đúng và $sai câu sai<br>";
	}
 ?>
					<input type="submit" name="gui" value="Nộp bài">

</form>
</body>
