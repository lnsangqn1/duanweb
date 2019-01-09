<?php 
session_start();
$kn = mysqli_connect("localhost","root","","duanweb");
mysqli_query($kn,"set names utf8");
if(!isset($_SESSION['user2'])){
    header("Location: login.php");
}
$tb='';
$dem=1;
if(isset($_POST['tlch'])){
    
    if($_POST['sch']<=0 || $_POST['tg']<=0){
        $tb='Số câu hỏi và thời gian phải lớn hơn 0';
    }
    else{
       // echo $_POST['paa'].$dem;
         $sql1 = "insert into tbdethi (madt,mamh,thoigian,dt_socau) values('".$_POST['mdt']."',".$_POST['mh'].",".$_POST['tg'].",".$_POST['sch'].")";
         $kq1 = mysqli_query($kn,$sql1);
         $sql2 = "insert into tbtendt (tendt,madt) values('".$_POST['tdt']."','".$_POST['mdt']."')";
         $kq2 = mysqli_query($kn,$sql2);
         $tb='Tạo đề thi thành công';
        // while($dem<=$_POST['sch']){
        //     $sql01 = "insert into tbcauhoi (tencauhoi,A,B,C,D,dapand,madt) values('".$_POST['tench'].$dem."','".$_POST['paa'].$dem."','".$_POST['pab'].$dem."','".$_POST['pac'].$dem."','".$_POST['pad'].$dem."','".$_POST['dad'].$dem."','".$_POST['mdt']."')";
        //     $kq02 = mysqli_query($kn,$sql01);
        //     $dem++;
        // }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="img/cntt_icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style type="text/css">
        .dropdown-menu{
            min-width: 185px!important;
        }
    </style>
    <title>Quản lý đề thi</title>

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
    <div bgcolor="white">fdsf</div>
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
                        <a href="ql_tv.php"><i class="fa fa-fw fa-bar-chart-o"></i> Quản lý thành viên</a>
                    </li>
                    <li>
                        <a href="ql_tl.php"><i class="fa fa-fw fa-table"></i> Quản lý tài liệu</a>
                    </li>
                    <li class="active">
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
                            Quản lý đề thi
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Trang chủ</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Quản lý đề thi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- ============== NỘI DUNG =================== -->
                <div>
                    <div class="sang123"></div>
                    <button onclick="myFunction()" style="">Thêm đề thi</button>
                    <?php echo $tb; ?>
                    <div id="myDIV" style="display: none;">
                        <div>
                            <form method="post">
                                Tên đề thi <input type="text" name="tdt" required="required">&emsp;
                                Môn học <select name="mh">
                                    <option value="5">
                                        Toán học
                                    </option>
                                    <option value="4">
                                        Vật lý
                                    </option>
                                    <option value="2">
                                        Hóa học
                                    </option>
                                    <option value="1">
                                        Sinh học
                                    </option>
                                        <option value="3">
                                        Tiếng anh
                                    </option>
                                </select>&emsp;
                                Mã đề thi <input type="text" name="mdt" required="required" id="mdt"><br>
                                Số câu hỏi <input type="number" id="sch" name="sch" required="required">&emsp;
                                Thời gian <input type="number" name="tg" required="required"> phút <br>
                                
                                <script type="text/javascript">
                                    var add = 0;
                                    function thietlapch(){

                                        $('.thietlapch').css('display','block');
                                        $('.sbm').css('display','block');
                                        add++;
                                        $('.thietlapch').append('Tên câu hỏi <input type="text" name="tench'+add+'" id="tench'+add+'">Phươn án A <input type="text" name="paa'+add+'" id="paa'+add+'"> Phương án B <input type="text" name="pab'+add+'" id="pab'+add+'"><br>Phương án C <input type="text" name="pac'+add+'" id="pac'+add+'"> Phương án D <input type="text" name="pad" id="pad'+add+'">Đáp án đúng <select name="dad'+add+'" id="dad'+add+'"><option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option></select> <br>');
                                    }

                                </script>
                                <div class="thietlapch" style="display: none">
                                    <!-- Tên câu hỏi <input type="text" name="tench">
                                    Phươn án A <input type="text" name="paa"> Phương án B <input type="text" name="pab"><br>
                                    Phương án C <input type="text" name="pac"> Phương án D <input type="text" name="pad">
                                    Đáp án đúng <input type="text" name="dad"> <br> -->
                                </div><br>
                                <button type="button" name="taodt" onclick="thietlapch();">Thêm câu hỏi</button><br>
                                <button type="button"  onclick="taodethi();" class="sbm" name="tlch" style="display: none">Tạo đề thi</button>
                                <script type="text/javascript">
                                    function taodethi(){
                                        
                                        sch = document.getElementById("sch").value;
                                        if(sch != add)
                                            alert("Cần phải thêm câu hỏi");
                                        else{
                                            var sang1 = 1;
                                            while(sang1<=add){
                                                tench = document.getElementById("tench"+sang1).value;
                                                paa = document.getElementById("paa"+sang1).value;
                                                pab = document.getElementById("pab"+sang1).value;
                                                pac = document.getElementById("pac"+sang1).value;
                                                pad = document.getElementById("pad"+sang1).value;
                                                dad = document.getElementById("dad"+sang1).value;
                                                madt = document.getElementById("mdt").value;
                                                $.post('themdethi.php',{'tench':tench,'paa':paa,'pab':pab,'pac':pac,'pad':pad,'dad':dad,'madt':madt},function(abc){
                                                    $('.thietlapch').append(abc);
                                                });
                                                sang1++;
                                            }
                                            $('.sbm').attr('type','submit');
                                          //  $('form').submit();
                                        }
                                    }
                                </script>
                            </form>
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
                </div>
            
                <div>
                    <form method="post">

                        <?php $sql= "select * from tbdethi as dt inner join tbtendt as tdt on tdt.madt=dt.madt inner join tbmonhoc as mh on mh.mamh=dt.mamh order by tdt.stt DESC";
                        $kq=mysqli_query($kn,$sql);
                        echo '<table border="1px">
                        <tr>
                        <td>
                        Mã đề thi
                        </td>
                        <td>
                        Tên đề thi
                        </td>
                        <td>
                        Mã môn học
                        </td>
                        <td>
                        Tên môn học
                        </td>
                        <td>
                        Lượt thi
                        </td>
                        <td>
                        Thời gian
                        </td>
                        <td>
                        Số câu hỏi
                        </td>
                        <td>
                        Sửa
                        </td>
                        <td>
                        Xóa
                        </td>
                        </tr>';
                        while($row = mysqli_fetch_array($kq)){
                            echo '<tr><td>'.$row['madt'].'</td>';
                            echo '<td>'.$row['tendt'].'</td>';
                            echo '<td>'.$row['mamh'].'</td>';
                            echo '<td>'.$row['tenmh'].'</td>';
                            echo '<td>'.$row['luotthi'].'</td>';
                            echo '<td>'.$row['thoigian'].'</td>';
                            echo '<td>'.$row['dt_socau'].'</td>';
                            echo '<td><a href="#" onclick="suadt('."'".$row['madt']."'".')"><button name="suadt" data-toggle="modal" data-target="#myModal" type="button" >Sửa đề thi</button></a></td>';
                            echo '<td><a href="#" onclick="xoadt('."'".$row['madt']."'".')"><button name="xoadt" type="button">Xóa đề thi</button></a></td></tr>';
                        }
                    echo '</table>'; //mysqli_close($kn);?>
                    <div class="container">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog" style="margin-top: 3em;">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Chỉnh sửa đề thi</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="suadt">
                                   <!--  <?php
                                       
                                        // $sql001 = "select * from tbdethi as dt inner join tbtendt as tdt on tdt.madt=dt.madt inner join tbmonhoc as mh on mh.mamh=dt.mamh order by tdt.stt DESC where ";
                                        // $kq001 = mysqli_query($kn,$sql001);
                                        // $dem1 = 1;
                                        // while($row = mysqli_fetch_array($kq001)){
                                    ?> -->
                                    <!-- <form method="post">
                                        <div class="modal-body">
                                            <p style="margin: 0px!important;">Mã đề thi <input type="text" name="e_mdt<?php //echo $dem; ?>" value="<?php //echo $row['madt']; ?>"></p>
                                            <p style="margin: 0px!important;">Tên đề thi <input type="text" name="e_tendt<?php// echo $dem; ?>" value="<?php// echo $row['tendt']; ?>"></p>
                                            <p style="margin: 0px!important;">Môn học 
                                                <select name="e_mh<?php// echo $dem; ?>">
                                                    <option value="5">Toán học</option>
                                                    <option value="4">Vật lý</option>
                                                    <option value="2">Hóa học</option>
                                                    <option value="1">Sinh học</option>
                                                    <option value="3">Tiếng anh</option>
                                                </select></p>
                                            <p style="margin: 0px!important;">Thời gian <input type="number" name="e_tg<?php// echo $dem; ?>" value="<?php// echo $row['thoigian']; ?>"></p>
                                        </div>
                                        <?php $dem//++;}; ?>
                                        <div class="modal-footer">
                                            <button type="submit" name="e_sbm" class="btn btn-default">Cập nhật</button>
                                        </div>
                                    </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <script type="text/javascript">
                            function xoadt(madt){
                                abc1=confirm("Bạn có chắn chắn muốn xóa đề thi này ?");
                                if(abc1 == true){
                                    $.post('xoadethi.php',{'madt':madt},function(){

                                    });
                                    location.reload();
                                }
                            }
                            function suadt(madt){
                                $.post('suadethi.php',{'madt':madt},function(dd){
                                    $('.suadt').html(dd);
                                });
                            }
                            function capnhat(madt1){
                                dem=1;
                                ab = $('.modal-body').length;
                                while(dem<=ab){

                                    tendt = document.getElementById("e_tendt"+dem).value;  
                                    mamh = document.getElementById("e_mh"+dem).value;
                                    tg = document.getElementById("e_tg"+dem).value;
                                    $('.sang123').append(tg+mamh+tendt);
                                    $.post('capnhatdt.php',{'madt1':madt1,'tendt':tendt,'mamh':mamh,'tg':tg},function(abc){
                                       $('.sang123').append(abc);
                                    })
                                    dem++;
                                }
                                location.reload();
                            }
                        </script>
                </form>
            </div>

        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->


<!-- /#page-wrapper -->


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
