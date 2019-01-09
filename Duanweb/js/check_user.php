<?php

   //check if its ajax request, exit script if its not
   if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
      die();
   }
   
   //try connect to db
   $connecDB = mysqli_connect("localhost", "root", "","duanweb")or die('Kết nối cơ sở dữ liệu thất bại');
   
   //trim and lowercase username
   $username =  $_POST["dk-uname"];
   mysqli_query($connecDB, "set names utf8");
   $sql = "select user from tbthanhvien where user='$username'" or die('Truy vấn lỗi');
   //check username in db
   $results = mysqli_query($connecDB,$sql);
   

   
   //if value is more than 0, username is not available
   if(mysqli_num_rows($results) > 0) {
      echo '<script type="text/javascript">document.getElementById("err_uname").innerHTML="Tên đăng nhập đã tồn tại.";coloi = (coloi && false);var abb = 0;</script>';
   }
   else{
      $lenh = "insert into tbthanhvien(user, fullname, email, phone, pass) values('".$_POST['dk-uname']."','".$_POST['dk-fname']."','".$_POST['dk-mail']."','".$_POST['dk-sdt']."','".md5($_POST['dk-mk'])."')";
      mysqli_query($connecDB, $lenh);
      echo '<script type="text/javascript">var abb =1</script>';
   }
   //close db connection
   mysqli_close($connecDB);

?>

