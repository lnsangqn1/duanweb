<?php 
session_start();
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
    .dropdown-menu{
        min-width: 185px!important;
    }
</style>
<title>Quản lý tài liệu</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user2']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="tttaikhoan.php"><i class="fa fa-fw fa-user"></i> Thông tin tài khoản</a>
                        </li>
                        <li>
                            <a href="doimatkhau.php"><i class="fa fa-fw fa-gear"></i> Đổi mật khẩu</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="dangxuat.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Trang chủ</a>
                    </li>
                    <li>
                        <a href="ql_tv.php"><i class="fa fa-fw fa-bar-chart-o"></i>Quản lý thành viên</a>
                    </li>
                    <li class="active">
                        <a href="ql_tl.php"><i class="fa fa-fw fa-table"></i> Quản lý tài liệu</a>
                    </li>
                    <li>
                        <a href="ql_dt.php"><i class="fa fa-fw fa-edit"></i> Quản lý đề thi</a>
                    </li>
                    <li>
                        <a href="ql_ch.php"><i class="fa fa-fw fa-question-circle"></i> Quản lý câu hỏi</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Quản lý tài liệu
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Trang chủ</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Quản lý tài liệu
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div>
                    <div style="padding: 1em 0px;">
                        <button onclick="myFunction()">Thêm tài liệu</button>
                        <div id="myDIV" style="display: none;">
                            <form method="post" enctype="multipart/form-data">
                                <input type="file" name="upload"/>
                                <input type="text" name="tentl" placeholder="nhập tên tài liệu" required="">
                                <select name="mh">
                                    <option value="1">
                                        Sinh
                                    </option>
                                    <option value="2">
                                        Hóa         
                                    </option>
                                    <option value="3">
                                        Anh
                                    </option>
                                    <option value="4">
                                        Lý
                                    </option>
                                    <option value="5">
                                        Toán
                                    </option>
                                </select>
                                <span><input type="submit" name="submit" value="Upload dữ liệu" /></span>
                            </form>
                            <?php
                            $dem=0;

                            if(isset($_POST['submit'])){
                                if(($_FILES['upload']['error'] > 0) || $_POST['tentl']==null){
                                    echo "<br>Có lỗi";
                                }
                                else{
                                    $thaythe = str_replace(' ', '-', $_POST['tentl']);
                                    $ten0 = explode(".",$_FILES['upload']['name']);
                                    $ten = end($ten0);
                                    $ten1 = '../tailieuontap'."/".$_POST['mh'].'_'.$thaythe.".".$ten;
                                    $sang1 = 'duanweb/tailieuontap'."/".$_POST['mh'].'_'.$thaythe.".".$ten;
                                    $sql1="insert into tbtailieu(mamh,tentl,duongdan) values('".$_POST['mh']."','".$thaythe."','".$sang1."')";
                                    $kq1 = mysqli_query($kn,$sql1);
                                    move_uploaded_file($_FILES['upload']['tmp_name'],$ten1);
                                    echo "<br>Upload dữ liệu thành công!";
                                    echo "</pre>";

                                    $sql = "select * from tbtailieu inner join tbmonhoc on tbtailieu.mamh=tbmonhoc.mamh";
                                    $kq = mysqli_query($kn,$sql);
                                    while($row = mysqli_fetch_array($kq)){
                                        echo '<a href="'.$ten1.'">'.$row['tentl'].'</a><br>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myDIV");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }
                    </script>
                    <?php 
                    $kn = mysqli_connect("localhost","root","","duanweb");
                    mysqli_query($kn,"set names utf8");
                    $sql = "select * from tbtailieu inner join tbmonhoc on tbtailieu.mamh=tbmonhoc.mamh";
                    $kq = mysqli_query($kn,$sql);
                    echo '<table border="1" Cellpadding="10" cellspacing="10">';
                    echo '<tr align="center"><td>Mã tài liệu</td><td>Môn học</td><td>Tên tài liệu</td><td>Đường dẫn</td><td>Sửa</td><td>Xóa</td></tr>';
                    while($row = mysqli_fetch_array($kq)){
                        echo '<tr><td>'.$row['matl'].'</td>';
                        echo '<td>'.$row['tenmh'].'</td>';
                        echo '<td>'.$row['tentl'].'</td>';
                        echo '<td>'.$row['duongdan'].'</td><td><button data-toggle="modal" data-target="#myModal" type="button" onclick="suatailieu('."'".$row['matl']."'".','."'".$row['duongdan']."'".')">Sửa</button></td><td><button type="button" onclick="xoatl('."'".$row['matl']."'".')">Xóa</button></td></tr>';
                    }
                    echo '</table>';
                    ?>
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog" style="margin-top: 3em;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Chỉnh sửa tài liệu</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="suatl">
                                    <!-- <form method="post">
                                        <div class="modal-body">
                                            <p style="margin: 0px!important;">Môn học 
                                                <select name="e_mh">
                                                    <option value="5">Toán học</option>
                                                    <option value="4">Vật lý</option>
                                                    <option value="2">Hóa học</option>
                                                    <option value="1">Sinh học</option>
                                                    <option value="3">Tiếng anh</option>
                                                </select>
                                            </p>
                                            <p style="margin: 0px!important;">Tên tài liệu <input type="text" required="" name="e_tentl"></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" onclick="" name="e_sbm" class="btn btn-default" >Cập nhật</button>
                                            <script type="text/javascript">
                                                function suatailieu(mamh){

                                                }
                                            </script>
                                        </div>
                                    </form> -->
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    function suatailieu(matl,dl){
                                        $.post('suatailieu.php',{'matl':matl,'dl':dl},function(ss){
                                            $('.suatl').html(ss);
                                        });
                                    }
                                    function capnhat(matl,dl){
                                        dem=1;
                                        ab = $('.modal-body').length;
                                        while(dem<=ab){

                                            tentl = document.getElementById("e_tentl"+dem).value;  
                                            mamh = document.getElementById("e_mh"+dem).value;
                                            $.post('capnhattl.php',{'dl':dl,'mamh':mamh,'tentl':tentl,'matl':matl},function(abc){
                                                $('.test').append(abc);
                                            });
                                            dem++;
                                        }
                                        location.reload();
                                    }
                                    function xoatl(matl){
                                        abc1=confirm("Bạn có chắn chắn muốn xóa tài liệu này ?");
                                        if(abc1 == true){
                                            $.post('xoatailieu.php',{'matl':matl},function(){
                                                
                                            });
                                            location.reload();
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- /.row -->

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>

</body>

</html>
