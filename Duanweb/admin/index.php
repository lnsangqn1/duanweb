<?php 
session_start();
    if(!isset($_SESSION['user2'])){
        header("Location: login.php");
    }
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
    <title>Trang chủ</title>

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
                    <li class="active">
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
                            Trang chủ
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Trang chủ
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <style type="text/css">
                    .hinh1{
                        display: inline-table;
                        text-align: center;
                        padding: 2em;
                    }
                    .link{
                        color: black;
                        text-decoration: underline;
                        font-size: 1.5em;
                    }
                </style>
                <div align="center">
                <div align="center" class="hinh1">
                    <a href="ql_tv.php" class="link">
                        <img class="hinh" width="100px" src="img/group.png" style="">
                        <div>Quản lý thành viên</div>
                    </a>
                </div>
                <div align="center" class="hinh1">
                    <a href="ql_tl.php" class="link">
                        <img class="hinh" width="100px" style="" src="img/book.png">
                        <div>Quản lý tài liệu</div>
                    </a>
                </div>
                 <div align="center" class="hinh1">
                    <a href="ql_dt.php" class="link">
                        <img class="hinh" width="100px" src="img/exam.png">
                        <div>Quản lý đề thi</div>
                    </a>
                </div>
                <div align="center" class="hinh1">
                    <a href="ql_ch.php" class="link">
                        <img class="hinh" width="100px" src="img/question.png">
                        <div>Quản lý câu hỏi</div>
                    </a>
                </div>
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
