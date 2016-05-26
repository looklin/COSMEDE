
(function(){
	addCookie("name_1","",-10);
	addCookie("pic_1","",-10);
	addCookie("price_1","",-10);
	addCookie("count_1","",-10);
function addCookie(_name, _value, _day){
		var d = new Date();
		d.setDate(d.getDate()+_day);
		document.cookie=_name+"="+_value+"; expires="+d.toGMTString();
	}
})();
	
