function addCookie(_name, _value, _day){
	var d = new Date();
	d.setDate(d.getDate()+_day);
	document.cookie=_name+"="+_value+"; expires="+d.toGMTString();
}
function getCookie(str){
	var tmp,reg=new RegExp("(^| )"+str+"=([^;]*)(;|$)","gi");
	if(tmp=reg.exec(document.cookie))
	return(tmp[2]);
	return null;
}

var img1="<img src='"+getCookie("pic_1")+"'>";
var img2="<img src='"+getCookie("pic_2")+"'>";
var a1="<a href='"+'shoppingcar.php'+"' onclick='"+'del(1);'+"'>删除</a>";
var a2="<a href='"+'shoppingcar.php'+"' onclick='"+'del(2);'+"'>删除</a>";
if((!!getCookie("name_1"))||(!!getCookie("name_2"))){
	$('.has-goods').css({display:'block'}).siblings('.no-goods').css({display:'none'});
	$('.reg').css({display:'block'});
	// alert("有东西");
}else{
	$('.has-goods').css({display:'none'}).siblings('.no-goods').css({display:'block'});
	// alert("没东西");
}


if(!!getCookie("name_1")){
$('tbody').prepend("<tr><td>"+img1+"</td><td>"+getCookie("name_1")+"</td><td><b>80.00</b></td><td>"+getCookie("count_1")+"</td><td>"+getCookie("price_1")+"</td><td>"+a1+"</td></tr>");
}
if(!!getCookie("name_2")){
$('tbody').prepend("<tr><td>"+img2+"</td><td>"+getCookie("name_2")+"</td><td><b>16.00</b></td><td>"+getCookie("count_2")+"</td><td>"+getCookie("price_2")+"</td><td>"+a2+"</td></tr>");
}
function del(index){
	addCookie("name_"+index,"",-10);
	addCookie("pic_"+index,"",-10);
	addCookie("price_"+index,"",-10);
	addCookie("count_"+index,"",-10);
}

	$('#choice li:eq(0)').click(function(){
		$(this).addClass("selected-li").siblings().removeClass("selected-li");
		$('#box-2 p').eq(0).css({display:'block'}).siblings().css({display:'none'});
	}
		
		
	)
	$('#choice li').eq(1).click(function(){
		$(this).addClass("selected-li").siblings().removeClass("selected-li");
		$('#box-2 p').eq(1).css({display:'block'}).siblings().css({display:'none'});
	})