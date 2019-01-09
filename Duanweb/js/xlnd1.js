function dethithu(mamh1){
	$('span.tieude').html('Đề thi thử');
	$('a.quaylai').fadeIn(300);
	$('.cott1').remove();
	$('div.noidung1').addClass('noidung2');
	//$('div.dethi_nb').remove();
	$.post('../Duanweb/dethithu.php',{'mamh':mamh1},function(data10){
		$('#dethi_nb').html(data10);
	});


}
function tailieuot(mamh){
	$('span.tieude').html('Tài liệu ôn tập');
	$('a.quaylai').fadeIn(300);
	$('.cott1').remove();
	$('div.noidung1').addClass('noidung2');
	$.post('../Duanweb/tlontap.php',{'mamh':mamh},function(tlot){
		$('#dethi_nb').html(tlot);
	});
}
function chondethi(dem,us){
	//var noidung = $('#dsd').html();
	if(us == 1){
		$('span.tieude').html('Đề thi thử');
		$('a.quaylai').fadeIn(300);
		$('.cott1').remove();
		$('div.noidung1').addClass('noidung2');
		$.post('../Duanweb/monhoa.php',{'dem1':dem},function(data0){
			$("#dethi_nb").html(data0);
			$("#dethi_nb").addClass('dt');
			//	$(".container").css('display','none');
			$("#dethi_nb").append('<button type="button" sizes="30" class="btn btn-info btn-block" onclick="chtracnghiem();demNguoc();"><span class="glyphicon glyphicon-play" style="font-size: 10px;"></span> Click vào đây để bắt đầu làm bài</button>');
			$("#dethi_nb").addClass('dsd');
			$.post('../Duanweb/bangdiem.php',function(bd){
				$('#bangdiem0').css('display','block');
				$('#bangdiem1').html(bd);
				$('.noidung1').attr('align','center');
				$('.dt').css('text-align','center');
			});

		});
	//$(".dethi_nb").html(noidung);
	//$(".dethi_nb").addClass('dsd');
	//document.getElementById('dethi_nb').innerHTML = noidung;
}
else
	alert("Vui lòng đăng nhập");
}
var tinhdiem = 0;
function click1(mach){
	// $('#bt1').addClass('cba');
	// $('#bt2').removeClass('cba');
	// $('#bt3').removeClass('cba');
	// $('#bt4').removeClass('cba');
	// var a = document.getElementById("bt1").value;
    //  alert(b);

    var dapan = 'A';

    $.post('../Duanweb/tinhdiem.php',{'mach':mach,'dapan':dapan},function(dt1){
    });
    $('input:checked[class="tich1"]').html('A');

}
function click2(mach){
	// $('#bt1').addClass('cba');
	// $('#bt2').removeClass('cba');
	// $('#bt3').removeClass('cba');
	// $('#bt4').removeClass('cba');
	// var a = document.getElementById("bt1").value;
    //  alert(b);

    var dapan = 'B';

    $.post('../Duanweb/tinhdiem.php',{'mach':mach,'dapan':dapan},function(dt2){
    });
    $('input:checked[class="tich1"]').html('B');
}

function click3(mach){
	// $('#bt1').addClass('cba');
	// $('#bt2').removeClass('cba');
	// $('#bt3').removeClass('cba');
	// $('#bt4').removeClass('cba');
	// var a = document.getElementById("bt1").value;
    //  alert(b);
    var dapan = 'C';


    $.post('../Duanweb/tinhdiem.php',{'mach':mach,'dapan':dapan},function(dt3){
    });
    $('input:checked[class="tich1"]').html('C');
}

function click4(mach){
	// $('#bt1').addClass('cba');
	// $('#bt2').removeClass('cba');
	// $('#bt3').removeClass('cba');
	// $('#bt4').removeClass('cba');
	// var a = document.getElementById("bt1").value;
    //  alert(b);
    var dapan = 'D';


    $.post('../Duanweb/tinhdiem.php',{'mach':mach,'dapan':dapan},function(dt4){
    });
    $('input:checked[class="tich1"]').html('D');

}

function nopbai(){
	var n = $('input:checked[class="abc"]').length;
	$('.abc').attr('disabled', 'disabled');
	$('input.button_nb').attr('onclick','');
	$(".time_dn1").remove();
	$('input.button_nb').attr('value','Xem kết quả');
	$.post('../Duanweb/tongdiem.php',{'n':n},function(nb){
		$('span.tongdiem').css('color','red');
		$('.tongdiem').html(nb);
		$('.tongdiem').append('<sup>đ</sup>');
	});
	$('.tich').css('display','block');
	//$('.time_dn').remove();
	//$(':checked').wrap('<span style="background-color: blue"></span>')
	$('input:checked').before('<span class="glyphicon glyphicon-pencil" style="margin-top: .6em;float: right;color: #389bff"></span>');
	$.post('../Duanweb/socau.php',function(sc){
		$.post('../Duanweb/socaudung.php',function(scd){
			$('#dalam').html(n);
			$('#socau').html(sc);
			$('#dung').html(scd);
			$('#sai').html(n-scd);
			$.post('../Duanweb/reset_scd.php',function(){

			});
		});
	});
	$.post('../Duanweb/update_lt.php',function(){

	});
}

function chtracnghiem(){
	$.post('../Duanweb/chtracnghiem.php',{},function(data){
		$('.dt').html(data);
		$('.dt').css('padding','1em');
		$('.dt').css('display','block');
		$('.noidung1').attr('align','');
		$('.dt').css('text-align','left');
	});
}
var abc1 = 60;
var so=60;
var sang2 = 0;



function demNguoc(){
	
	if(sang2 == 0){
		$.post('../Duanweb/thoigianthi.php',{'so':so},function(tgt){
			so=tgt;
			sang2 = 1;
		});
	}
	so--;
	abc1--;
	
	$(".time_dn").css('display','block');

	if(so != 0){
		document.getElementById("gio").innerHTML = Math.floor(so/3600);
		document.getElementById("phut").innerHTML = Math.floor((so%3600)/60);
		document.getElementById("giay").innerHTML = abc1;
		if(abc1 == 0)
			abc1 = 60;
		setTimeout("demNguoc()",1000);
	}else{
		var n = $('input:checked[class="abc"]').length;
		$('.abc').attr('disabled', 'disabled');
		$('input.button_nb').attr('onclick','');
			$('.time_dn1').html('Hết giờ');
	$('input.button_nb').attr('value','Xem kết quả');
			$.post('../Duanweb/tongdiem.php',{'n':n},function(nb){
				$('span.tongdiem').css('color','red');
				$('.tongdiem').html(nb);
				$('.tongdiem').append('<sup>đ</sup>');
			});
			$('.tich').css('display','block');
	//$(':checked').wrap('<span style="background-color: blue"></span>')
	$('input:checked').before('<span class="glyphicon glyphicon-pencil" style="margin-top: .6em;float: right;color: #389bff"></span>');
	$.post('../Duanweb/socau.php',function(sc){
		$.post('../Duanweb/socaudung.php',function(scd){
			$('#dalam').html(n);
			$('#socau').html(sc);
			$('#dung').html(scd);
			$('#sai').html(n-scd);
			$.post('../Duanweb/reset_scd.php',function(){

			});
		});
	});
	$.post('../Duanweb/update_lt.php',function(){
		
	});
}
}
tinhdiem = 0;