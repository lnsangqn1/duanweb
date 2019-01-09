<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map" crossorigin="anonymous">
        <link rel="shortcut icon" href="../img/cntt_icon.png" type="image/x-icon" />
        <script type="text/javascript" defer="defer" 
        src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
    </script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/w3.css">

    <link rel="stylesheet" href="../css/font1-awesome.min.css">
    <script type="text/javascript" src="../js/xldk0.js"></script>
    <script type="text/javascript" src="../js/xldk2.js"></script>
    <script type="text/javascript" src="../js/xldn1.js"></script>
    <script type="text/javascript" src="../js/xlnd1.js"></script>
    <style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #fbfbfb;
        width: 20%;
    border-right: none;
    }
    @media (min-width: 992px){
        .container {
            width: none!important;
        }
    /* width: 970px; */
}
@media (min-width: 1200px){

.container {
     width: 1000px!important; 
    }
}
    .w3-xxlarge{
        font-size: 16px!important;
    }
    .tdmau1{
        color: #EB5C55; /*màu hồng*/
        }.tdmau2{color: #2ECC71;}/*màu xanh lá*/
        .tdmau3{color: #F6A623;}/*màu xanh cam*/
        .tdmau4{color: #f1c40f;}
        .tdmau5{color: #A076C5;}
        .tdmau7{color: #389BFF;}
        .tdmau8{color: #007EE5;}
        #user1{
            text-align: left;
        }
        .dsd{
            display: inline-table;
            background-color: white;
            box-shadow: 1px 1px 5px 1px #dee1e8;
            padding: 1em;
            width: 19em;
            font-weight: 600;
            list-style: none;
            text-decoration: none!important;
            margin: .5em .5em;
            color: #629ede;
            border-left: 2px solid #389bff;
            border-right: 2px solid #389bff;
            border-radius: 15px;
        }
        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s linear;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #eeeeee;
            color: #629ede;
            border-right: 3px solid #629ede;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
         
        
        }
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div style="height: 100%;">
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen"><span class="glyphicon glyphicon-user"></span>&nbsp;Thông tin cá nhân</button>
          
          <button class="tablinks">
          <span class="glyphicon glyphicon-home"></span>&nbsp;<a style="text-decoration: none!important;" href="index.php">Quay lại trang chính</a></button>
      </div>

      <div id="London" class="tabcontent">
          <h3>Thông tin cá nhân</h3>
          <?php
          $fn = '';
          $em = '';
          $ph = '';
            $kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");
    $sql="select * from tbthanhvien where user='".$_SESSION['user2']."'";
    $kq=mysqli_query($kn,$sql);
        while($row=mysqli_fetch_array($kq)){
            $fn = $row['fullname'];
            $em = $row['email'];
            $ph = $row['phone'];
        }
           ?>
          <div class="container">
              <form method="post">
                <label for="fname">Họ Tên</label>
                <input type="text" id="fname" name="fullname" value="<?php echo $fn; ?>">

                <label for="lname">Tên đăng nhập</label>
                <input type="text" id="lname" name="user" readonly="readonly" disabled="" value="<?php echo $_SESSION['user2']; ?>">

                <label>Email</label>
                <input type="text" id="" name="email" value="<?php echo $em; ?>">

                <label for="country">Giới tính</label>
                <select id="country" name="country">
                  <option value="australia">Nam</option>
                  <option value="canada">Nữ</option>
              </select>

              <label for="country">Số điện thoại</label>
              <input type="text" name="phone" placeholder="Phone number" value="<?php echo $ph;?>">
              <div align="center">
                <input type="submit" value="Cập nhật" name="capnhat" align="">
            </div>
        </form>
    </div>
</div>


<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html> 
<?php 
if(!isset($_SESSION['user2'])){
    header("location: login.php");
}
$kn = mysqli_connect("localhost","root","","duanweb");
    mysqli_query($kn,"set names utf8");
if(isset($_POST['capnhat'])){
    $sql = "update tbthanhvien set fullname='".$_POST['fullname']."', email='".$_POST['email']."', phone='".$_POST['phone']."' where user='".$_SESSION['user2']."'";
    $kq = mysqli_query($kn,$sql);
    $_SESSION['fullname2']=$_POST['fullname'];
    $_SESSION['email2']=$_POST['email'];
    $_SESSION['phone2']=$_POST['phone'];
}
mysqli_close($kn);
?>