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

    <title>Quản lý thành viên</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .dropdown-menu{
        min-width: 185px!important;
    }
</style>
<!-- Custom CSS -->
<link href="css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="css/plugins/morris.css" rel="stylesheet">

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
                    <li class="active">
                        <a href="ql_tv.php"><i class="fa fa-fw fa-bar-chart-o"></i>Quản lí thành viên</a>
                    </li>
                    <li>
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
                            Quản lý thành viên
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Trang chủ</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Quản lý thành viên
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="">
                    <table class="table" border="2" cellpadding="50" cellspacing="2" align="center" bgcolor="#99FFCC">
                      <caption align="center" >Danh sách thành viên đã đăng ký</caption>
                      <thead bgcolor="#CCCCCC">

                        <tr>
                          <th>STT</th>
                          <th>Tên đăng nhập</th>
                          <th>Họ tên</th>
                          <th>Địa chỉ email</th>
                          <th>Cấp độ</th>
                          <th>Hành động</th>
                          <th>Hành động</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      $stt = 1 ;
                      $sql = "select * FROM tbthanhvien";
                      $query = mysqli_query($kn,$sql);
                      while ($data = mysqli_fetch_array($query)) {
                          ?>
                          <tr>

                              <th scope="row">

                                  <?php echo $stt++ ?>
                              </th>
                              <td><?php echo $data["user"]; ?></td>
                              <td><?php echo $data["fullname"]; ?></td>
                              <td><?php echo $data["email"]; ?></td>             
                              <td>
                                <?php
                                if ($data["level"] == 1) {
                                  echo "Administrator";
                              }else{
                                  echo "Member";
                              }
                              ?>
                          </td>
                          <td>
                              <button data-toggle="modal" data-target="#myModal" type="button" onclick="suatv(<?php echo "'".$data['user']."'"; ?>)">Phân quyền</button>
                          </td>

                          <td>
                              <button type="button" onclick="xoatv(<?php echo $data['id'].",'".$data['user']."'"; ?>)">Xóa người này</button>
                          </td>

                      </tr>
                      <?php
                  }
                  ?>

              </tbody>
            </table>
                </div>
                    <script type="text/javascript">
                        function suatv(user) {
                          $.post('suatv.php',{'user':user},function(ss){
                                $('.suatv').html(ss);
                            });
                        }
                        function capnhat(user) {
                          dem=1;
                          ab = $('.modal-body').length;
                          while(dem<=ab){
                            level = document.getElementById("e_level"+dem).value;  
                            $.post('capnhattv.php',{'user':user,'level':level},function(abc){
                                
                            });
                            dem++;
                        }
                        location.reload();
                        }
                      function xoatv(id,user) {
                        abc1=confirm("Bạn có chắn chắn muốn xóa thành viên này ?");
                          if(abc1 == true){
                            $.post('xoatv.php',{'user':user,'id':id},function(ab){
                                
                            });
                            location.reload();
                        }
                      }
                  </script>
                  <div class="container">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog" style="margin-top: 3em;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Thay đổi quyền cho thành viên</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="suatv">

                                </div>
                            </div>

                        </div>
                    </div>
                  </div>
                <!-- Flot Charts -->
                
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
