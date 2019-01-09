function kiemtra_form_dangky(){
  var coloi = true;
  fname = document.getElementById("dk-fname");
  fn = fname.value;
  uname = document.getElementById("dk-uname");
  un = uname.value;
  txtEmail = document.getElementById("dk-mail");
  email = txtEmail.value;
  sdt = document.getElementById("dk-sdt");
  dt = sdt.value;
  mk = document.getElementById("dk-mk");
  pass = mk.value;
  nlmk = document.getElementById("dk-nlmk");
  nlpass = nlmk.value;
  re0 = /^[\S]/;
  re1 = /[\W]/igm;
  //kt họ tên
  if(fn=="" || !re0.test(fn)){
    document.getElementById("err_fname").innerHTML="Họ tên không để trống";
    coloi = (coloi && false);
  }
  else
    document.getElementById("err_fname").innerHTML="";
  //kt username
  if(un=="" || re1.test(un)){
    document.getElementById("err_uname").innerHTML="Tên đăng nhập không để trống và không có kí tự đặc biệt";
    coloi = (coloi && false);
  }
  else
    document.getElementById("err_uname").innerHTML="";
  //kt email
  var re = /\S[\w.]+@[\w]+.+.[A-Z]{2,4}/igm;
  if(!re.test(email)){
    document.getElementById("err_mail").innerHTML="Email không hợp lệ. Email không được có kí tự đặc biệt";
    coloi = (coloi && false);
  }
  else
    document.getElementById("err_mail").innerHTML="";
  //kt số điện thoại
  if(dt == ""){
    document.getElementById("err_sdt").innerHTML="Số điện thoại không được để trống";
    coloi = (coloi && false);
  }
  else
    document.getElementById("err_sdt").innerHTML="";
  reps = /([\w_\.!@#$%^&*()]+){5,30}$/;
  if(pass == "" || nlpass =="" || (pass != nlpass) || !reps.test(pass)){
    document.getElementById("err_nlmk").innerHTML="Mật khẩu không được để trống và phải khớp với nhau.";
    coloi = (coloi && false);
  }
  else
    document.getElementById("err_nlmk").innerHTML="";
  if(coloi == true){
    $.post('../Duanweb/js/check_user.php', {'dk-uname':un,'dk-fname':fn,'dk-mail':email,'dk-sdt':dt,'dk-mk':pass}, function(data) {
      $("#err_uname").html(data);
      if(coloi == true && abb == 1){
        alert("Đăng ký tài khoản thành công.");
        document.getElementById("frmThamgia").submit();
      }
    });
  }
}
