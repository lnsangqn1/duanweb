function kiemtra_form_dangnhap(){
	un1 = document.getElementById("dn-uname").value;
	pass1 = document.getElementById("dn-mk").value;
	//alert(un1);
	if(un1 == "" || pass1 == "")
		document.getElementById("err_dn").innerHTML="Không được để trống";
	else{
		
		$.post('../Duanweb/js/check_dn1.php',{'dn-uname':un1,'dn-mk':pass1},function(data0){
				$("#err_dn").html(data0);
				if(ad == 1){
					$("#err_dn").remove();
					alert("Đăng nhập thành công");
					$('span.abb').append(data0);
					$('.login-window').remove();$('.register-window').remove();$('.ttuser').fadeIn();
						//document.getElementById("frmThamgia_dn").submit();
					$('#over2, .login').fadeOut(300, function() {
           			$('#over2').remove();
           			location.reload();
       			});
			}
		});
	}
}
