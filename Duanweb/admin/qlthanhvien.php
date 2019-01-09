			<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Quản lý thành viên</title>
 
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
 </head>
 
  <body>
   <?php 

	$kn = mysqli_connect("localhost","root","","duanweb");
	mysqli_query($kn,"set names utf8");
?>
    <div class="container">
      <div class="row">
        <h3> Quản lý thành viên</h3>
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
            $sql = "SELECT * FROM tbthanhvien";
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
              <a href="suatv.php?user=<?php echo $data['user']; ?>">Sửa</a> 
              </td>
              
              <td>
              <a href="xoatv.php?user=<?php echo $data["user"]; ?>">xóa</a> 
              </td>
              
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>
 
    </div>
 
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  
 
</body></html>