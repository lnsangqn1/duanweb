var dem;
if(dem == 1){
   	$(registerBox1).fadeIn(300);
   }
	$(document).ready(function(){

    $('a.register-window').click(function() {
    	dem = 1;
        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var registerBox1 = $(this).attr('href');
 
        //cho hiện hộp đăng nhập trong 300ms
        $(registerBox1).fadeIn(300);
 
        // thêm phần tử id="over" vào sau body
        $('body').append('<div id="over1"></div>');
        $('#over1').fadeIn(300);
        return false;
 });
 
    // khi click đóng hộp thoại
 $(document).on('click',"#over1", function(){
       $('#over1, .register').fadeOut(300, function() {
           $('#over1').remove();
       });
      return false;
 });
});


    $(document).ready(function() {
    $('a.login-window').click(function() {
        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
        var loginBox1 = $(this).attr('href');
 
        //cho hiện hộp đăng nhập trong 300ms
        $(loginBox1).fadeIn(300);
 
        // thêm phần tử id="over" vào sau body
        $('body').append('<div id="over2"></div>');
        $('#over2').fadeIn(300);
        return false;
 });
    // khi click đóng hộp thoại
 $(document).on('click',"#over2", function(){
       $('#over2, .login').fadeOut(300, function() {
           $('#over2').remove();
       });
      return false;
 });
});