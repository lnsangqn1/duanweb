<?php 
session_start();
if(!isset($_SESSION['user2'])){
	header("location: login.php");
}
$dem = 0;
$kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");
if(isset($_POST['dmk'])){
    $pattern = '/([\w_\.!@#$%^&*()]+){5,30}$/';

    $sql = "select * from tbthanhvien";
    $kq = mysqli_query($kn,$sql);
    while($row = mysqli_fetch_array($kq)){
        if(md5($_POST['mk_cu']) == $row['pass'] && $_POST['mk_moi'] == $_POST['mk_moi_nl'] && preg_match($pattern, $_POST['mk_moi'])){
            $sql1 = "update tbthanhvien set pass='".md5($_POST['mk_moi'])."' where user='".$_SESSION['user2']."'";
            $kq1 = mysqli_query($kn,$sql1);
            $tb_dmk = '<span style="color: #02ff00;">Đổi mật khẩu thành công</span>';
            $dem = 1;
        }
    }
    if($dem == 1){
    mysqli_close($kn);
    }else
        $tb_dmk = 'Đổi mật khẩu thất bại';

}
else{
    $tb_dmk = '';
}

?>

<meta charset="utf-8">
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="img/cntt_icon.png" type="image/x-icon" />
<head>
    <link rel="shortcut icon" href="img/cntt_icon.png" type="image/x-icon" />
    <title>Ứng dụng ôn tập và thi trắc nghiệm cho học sinh THPT</title>
    <style type="text/css">
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    color: white;
    font-size: .9em;
    background-color: rgba(255,255,255,.1);
}

::-webkit-input-placeholder {
   color: rgba(255,255,255,.7);
}

/* Set a style for all buttons */
button {
    background-color: rgba(255, 255, 255, 0.4);;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 20px;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 100%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
        width: 100%;
    }
}
button:hover{
    background-color: rgba(255, 255, 255, 0.5);;
}
label{
    color: white;
    font-family: Open sans;
}
</style>
</head>
<body style="background-image: url(../img/anhnen.jpg);background-size: cover;background-repeat: no-repeat;">
    <div align="center" style="margin-top: 4em;">
       <form method="post" style="width: 50%;text-align: left;box-shadow: 0px 0px 5px 1px #333;background-color: rgba(52, 56, 68, 0.4);">
          <div class="container">
            <label><b>Nhập mật khẩu cũ</b></label>
            <input type="password" placeholder="Password old" name="mk_cu" maxlength="30" required>
            <label><b>Nhập mật khẩu mới</b></label>
            <input type="password" placeholder="New password" name="mk_moi" maxlength="30" required>

            <label><b>Nhập lại mật khẩu mới</b></label>
            <input type="password" placeholder="Repeat new password" maxlength="30" name="mk_moi_nl" required>
            <label style="color: red"><b><?php if(isset($tb_dmk)) echo $tb_dmk; ?></b></label>

            <div align="center">
                <div class="clearfix" align="center" style="display: inline-grid;">
                  <button type="submit" class="signupbtn" name="dmk">Thay đổi mật khẩu</button>
                 <div style=""><a href="index.php" style="">Quay lại trang chủ</a></div>
              </div>

          </div>

      </div>
  </form>
</div>
</body>
</html>