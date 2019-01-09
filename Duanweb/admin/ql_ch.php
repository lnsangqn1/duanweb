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
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="author" content="">
    <style type="text/css">
        .dropdown-menu{
            min-width: 185px!important;
        }
        input[type=text] {
          width: 130px;
          -webkit-transition: width 0.4s ease-in-out;
          transition: width 0.4s ease-in-out;
        }

        /* When the input field gets focus, change its width to 100% */
        input[type=text]:focus {
          width: 100%;
        }
    </style>
    <title>Quản lý câu hỏi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
                    <li>
                        <a href="ql_tv.php"><i class="fa fa-fw fa-bar-chart-o"></i> Quản Lý thành viên</a>
                    </li>
                    <li>
                        <a href="ql_tl.php"><i class="fa fa-fw fa-table"></i> Quản lý tài liệu</a>
                    </li>
                    <li>
                        <a href="ql_dt.php"><i class="fa fa-fw fa-edit"></i> Quản lý đề thi</a>
                    </li>
                    <li class="active">
                        <a href="ql_ch.php"><i class="fa fa-fw fa-question-circle"></i> Quản lý câu hỏi</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="overflow: auto;">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Quản lý câu hỏi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Trang chủ</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-question-circle"></i> Quản lý câu hỏi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div style="margin-bottom: 1em;">
                  <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm...">
                </div>
                <div class="">
                    <table style="" class="table" border="2" cellpadding="50" cellspacing="2" align="center" bgcolor="#99FFCC">
                      <thead bgcolor="#CCCCCC">
                        <tr>
                          <th>STT</th>
                          <th>Mã câu hỏi</th>
                          <th>Môn học</th>
                          <th>Tên câu hỏi</th>
                          <th>Phương án A</th>
                          <th>Phương án B</th>
                          <th>Phương án C</th>
                          <th>Phương án D</th>
                          <th>Đáp án đúng</th>
                          <th>Mã đề thi</th>
                          <th>Hành động</th>
                          <th>Hành động</th>
                      </tr>
                  </thead>
                  <tbody id="myTable">
                      <?php
                      $stt = 1 ;
                      $sql = "select * FROM tbcauhoi inner join tbdethi on tbdethi.madt=tbcauhoi.madt inner join tbmonhoc on tbmonhoc.mamh=tbdethi.mamh";
                      $query = mysqli_query($kn,$sql);
                      while ($data = mysqli_fetch_array($query)) {
                          ?>
                          <tr>

                              <th scope="row">

                                  <?php echo $stt++ ?>
                              </th>
                              <td><?php echo $data["mach"]; ?></td>
                              <td><?php echo $data["tenmh"]; ?></td>
                              <td><?php echo $data["tencauhoi"]; ?></td>
                              <td><?php echo $data["A"]; ?></td>
                              <td><?php echo $data["B"]; ?></td>
                              <td><?php echo $data["C"]; ?></td>
                              <td><?php echo $data["D"]; ?></td>
                              <td><?php echo $data["dapand"]; ?></td>
                              <td><?php echo $data["madt"]; ?></td>         
                          <td>
                              <button data-toggle="modal" data-target="#myModal" type="button" onclick="suach(<?php echo "'".$data['mach']."'" ?>)">Sửa</button>
                          </td>

                          <td>
                              <button type="button" onclick="xoach(<?php echo $data['mach']; ?>)">Xóa</button>
                          </td>

                      </tr>
                      <?php
                  }
                  ?>

              </tbody>
          </table>
          <script type="text/javascript">
            $(document).ready(function(){
                          $("#myInput").on("keyup", function() {
                            var value = $(this).val().toLowerCase();
                            $("#myTable tr").filter(function() {
                              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                            });
                          });
                        });
          </script>
                </div>
                <div class="">
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog" style="margin-top: 3em;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Chỉnh sửa câu hỏi</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="suach">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">

                        function suach(mach) {
                            $.post('suach.php',{'mach':mach},function(data){
                                $('.suach').html(data);
                            });
                        }
                        function capnhatch(mach) {
                            dem=1;
                            ab = $('.modal-body').length;
                            while(dem<=ab){
                            tench = document.getElementById("e_tench"+'1').value;
                            paa = document.getElementById("e_paa"+'1').value;
                            pab = document.getElementById("e_pab"+'1').value;
                            pac = document.getElementById("e_pac"+'1').value;
                            pad = document.getElementById("e_pad"+'1').value;
                            dad = document.getElementById("e_dad"+'1').value;    
                            $.post('capnhatch.php',{'mach':mach,'tench':tench,'paa':paa,'pab':pab,'pac':pac,'pad':pad,'dad':dad},function(abc){
                                
                            });
                            dem++;
                            }
                          //  location.reload();
                        }
                        function xoach(mach) {
                            abc1=confirm("Bạn có chắn chắn muốn xóa thành viên này ?");
                            if(abc1 == true){
                                $.post('xoach.php',{'mach':mach},function(ab){});
                                location.reload();
                            }
                        }
                        
                    </script>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

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

</body>

</html>
