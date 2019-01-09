	<meta charset="utf-8">
	<?php session_start(); 
	?>
	<meta charset="utf-8">
	<html>
	<link rel="stylesheet" type="text/css" href="https://glyphsearch.com/bower_components/ionicons/css/ionicons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<head><title>Ứng dụng ôn tập và thi trắc nghiệm cho học sinh THPT</title>
		<link rel="stylesheet" href="css/bootstrap.min.css.map" crossorigin="anonymous">
		<link rel="shortcut icon" href="img/cntt_icon.png" type="image/x-icon" />
		<script type="text/javascript" defer="defer" 
		src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">

	<link rel="stylesheet" href="css/font1-awesome.min.css">
	<script type="text/javascript" src="js/xldk0.js"></script>
	<script type="text/javascript" src="js/xldk2.js"></script>
	<script type="text/javascript" src="js/xldn1.js"></script>
	<script type="text/javascript" src="js/xlnd1.js"></script>

<script type="text/javascript">
	var bcd = 0;
	function hienthitt(){
		if(bcd == 0){
			bcd =1;
			$('.ttuser1').fadeIn(100);
		}
		else if(bcd == 1){
			bcd = 0;
			$('.ttuser1').fadeOut(100);
		}
	}
</script>
<style type=text/css>
/*==========Thanh header==========>>>START*/
*{
	margin: 0px;
	padding: 0px;
}
#icon1 > .w3-xxlarge{
	font-size: 15px!important;
}
.form-control:focus{color:none!important;background-color:none!important;border-color:none!important;outline:0!important;box-shadow:0 0 0 0rem rgba(0,0,0,0)!important;}
.input-group .form-control{
	float: none!important;
}
.form-control{
	box-shadow: none;
}
body {
	/*img/1.png*/
	background-image: url(img/1.png);	
	font-family: Open Sans;
		/*	
			-webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	  background-attachment: fixed; 
	  background-position: center;
	  */
	}
	#menu{
		position: fixed;
		z-index: 1000;
		height: 60px;
		width: 100%;
		display: flex;
		background-color: rgba(255,255,255,1);
		list-style-type: none;
		box-shadow: 0px 1px 4px 0px #bbb8b8;
		padding: 7px 0px 7px 0px;

	}
	.ddd>img{
		margin-top: -.5em;
	}
	#menu i{
		font-size: 20px;
		margin-right: -10px;
		color: #8f8f8f;
		transition: color .3s;
		-webkit-transition: color .3s;
	}

	.w3-xxlarge {
		font-size: 20px!important;

	}
	.w3-col > .w3-xxlarge {
		font-size: 40px!important;

	}
	#menu a{
		text-decoration: none;
		color: #949494;
	}
	#menu button, .button_nb{
		cursor: pointer;
		background-color: white;
		border: 1px solid rgba(94,176,240,.98);
		border-radius: 4px;
		color: #389bff;
		font-size: 11pt;
		font-family: sans-serif;
		width:100px;
		height: 35px;
	}
	.button_nb{
		background-color: rgba(255,255,255,0);
	}
	#menu button:hover, .button_nb:hover{
		background-color: rgba(94,176,240,.98);
		color: white;
		transition: all .4s ease-out;
		-webkit-transition: .4s;
		-moz-transition: .4s;
	}
	.input-group .form-control:not(:first-child){
		border-color: #eae9e9;
		border-left: 0px;
	}
	.input-group-addon{
		border-color: #eae9e9;
		background-color: white!important;
		
		transition: border-color 0.3s;
		-webkit-transition: border-color 0.3s;
	}
	.input-group{
		border-color: #389bff;
		color: #389bff;
		transition: all .3s;
		-webkit-transition: all .3s;
		margin-left: 1em;
	}
	#menu .input-group:hover{
		width: 350px!important;

	}
	#menu .input-group:hover i{
		color: #389bff;
	}
	#menu .input-group:hover .input-group-addon{
		border-color: #389bff;
	}

	#menu .input-group:hover .form-control{
		border-color: #389bff;
	}
	.aa{
		width: 15%!important;
	}
	.a3{
		flex-grow: 1;
		text-align: right;
		padding: 5px 90px;
	}
	.a1{
		flex-basis: 144px;
		padding: 0px 20px 0px 20px;
	}

	#nslt{
		font-size: 16px;
		border: 0px;
		font-weight: 500;
		outline: 0px;
		font-family: Open Sans;
		padding-top: 9px;
	}
	#nslt select{
		border: 0px;
		color: #999999;
		cursor: pointer;
		transition: all 0.4s;
		-webkit-transition: all 0.4s;
	}
	#nslt .cm{
		border: 0px!important;
		color: #999999!important;
		cursor: pointer!important;
		transition: all 0.4s!important;
		-webkit-transition: all 0.4s!important;
	}

	option{
		cursor: pointer;
		border: 0px;

	}
	.cm:focus{
		outline:0!important;
	}
	#menu select:hover{
		color: #212529;
	}
	
	select option .th:hover{
		background-color: #2ECC71;
		color: #2ECC71;
	}
	#slt option{
		font-weight:;
		padding: 5px 0px 5px 0px;
		transition: all .4s;
		-webkit-transition: all .4s;
		cursor: pointer;
	}
	.th:hover{
		background-color: #2ECC71;
		color: white;
	}
	#slt .th{
		color: #2ECC71;
	}
	#slt .vl{
		color: #F6A623;
	}
	#slt .hh{
		color: #A076C5;
	}
	#slt .sh{
		color: #389BFF;
	}
	#slt .ta{
		color: #dc6e7d;
	}
	#slt .tin{
		color: #5382b1;
	}
	#slt .nv{
		color: #9a823a;
	}
	.form-control::-webkit-input-placeholder{color:#868e96;opacity:.8;}
	#menu input{
		border: 0px!important;
	}
	.icon1{
		
		width: 34px!important;
		height: 34px!important;
		
	}
	.bv{
		padding-top: 6px;
		text-align: right;
		vertical-align: middle!important;
		flex-basis: 124px!important;
	}


	/*==========Nội dung===========>*/
	.icon-box{
		
		max-height: 100%;
		max-width: 100%;
		
	}
	.icon-box > img{
		max-width: 100%;
	}
	.toanh > img{
		background-color: #2ECC71 !important;
	}
	.vatl > img{
		background-color: #F6A623 !important;
	}
	.hoah > img{
		background-color: #A076C5 !important;
	}
	.sinhh > img{
		
		background-color: #389BFF !important;
	}
	.nguv > img{
		background-color: #9a823a !important;
	}
	.tienga > img{
		background-color: #dc6e7d !important;
	}
	.tinhoc > img{
		
		background-color: #5382b1 !important;
	}
	.cot > span{
		float: left;
	}
	.cot > div{
		padding: 20px 0px 0px 0px; 
		text-align: center;
	}
	.monhoc > a{
		font-family: "Segoe UI","Open sans","Helvatica Neue", sans-serif;
		color: #389bff;
		font-weight: bold;
		text-decoration: none;
	}
	.cot, .cot1{

		background-color: white;
		width:100%;
		height: 64px;
		margin: .5% 0% .5% 0%;
		box-shadow: 1px 1px 5px 0px #e6dddd;
		transition: all .5s;
		-webkit-transition: all .1s;
	}
	.cot:hover {
		box-shadow: 0px 0px 10px 1px #389bff;
		opacity: .8;
	}
	.monhoc > a:hover{
		opacity: .6!important;
	}
	.row1, .row2, .row3{
		clear: both;
	}
	.cott1{
		margin-left: 90px;
		width: 22%;
		margin-top: .5%;
		padding-right: 1em;
		transition: 1s all;
		-webkit-transition: 1s all;
		-moz-transition: 1s all;
	}
	#over1 {
		display: none;
		background: #000;
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0.8;
		z-index: 9999;
	}
	#over2 {
		display: none;
		background: #000;
		position: fixed;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0.8;
		z-index: 9999;
	}
	.register
	{
		height:auto;
		width:500px;
		padding-bottom:5px;
		display: none;
		overflow:hidden;
		position: absolute;
		z-index:99999;
		top:7%;
		left:32%;
		
	}
	.login
	{
		height:auto;
		width:500px;
		padding-bottom:5px;
		display: none;
		overflow:hidden;
		position: absolute;
		z-index:99999;
		top:20%;
		left:32%;
	}
	.w3-button{
		opacity: 0.9;
	}
	.w3-button:hover{
		color: #2196F3!important;
	}
	.resiger, #frmThamgia_dn{
		background-image: url(img/anh21.jpg);
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.w3-input{
		background-color: rgba(255,255,255,0.1);
		border-color: rgba(255,255,255,0.6)!important;
		color: rgba(255,255,255,0.9)!important;
	}
	.ttuser1{
		position: relative;
	}
	.ttuser > span > .w3-xxlarge{
		font-size: 13px!important;
		color: #389bff!important;
	}
	.ttuser > span{
		cursor: pointer;
	}
	.ttuser1 > ul{
		list-style: none; 
		background-color: rgba(61, 62, 64, 0.8);
		color: rgba(158, 201, 243, 0.9);
		border-radius: 3px;
		border: 1px #888181 solid;
		width: 170px;
		text-align: center;
	}
	.ttuser1 > ul > li> a{
		color: rgba(158, 201, 243, 0.9)!important;
	}
	.ttuser1 > ul > li{
		font-weight: 600;
		border-bottom: 1px #888181 solid;
	}
	.ttuser1{
		display: none;
	}
	.ttuser{
		display: none;
		line-height: 35px;
	}
	.tlon_dtt{
		display: none;
	}
	.cott1:hover .tlon_dtt{
		display: block;
	}
	.gach > a{
		text-decoration: none;
	}
	.noidung1{
		transition: 1s all;
		-webkit-transition: 1s all;
		-moz-transition: 1s all;
	}
	.noidung1{
		background-color: #fbfbfb!important;
	}
	.noidung2{
		width: 87%!important;
		height: !important;
		float: none!important;
		margin: auto!important;
		
	}
	.dx > a:hover{
		color: rgba(102, 171, 239, 0.9)!important;
	}
	.tttk > a:hover{
		color: rgba(102, 171, 239, 0.9)!important;
	}
	.dmk > a:hover{
		color: rgba(102, 171, 239, 0.9)!important;
	}
	.quaylai{
		display: none;
	}
	.quaylai1{
		display: block!important;
	}
	.dsd{
		display: inline-table;
		background-color: white;
		box-shadow: 1px 1px 5px 1px #dee1e8;
		padding: 1em;
		width: 19em;
		list-style: none;
		text-decoration: none!important;
		margin: 10px .5em;
		color: #629ede;
		border-left: 2px solid #389bff;
		border-right: 2px solid #389bff;
		border-radius: 15px;
	}
	.dtdl{
		width: none!important;
	}
	.thanh-footer{
		text-align: center;
		background: white;
		display: inline-table;
		border-top: 2px solid #389bff;
		
	}
	.noidung-ft{
		display: inline-table;
		text-align: center;
		float: ;
		padding: 1em 0px;
		margin: 1em 0px;
		font-size: 16px;
		width: 18.5em;
		color: #777897;
	}
	.dt{

	}
	.dethi_nb{
		font-size: 15px;font-weight: bold; vertical-align: middle;
	}
	.abc:hover{
		background-color: #99cbff;
		color: white;

	}

	.cba{
		background-color: #389bff!important;
		color: white!important;
	}
	.abc{
		margin-bottom: .5em;
		width: 3em; height: 1.3em;
		text-align: center;
		color: #495057;
		font-weight: 600;
		background-color: #fff;
		cursor: pointer;border: 1px solid #389bff;
		border-radius: 100px;

	}
	.chtn{
		position: relative;
		width: 45em;
		margin: auto;
		margin:2em 0px 2em 2em;
		background-color: white;
		box-shadow: 0px 0px 5px 1px #e8e8e8;
		border-right: 2px solid #389bff;
		padding: 1.5em;
		}.time_dn{
			display: none;
		}
		.modal-header .close{
			margin-top: -0.6em!important;
		}
		.tich{
			background-color: rgba(163, 203, 243, 0.5);
			font-weight: bold;
			padding: 7px;
			border-radius: 7px;
			color: #333;
			display: none;
		}
		.tich1{
			float: right;
		}.bangdiem{
			width: 7em;
		}#bangdiem0{
			display: none;
		}.tdmau1{
			color: #EB5C55;	/*màu hồng*/
		}.tdmau2{color: #2ECC71;}/*màu xanh lá*/
		.tdmau3{color: #F6A623;}/*màu xanh cam*/
		.tdmau4{color: #f1c40f;}
		.tdmau5{color: #A076C5;}
		.tdmau7{color: #389BFF;}
		.tdmau8{color: #007EE5;}
		#user1{
			text-align: left;
		}
		
	</style>
</head>
<body>
	<div id="menu">
		<!--=======================Icon trang chủ=====================>> -->
		<div class="aa bv">
			<a href=""><img src="img/cntt_icon.png" class="icon1"></a>
			<!--https://scontent.fsgn2-1.fna.fbcdn.net/v/t34.0-12/23515981_503968543310097_1621701842_n.png?oh=76038bafe65d6e8f3faec6f24ec245d8&oe=5A0AD1C2-->
		</div>
		<!--========================Chuyên mục========================>>-->
		<style type="text/css">
			.dropbtn {
   ;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
	border: 1px solid rgba(0,0,0,.15);
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 9em;
    border-radius: 5px;
    box-shadow: 0px 1px 7px 0px rgba(0,0,0,0.2);
    z-index: 10000000000;
}

/* Links inside the dropdown */
.dropdown-content a {

    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.cm1{
	transition: .3s;
	color: #2ECC71!important;
}
.cm2{transition: .3s;
		color: #F6A623!important;
	}
	.cm3{transition: .3s;
		color: #A076C5!important;
	}
	.cm4{transition: .3s;
		color: #389BFF!important;
	}
	.cm5{transition: .3s;
		color: #dc6e7d!important;
	}

/* Change color of dropdown links on hover */

.cm1:hover{
	border: none!important;
	border-top-left-radius: 5px;
	border-top-right-radius: 5px;
		background-color: #2ECC71;
		color: white!important;
	}

	.cm2:hover{
		border: none!important;
		background-color: #F6A623;
		color: white!important;
	}
	.cm3:hover{
		border: none!important;
		background-color: #A076C5;
		color: white!important;
	}
	.cm4:hover{
	border: none!important;
		background-color: #389BFF;
		color: white!important;
	}

	.cm5:hover{
		border: none!important;
		border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
		background-color: #dc6e7d;
		color: white!important;
	}
	#menu .cn{
		color: #212529!important;
	}
	#menu .cm:hover{
		color: #212529!important;
	}
/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
		</style>
		<script type="text/javascript">
		
			function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
	
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
		</script>
		
		<div class="aa a1 bb" id="nslt" >
			<!-- <select id="slt" class="cm">
				<option hidden="" value="" >Tài liệu ôn tập</i></option>
				<option  class="th" onclick="dethithu(5);"><span>Toán học</span></option>
				<option  class="vl" onclick="dethithu(4);">Vật lý</option>
				<option  class="hh" onclick="dethithu(2);">Hóa học</option>
				<option  class="sh" onclick="dethithu(1);">Sinh học</option>
				<option  class="ta" onclick="dethithu(3);">Tiếng anh</option>
			</select> -->
			<div class="dropdown" style="width: 7em;">
  <div onclick="myFunction()" class="dropbtn cm" id="slt" style="width: 8em;color: #999999;background-color: rgba(255,255,255,0);">Chọn môn học <span class="fa fa-caret-down"></span></div>
  <div id="myDropdown" class="dropdown-content">
    <a href="#" class="cm1" onclick="dethithu(5)"><span class="fa fa-calculator"></span> Toán học</a>
    <a href="#" class="cm2" onclick="dethithu(4)"><span class="ionicons ion-speedometer"></span> Vật Lý</a>
    <a href="#" class="cm3" onclick="dethithu(2)"><span class="ionicons ion-erlenmeyer-flask"></span> Hóa học</a>
    <a href="#" class="cm4" onclick="dethithu(1)"><span class="fa fa-thermometer-three-quarters"></span> Sinh học</a>
    <a href="#" class="cm5" onclick="dethithu(3)"><span class="fa fa-language"></span> Tiếng anh</a>
  </div>
</div>
		</div>
		<!-- Tìm kiếm -->
		<div class="input-group aa a2" id="aa2">	
			<div class="input-group-addon">
				<a href="#">
					<i class="icon w3-col w3-xxlarge fa fa-search"></i>
				</a>
			</div>
			<form action="" method="get" class="form-control">
				<input type="text" name="ip_search" class="form-control" id="exampleInputAmount" placeholder="Tìm kiếm...">	
			</form>
		</div>
		<!--=========================Button Đăng nhập & Đăng ký==============================>>-->
		<?php if(isset($_SESSION['fullname1']) && $_SESSION['fullname1']!=null){
			echo '<script type="text/javascript">$.post("../Duanweb/js/check_dn1.php",{"dn-uname":$("#dn-uname").val(),"dn-mk":$("#dn-mk").val()},function(data0){$("#err_dn").html(data0);$("span.abb").append(data0);
			$(".login-window").remove();$(".register-window").remove();$(".ttuser").fadeIn();
							//document.getElementById("frmThamgia_dn").submit();
			$("#over2, .login").fadeOut(300, function() {
				$("#over2").remove();
			});});</script>';
		} ?>
		<div class="aa a3" id="bt_dn_dk">

			<div class="ttuser" id="ttuser">
				Xin Chào  &nbsp;<span class="" onclick="hienthitt();" style="color: #389bff!important;"><span class="abb"></span> <i class="icon  w3-xxlarge fa fa-chevron-down"></i></span>
				<div class="ttuser1" align="right">
					<ul class="thongt">
						<li class="tttk" style="cursor: pointer;"><a href="../Duanweb/tttaikhoan.php">Thông tin tài khoản</a></li>
						<li class="dmk" style="cursor: pointer;"><a href="../Duanweb/doimatkhau.php">Đổi mật khẩu</a></li>
						<li class="dx"" style="cursor: pointer;"><a href="../Duanweb/js/dangxuat.php">Đăng xuất</a></li>
					</ul>
				</div>
			</div>
			<a href="#login-box" class="login-window"><button class="button">Đăng nhập</button></a>
			<a href="#register-box" class="register-window"><button class="button">Đăng ký</button></a>
		</div>
	</div>

	<!--HÌNH ẢNH GIỚI THIỆU-->
	<div class="container" style="max-width: 100%;padding-top: 4em;margin-bottom: 1em;">
		<h3><marquee style=";box-shadow: 1px 1px 3px 1px #716f79;color: white;padding: 3px 0px 3px 0px;background: rgba(36, 36, 41, 0.5);">Chào mừng các bạn đến với website ôn tập và thi trắc nghiệm cho học sinh THPT</marquee></h3>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				<div class="item active" align="center">
					<img src="img/tonghop1.jpg" alt="tonghop" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption" style="color: white">
						<h2>Ứng dụng website ôn tập và thi trắc nghiệm cho học sinh THPT</h2>
						<p>Tổng hợp đề thi trắc nghiệm của 5 môn học</p>
					</div>
				</div>

				<div class="item" align="center">
					<img src="img/vatly01.jpg" alt="Vật lý" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption">
						<h3>Vật lý</h3>
						<p style="">Tổng hợp đề thi trắc nghiệm môn Vật Lý THPT</p>
					</div>
				</div>
				
				<div class="item" align="center">
					<img src="img/hoahoc10.jpg" alt="Hóa học" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption">
						<h3>Hóa học</h3>
						<p>Tổng hợp đề thi trắc nghiệm môn Hóa THPT</p>
					</div>
				</div>

				<div class="item" align="center">
					<img src="img/sinhhoc011.jpg" alt="Sinh học" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption">
						<h3>Sinh học</h3>
						<p>Tổng hợp đề thi trắc nghiệm môn Sinh THPT</p>
					</div>
				</div>

				<div class="item" align="center">
					<img src="img/tienganh0.jpg" alt="Tiếng anh" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption">
						<h3>Tiếng anh</h3>
						<p>Tổng hợp đề thi trắc nghiệm môn Tiếng Anh THPT</p>
					</div>
				</div>

				<div class="item" align="center">
					<img src="img/toan0.png" alt="Toán" style="width:100%;height: 25em;background-size: cover;">
					<div class="carousel-caption">
						<h3>Toán học</h3>
						<p>Tổng hợp đề thi trắc nghiệm môn Toán THPT</p>
					</div>
				</div>
				
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<hr style="height: 1px; margin: 2em 90px 1em 90px; background-color: white;opacity: 1; box-shadow: 0px 0px 5px 1px #bcbec1;">
	<div class="aa3a"></div>	

	<div class="container">
		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog" style="margin-top: 3em;">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Bạn đã hoàn thành bài thi</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<p style="margin: 0px!important;">Tổng điểm đã đạt: <span class="tongdiem"></span></p>
						<p style="margin: 0px!important;">Trả lời: <span id="dalam"></span>/<span id="socau"></span> câu hỏi (Đúng <span id="dung"></span> câu, sai <span id="sai"></span> câu)</p>
						<i>Điểm thi của bạn đã được lưu</i>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Xem đáp án</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div align="left">
		<div class="row1">
			<!--=====================NỘI DUNG===================>>-->
			<div class="noidung" align="">
				<form action method="post" >
					<div class="noidung1" style="margin-bottom: 3em;border-left: 4px solid #389bff;float: right;opacity: 1;border-radius: 20px;box-shadow: 0px 0px 5px 2px #dadde0;width: 55%;margin-right: 90px;">
						<h4 align="left" style=";border-bottom: 1px solid #d2cdcd;padding: 12px 0px 12px 1em;margin: auto;color: #5a5d61;"><i class="fa fa-file-text-o"></i> <span class="tieude">Đề thi tổng hợp</span><div align="right" class="ql" style="float: right; padding-right: 1em;"><a class="quaylai" href="" style="list-style: none; text-decoration: none;" onclick="">Quay lại</a></div></h4>

						<div class="dt" id="dt" style="display: inline-flex;">
							

							<div class="dethi_nb" id="dethi_nb" style="">
								<?php include "list_de.php" ?>
							</div>
							<div class="dethi_nb" id="bangdiem0" style="width: 19em;border-top: #389bff;border-radius: 2px;float: ;margin: 15px 3em;background-color: white;border-top: 2px solid #389BFF;padding: 1em 0px;box-shadow: 0px 0px 10px 0.7px #eeeeee;">
								<div align="center" style="" id="">
								<div style="display: inline-flex;text-align: center;" align="center">
									<img src="img/trophy1.png" style="width: 22px;height: 22px"><span style="color: #F6A623;">&nbsp; Bảng điểm</span>
								</div>
								</div>
								<div id="bangdiem1" style="text-align: center;font-size: .8em;">
									
								</div>
							</div>
						</div>

					</div>
					<!-- ============================ THANH HIỆN THỜI GIAN ĐẾM NGƯỢC =============== -->
					<div class="time_dn" align="center" style="position: fixed;bottom: 1em;right: 90px">
						<div class="dongho" style="padding: .5em;color: #389BFF;z-index: 10000;position: relative;width: 13em; border-radius: 10px;background-color: rgba(61, 62, 64, 0.8);">
							<div class="time_dn1">
								<span class="glyphicon glyphicon-time"></span> 
								<span id="gio"></span> :
								<span id="phut"></span> :
								<span id="giay"></span> 
							</div>
							<input readonly="readonly" type="button" class="button_nb" width="20" style="text-align: center;width: 12em" name="bt_nb" id="" data-toggle="modal" data-target="#myModal" onclick="nopbai();" value="Nộp bài">

						</div>
					</div>
				</form>

			</div>
			<div class="cot1 cott1" style="border-bottom: 4px #389bff solid;border-top: 4px #389bff solid;width: 21%;" align="center">
				<h3 style="color: #389bff;vertical-align: middle;line-height: 30px">Danh sách các môn học</h3>
			</div>
			<div class="cott1">
				<ul class="tlon_dtt" style="float: right;list-style: none;color: white;background-color: #2ECC71;padding-top: 5px;padding-bottom: 5px;box-shadow: 2px 2px 10px #eeeeee;position: absolute;margin-left: 20em;text-align: center;border-radius: 4px;">
					<li onclick="tailieuot(5);" class="gach" name="tlot" style="border-bottom: 1px solid #eeeeee;padding: 2px;"><a href="#">Tài liệu ôn tập</a></li>
					<li onclick="dethithu(5);" name="dtt" class="gach" style="padding: 2px;"><a href="#">Đề thi thử</a></li>
				</ul>
				<div class="cot col1 cott">

					<span class="icon-box toanh"><img src="img/math.png"></span>
					<div>
						<span class="monhoc">
							<a href="#">TOÁN</a>
							
						</span>
					</div>

				</div>
			</div>
			<div class="cott1">
				<ul class="tlon_dtt" style="float: right;list-style: none;color: white;background-color: #F6A623;padding-top: 5px;padding-bottom: 5px;box-shadow: 2px 2px 10px #eeeeee;position: absolute;margin-left: 20em;text-align: center;border-radius: 4px;">
					<li onclick="tailieuot(4);" class="gach" style="border-bottom: 1px solid #eeeeee;padding: 2px;"><a href="#">Tài liệu ôn tập</a></li>
					<li onclick="dethithu(4);" class="gach" style="padding: 2px;"><a href="#">Đề thi thử</a></li>
				</ul>
				<div class="cot col2 cott">
					<span class="icon-box vatl"><img src="img/physic.png"></span>
					<div>
						<span class="monhoc">
							<a href="#">VẬT LÝ</a>
						</span>
					</div>
				</div>
			</div>
			<div class="cott1">
				<ul class="tlon_dtt" style="float: right;list-style: none;color: white;background-color: #A076C5;padding-top: 5px;padding-bottom: 5px;box-shadow: 2px 2px 10px #eeeeee;position: absolute;margin-left: 20em;text-align: center;border-radius: 4px;">
					<li onclick="tailieuot(2);" class="gach" style="border-bottom: 1px solid #eeeeee;padding: 2px;"><a href="#">Tài liệu ôn tập</a></li>
					<li onclick="dethithu(2);" class="gach" style="padding: 2px;"><a href="#">Đề thi thử</a></li>
				</ul>
				<div class="cot col3 cott">
					<span class="icon-box hoah"><img src="img/chem.png"></span>
					<div>
						<span class="monhoc">
							<a href="#">HÓA HỌC</a>
						</span>
					</div>
				</div>
			</div>
			<div class="cott1">
				<ul class="tlon_dtt" style="float: right;list-style: none;color: white;background-color: #389bff;padding-top: 5px;padding-bottom: 5px;box-shadow: 2px 2px 10px #eeeeee;position: absolute;margin-left: 20em;text-align: center;border-radius: 4px;">
					<li onclick="tailieuot(1);" class="gach" style="border-bottom: 1px solid #eeeeee;padding: 2px;"><a href="#">Tài liệu ôn tập</a></li>
					<li onclick="dethithu(1);" class="gach" style="padding: 2px;"><a href="#">Đề thi thử</a></li>
				</ul>
				<div class="cot col1 cott">
					<span class="icon-box sinhh"><img src="img/bio.png"></span>
					<div>
						<span class="monhoc">
							<a href="#">SINH HỌC</a>
						</span>
					</div>
				</div>
			</div>
			<div class="cott1">
				<ul class="tlon_dtt" style="float: right;list-style: none;color: white;background-color: #dc6e7d;padding-top: 5px;padding-bottom: 5px;box-shadow: 2px 2px 10px #eeeeee;position: absolute;margin-left: 20em;text-align: center;border-radius: 4px;">
					<li onclick="tailieuot(3);" class="gach" style="border-bottom: 1px solid #eeeeee;padding: 2px;"><a href="#">Tài liệu ôn tập</a></li>
					<li onclick="dethithu(3);" class="gach" style="padding: 2px;"><a href="#">Đề thi thử</a></li>
				</ul>
				<div class="cot col3 cott">
					<span class="icon-box tienga"><img src="img/eng.png"></span>
					<div>
						<span class="monhoc">
							<a href="#">TIẾNG ANH</a>

						</span>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!--=========================Form đăng ký==========================>>-->
	<div style="width: 500px;position: fixed;" id="register-box" class="register">
		<form method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" style="border: 3px solid #2196f3;border-top: 8px solid #2196F3;background-image: url(img/anh21.jpg);" id="frmThamgia">
			<h2 class="w3-center">Đăng ký thành viên</h2>
			
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-fname" name="dk-fname" type="text" placeholder="Nhập họ tên của bạn" maxlength="30">
				</div>
			</div>
			<span id="err_fname"></span>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-secret"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-uname" name="dk-uname" type="text" placeholder="Tên đăng nhập của bạn" maxlength="30">
				</div>
			</div>
			<span id="err_uname"></span>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-mail" name="dk-mail" type="text" placeholder="Email" maxlength="30">
				</div>
			</div>
			<span id="err_mail"></span>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-sdt" name="dk-sdt" type="text" placeholder="Số điện thoại" maxlength="30">
				</div>
			</div>
			<span id="err_sdt"></span>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-mk" name="dk-mk" type="password" placeholder="Tối thiểu 5 kí tự và không quá 30 kí tự" maxlength="30">
				</div>
			</div>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dk-nlmk" name="dk-nlmk" type="password" placeholder="Tối thiểu 5 kí tự và không quá 30 kí tự" maxlength="30">
				</div>
			</div>
			<span id="err_nlmk"></span>
			<input type="button" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" name="sm_dk1" value="Đăng ký" onclick="kiemtra_form_dangky();">
			<div align="center" id="err_dk"></div>
		</form>
	</div>

	<!--===============Form đăng nhập================>>-->
	<div style="clear: both;width: 500px;position: fixed;" id="login-box" class="login">
		<form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" style="border: 3px solid #2196f3;border-top: 8px solid #2196F3; " method="post" id="frmThamgia_dn">
			<h2 class="w3-center">Đăng nhập</h2>
			
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-secret"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dn-uname" name="dn-uname" type="text" placeholder="Tên đăng nhập" maxlength="30">
				</div>
			</div>
			<div class="w3-row w3-section">
				<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
				<div class="w3-rest">
					<input class="w3-input w3-border" id="dn-mk" name="dn-mk" type="password" placeholder="Nhập mật khẩu" maxlength="30">
				</div>
			</div>
			<div id="err_dn"></div>
			<input type="button" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" id="sm_dn1" name="sm_dn1" onclick="kiemtra_form_dangnhap();" value="Đăng nhập">

		</form>
	</div>

	<!-- ==========================THANH FOOTER============================ -->
	<div align="center" style="max-width: 100%;">
		<div class="thanh-footer" align="" style="width: 100%;background-color: rgba(255,255,255,.6);height: 5em;margin-top: 3em;">
			<hr style="height: 1px; margin: -2em 90px 1em 90px; background-color: white;opacity: 1; box-shadow: 0px 0px 5px 1px #bcbec1;">
			<div class="noidung-ft" style="text-align: left;">
				<div style="">&nbsp;
				<img src="img/cntt_icon.png" style="float: left;width: 32px!important;opacity: .9">
				<span style="color: #389BFF;font-size: 20px;font-weight: 600;opacity: .9">K38C CNTT</span>
				</div>
				Copyright 2017-2018 © K38C CNTT TECH
			</div>

			<div class="noidung-ft">
				<div style="font-size: 20px;font-weight: 600;color: #3B3B3B;">Sản Phẩm</div>
				<div>Ôn thi THPT Quốc gia</div>
			</div>

			<div class="noidung-ft">
				<div style="font-size: 20px;font-weight: 600;color: #3B3B3B;">
					Giới thiệu
				</div>
				<div>Dành cho học sinh THPT</div>
			</div>
			<style type="text/css">
				.lh_logo > img{
					border-radius: 50%;
					width: 2em;
					margin-top: .5em;
				}
				.lh_logo > img:hover{
					opacity: .7;
					cursor: pointer;
				}
			</style>
			<div class="noidung-ft" style="text-align: right;">
				<div style="font-size: 20px;font-weight: 600;color: #3B3B3B;">Liên hệ</div>
				<div class="lh_logo"><img src="img/logofacebook.png">&nbsp; &nbsp;<img src="img/logoyoutube.png">&nbsp; &nbsp;<img src="img/logogmail.png"></div>
				<div style="margin-top: .5em;"><i class="fa fa-envelope-o"></i> zlnsangz@gmail.com</div>
			</div>
		</div>
	</div>
</body>
</html>