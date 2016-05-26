	function checkForm()
	{
		if($('#email').val()!=$('#email2').val()){
			alert("两次邮箱账号不一致，请注意查看！")
			return false;
		}
		var pwd1=(/[A-Za-z].*[0-9]|[0-9].*[A-Za-z]/);
		if($('#pwd1').val().match(pwd1)){

		}else{
			alert("密码格式错误！");
			return false;
		}
		if($('#pwd1').val().length<6){
			alert('密码位数不够！');
			return false;
		}
		if($('#pwd1').val()!=$('#pwd2').val()){
			alert("两次密码不一致，请注意查看！")
			return false;
		}
	}
//ajax 实时监测用户账号
	function ajaxSubmit(){
		$.ajax({
   			type: "POST",
   			url: "checkUsername.php",
   			data: {email:escape($('#email').val())},
   			success: function(data){
	    		if(data==0){
							$('#msg').html("*恭喜,此用户没有被注册");
						}else if(data==1){
							$('#msg').html("*抱歉,此用户已经被注册");
						}else
						{
							$('#msg').html("");
						}
   			}
		});
	}
	// cookie
	$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
	$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
		function getCookie(str)
{
var tmp,reg=new RegExp("(^| )"+str+"=([^;]*)(;|$)","gi");
if(tmp=reg.exec(document.cookie))
return(tmp[2]);
return null;
}

