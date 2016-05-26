$(function(){
		$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
		$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
		$('#addcart1').click(function (){
			var count1=Number($('#select1').val());
			var price1=80.00*count1;
			var str=Number(getCookie("count_1"));
			var pic=$("#prouct-1-1").attr("src");
			var text=$("#product-1-2").html();
			if(!!getCookie("count_1")){
				str+=count1;
				addCookie("count_1", str, 10);//数量
				addCookie("price_1",str*80.00,10);//总价
				$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
				$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
			}else{
				addCookie("pic_1",pic,10);//图片
				addCookie("name_1",text,10);//名称
				// addCookie("one_price_1",oneprice,10);//单价
				addCookie("count_1",count1,10);
				addCookie('price_1',price1,10);
				$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
				$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
			}
			
		})
		$('#addcart2').click(function(){
			var count2=Number($('#select2').val());
			var price2=16.00*count2; 
			var str=Number(getCookie("count_2"));
			var pic=$("#prouct-2-1").attr("src");
			var text=$("#product-2-2").html();
			if(!!getCookie("count_2")){
				str+=count2;	
				addCookie("count_2", str, 10);
				addCookie("price_2",str*16.00,10);
				$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
				$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
			}else{
				addCookie("pic_2",pic,10);//图片
				addCookie("name_2",text,10);//名称
				addCookie("count_2",count2,10);
				addCookie('price_2',price2,10);
				$('.shoppingcar').html((Number(getCookie("count_1")))+(Number(getCookie("count_2")))+"<b>件货品</b>");
				$('.shoppingmoney').html(Number(getCookie("price_1"))+Number(getCookie("price_2"))+" <b>USD</b>");
			}
			
		})
	function addCookie(_name, _value, _day){
		var d = new Date();
		d.setDate(d.getDate()+_day);
		document.cookie=_name+"="+_value+"; expires="+d.toGMTString();
	}
   
	// function getCookie(_name){
	// 	var str="";
	// 	var col=document.cookie.split("; ");
	// 	for(var i in col){
	// 		var arr=col[i].split("=");
	// 		if(arr[0]==_name){
	// 			str=arr[1];
	// 			break;
	// 		}
	// 	}
	// 	return str;
	// }

	function getCookie(str)
{
var tmp,reg=new RegExp("(^| )"+str+"=([^;]*)(;|$)","gi");
if(tmp=reg.exec(document.cookie))
return(tmp[2]);
return null;
}

// function setCookie(name,value)
// {
// document.cookie=name+ "=" + value;
// }
	
	})