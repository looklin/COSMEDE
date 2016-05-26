function getCookie(str){
	var tmp,reg=new RegExp("(^| )"+str+"=([^;]*)(;|$)","gi");
	if(tmp=reg.exec(document.cookie))
	return(tmp[2]);
	return null;
}
	var img1="<img src='"+getCookie("pic_1")+"'>";
	var img2="<img src='"+getCookie("pic_2")+"'>";
	if(!!getCookie("name_1")){
$('.main-middle').prepend(img1);
}
if(!!getCookie("name_2")){
$('.main-middle').prepend(img2);
}