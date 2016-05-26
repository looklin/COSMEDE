function valButton(btn) 
{
    var cnt = -1;
    for (var i=btn.length-1; i > -1; i--) 
    {
        if (btn[i].checked) 
        	{cnt = i; i = -1;}
    }
    if (cnt > -1) return btn[cnt].value;
    else return null;
}

function getLength(str) {
	tmp = new String(str);
	return tmp.length;
}

function isLeapYear(intYear) {
	if (intYear % 100 == 0) {
		if (intYear % 400 == 0)
			return true;
		else
			return false;
	}
	else {
		if ((intYear % 4) == 0)
			return true;
		else
			return false;
	}
}

function check_date(dateStr) 
{
	if (dateStr == "")
		return true;
	dateArray = new String(dateStr).split("/");
	mm = dateArray[0];
	dd = dateArray[1];
	yyyy = dateArray[2];
	//alert("mm = " + mm + ", dd = " + dd + ", yyyy = " + yyyy);
	if (isNaN(mm) || isNaN(dd) || isNaN(yyyy))
		return false;
	var daysOfMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	if (!(isLeapYear(yyyy) && (mm == 2) &&  (dd <= 29)) && !(dd <= daysOfMonth[mm-1]))
		return false;
	return true;
}
function pageload(fieldname) {
	if (pageload.arguments.length == 0){
		if (document.forms.length > 0) {
		var fld = document.forms[0];
		for (i = 0; i < fld.length; i++)
			if (fld.elements[i].type == "text" || fld.elements[i].type == "textarea" || fld.elements[i].type == "password") {
				if (fld.elements[i].disabled==false){
					fld.elements[i].focus();
					break;
				}
			}
		}
	}
	else {
		if (fieldname == false) return;
		else {
			var fld = document.forms[0];
			fld.elements[fieldname].focus();
		}
	}
}

function openfullwin(dest, name, features){
	var str = "left=0,screenX=0,top=0,screenY=0";
	if (window.screen) {
  		var ah = screen.availHeight - 30;
  		var aw = screen.availWidth - 10;
  		str += ",height=" + ah;
  		str += ",innerHeight=" + ah;
  		str += ",width=" + aw;
  		str += ",innerWidth=" + aw;
  		str += ",scrollbars";
	}
	else {
  		str += ",resizable";
	}
	return window.open(dest, name, str + features);
}

function opencenterwin(dest, name, w, h, features){
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops = 'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars';
	win = window.open(dest, name, winprops + features)
	if (parseInt(navigator.appVersion) >= 4){
		win.window.focus();
	}
}

function imgover(imgname, gifname){
	imgname.src = gifname;
}
function imgout(imgname, gifname){
	imgname.src = gifname;
}

//-------------------------------------------------------------------
// Trim functions
//   Returns string with whitespace trimmed
//-------------------------------------------------------------------
function LTrim(str){
	for(var i=0;str.charAt(i)==" ";i++);
	return str.substring(i,str.length);
	}
function RTrim(str){
	for(var i=str.length-1;str.charAt(i)==" ";i--);
	return str.substring(0,i+1);
	}
function Trim(str){return LTrim(RTrim(str));}
//-------------------------------------------------------------------
// isNull(value)
//   Returns true if value is null
//-------------------------------------------------------------------
function isNull(val){return(val==null);}

//-------------------------------------------------------------------
// isBlank(value)
//   Returns true if value only contains spaces
//-------------------------------------------------------------------
function isBlank(val){
	if(val==null){return true;}
	for(var i=0;i<val.length;i++) {
		if ((val.charAt(i)!=' ')&&(val.charAt(i)!="\t")&&(val.charAt(i)!="\n")&&(val.charAt(i)!="\r")){return false;}
		}
	return true;
	}

//-------------------------------------------------------------------
// isLetter(c)
//   Returns true if c is a letter
//-------------------------------------------------------------------
function isLetter(c){
	if (c.length > 1) return false;
	return ( ((c >= "a") && (c <= "z")) || ((c >= "A") && (c <= "Z")) )
	}
//-------------------------------------------------------------------
// isDigit(value)
//   Returns true if value is a 1-character digit
//-------------------------------------------------------------------
function isDigit(num) {
	if (num.length>1){return false;}
	var string="1234567890";
	if (string.indexOf(num)!=-1){return true;}
	return false;
	}

function inString (str, needle)
{
	if (str.indexOf(needle)==-1) return false;
	return true;
}
//-------------------------------------------------------------------
// isAlphabetic(str)
//   Returns true if str contains letters only
//-------------------------------------------------------------------
function isAlphabetic(str){   
    for (var i=0;i<str.length;i++){   
        if (!isLetter(str.charAt(i)))
        return false;
    }
    return true;
}
//-------------------------------------------------------------------
// isAlphanumeric(value)
//   Returns true if value contains letters and digits ()
//-------------------------------------------------------------------
function isAlphanumeric(val){
	//if (!isLetter(val.charAt(0))){return false;}
	var letter_count=0;
	var digit_count=0;
	for(var i=0;i<val.length;i++){
        if (isLetter(val.charAt(i)))
        	letter_count=1;
        if (isDigit(val.charAt(i)))
        	digit_count=1;        	
        if (! (isLetter(val.charAt(i)) || isDigit(val.charAt(i)) ) )
        return false;        	
    }
    if ((letter_count==0)||(digit_count==0))
    	return false;
    else	
    	return true;
	}

//-------------------------------------------------------------------
// isAlphanumericHyphen(value)
//   Returns true if value contains letters and/or digits and/or hyphens (first character must be a letter)
//-------------------------------------------------------------------
function isAlphanumericHyphen(val){
	if (!isLetter(val.charAt(0))){return false;}
	for(var i=0;i<val.length;i++){
        if (! (isLetter(val.charAt(i)) || isDigit(val.charAt(i)) || val.charAt(i)=='-' ) )
        return false;
    }
    return true;
	}	
//-------------------------------------------------------------------
// isInteger(value)
//   Returns true if value contains all digits
//-------------------------------------------------------------------
function isInteger(val){
	for(var i=0;i<val.length;i++){
		if(!isDigit(val.charAt(i))){return false;}
		}
	return true;
	}

//-------------------------------------------------------------------
// isInteger( s (string), a (int), b (int) )
//   Returns true if s is between a and b
//-------------------------------------------------------------------
function isIntegerInRange (s, a, b) {
    if (!isInteger(s)) return false;
    var num = parseInt (s);
    return ((num >= a) && (num <= b));
}

function isIntegerInRangeForTA (s, a, b) {
    if (!isInteger(s)) return false;
    var num = parseInt (s);
    return ((num >= a) && (num <= b));
}

//-------------------------------------------------------------------
// isNumeric(value)
//   Option second param: + positive only, - negative only, +- all.
//	 Positive only if no second param.
//-------------------------------------------------------------------
function isNumeric(val)
{
	var i = (arguments.length>1) ? arguments[1] : '';
	if ((i=='') || (i=='+')){
		if (!isDigit(val.charAt(0))) return false;
	}
	if (i=='-'){
		if (val.charAt(0) != '-') return false;
	}
	return(parseFloat(val,10)==(val*1));
}

function daysInFebruary(year) {
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (  ((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0) ) ) ? 29 : 28 );
	}

//----------------------------------------------------------------
// Done by Lewis @ 5 Jun 2003
// isDateTime(DateTimeString)
// Returns true if Datetime string is a correct YYYY-MM-DD HH:mm:ss format
//--------------------------------------------------------------
function isDateTime(strDateTime)
{
	
	if (strDateTime.length == 19){
		var strDate = strDateTime.substr(0,10);
		var strTime = strDateTime.substr(11,8);
	}
	else if(strDateTime.length == 16){
		var strDate = strDateTime.substr(0,10);
		var strTime = strDateTime.substr(11,5);
		strTime = strTime + ':00';
	}
	else return false;
	
	return (isDateYmd(strDate) && isTimeHms(strTime));
}

//-------------------------------------------------------------------
// isDateYmd(DateString)
//   Returns true if DateString is a correct YYYY-MM-DD format
//-------------------------------------------------------------------
function isDateYmd(strDate){
	if (((strDate.charAt(4) != '-') || (strDate.charAt(7) != '-')) && ((strDate.charAt(4) != '/') || (strDate.charAt(7) != '/')) ) return false;
	var stryear = strDate.substr(0,4);
	var strmonth = strDate.substr(5,2);
	if (strmonth.substr(0,1)=='0') strmonth = strmonth.substr(1,1);
	var strday = strDate.substr(8,2);
	if (strday.substr(0,1)=='0') strday = strday.substr(1,1);
	if (isDate(stryear,strmonth,strday)) return true;
	return false;
	}

//-----------------------------------------------------------------
// Done by Lewis @ 5 Jun 2003
// isTimeHms(TimeString)
// return true if TimeString is a correct hh:mm:ss
//-----------------------------------------------------------------
function isTimeHms(strTime) { var T 
  if ((T = /^(\d\d):(\d\d):(\d\d)$/.exec(strTime)) == null)
    { return false } // bad format
  if (!isTime(T[1], T[2], T[3])) { return false } // bad value
  return true }

//-----------------------------------------------------------------
// Done by Lewis @ 5 Jun 2003
// isTime(hour, min, sec)
// 	return true if string arguments hour, mins and sec from a valid time
//----------------------------------------------------------------------
function isTime(h, m, s)
{ with (new Date(0,0,0,h,m,s))
    return ((getHours()==h) && (getMinutes()==m)) }

//-------------------------------------------------------------------
// isDate(year, month, day)
//   returns true if string arguments year, month, and day form a valid date
//-------------------------------------------------------------------
function isDate (year, month, day){   
	// max year 2079
    if (! (isIntegerInRange(year,1000,2999) && isIntegerInRange(month,1,12) && isIntegerInRange(day,1,31)))
    	return false;
	var intYear = parseInt(year);
    var intMonth = parseInt(month);
	var intDay = parseInt(day);
    // catch invalid days, except for February

	var daysInMonth = new Array (12)
	daysInMonth[1] = 31;
	daysInMonth[2] = 29;   // must programmatically check this
	daysInMonth[3] = 31;
	daysInMonth[4] = 30;
	daysInMonth[5] = 31;
	daysInMonth[6] = 30;
	daysInMonth[7] = 31;
	daysInMonth[8] = 31;
	daysInMonth[9] = 30;
	daysInMonth[10] = 31;
	daysInMonth[11] = 30;
	daysInMonth[12] = 31;

    if (intDay > daysInMonth[intMonth]) return false; 
    if ((intMonth == 2) && (intDay > daysInFebruary(intYear))) return false;
    return true;
	}
//-------------------------------------------------------------------
// isArray(obj)
// Returns true if the object is an array, else false
//-------------------------------------------------------------------
function isArray(obj){return(typeof(obj.length)=="undefined")?false:true;}



//-------------------------------------------------------------------
// setNullIfBlank(input_object)
//   Sets a form field to "" if it isBlank()
//-------------------------------------------------------------------
function setNullIfBlank(obj){if(isBlank(obj.value)){obj.value="";}}

//-------------------------------------------------------------------
// setFieldsToUpperCase(input_object)
//   Sets value of form field toUpperCase() for all fields passed
//-------------------------------------------------------------------
function setFieldsToUpperCase(){
	for(var i=0;i<arguments.length;i++) {
		arguments[i].value = arguments[i].value.toUpperCase();
		}
	}

//-------------------------------------------------------------------
// disallowBlank(input_object[,message[,true]])
//   Checks a form field for a blank value. Optionally alerts if 
//   blank and focuses
//-------------------------------------------------------------------
function disallowBlank(obj){
	var msg=(arguments.length>1)?arguments[1]:"";
	var dofocus=(arguments.length>2)?arguments[2]:false;
	if (isBlank(getInputValue(obj))){
		if(!isBlank(msg)){alert(msg);}
		if(dofocus){
			if (isArray(obj) && (typeof(obj.type)=="undefined")) {obj=obj[0];}
			if(obj.type=="text"||obj.type=="textarea"||obj.type=="password") { obj.select(); }
			obj.focus();
			}
		return true;
		}
	return false;
	}

//-------------------------------------------------------------------
// disallowModify(input_object[,message[,true]])
//   Checks a form field for a value different than defaultValue. 
//   Optionally alerts and focuses
//-------------------------------------------------------------------
function disallowModify(obj){
	var msg=(arguments.length>1)?arguments[1]:"";
	var dofocus=(arguments.length>2)?arguments[2]:false;
	if (getInputValue(obj)!=getInputDefaultValue(obj)){
		if(!isBlank(msg)){alert(msg);}
		if(dofocus){
			if (isArray(obj) && (typeof(obj.type)=="undefined")) {obj=obj[0];}
			if(obj.type=="text"||obj.type=="textarea"||obj.type=="password") { obj.select(); }
			obj.focus();
			}
		setInputValue(obj,getInputDefaultValue(obj));
		return true;
		}
	return false;
	}

//-------------------------------------------------------------------
// commifyArray(array)
//   Take an array of values and turn it into a comma-separated string
//-------------------------------------------------------------------
function commifyArray(obj){
	var s="";
	if(obj==null||obj.length<=0){return s;}
	for(var i=0;i<obj.length;i++){
		s=s+((s=="")?"":",")+obj[i].toString();
		}
	return s;
	}

//-------------------------------------------------------------------
// getSingleInputValue(input_object,use_default)
//   Utility function used by others
//-------------------------------------------------------------------
function getSingleInputValue(obj,use_default) {
	switch(obj.type){
		case 'radio': case 'checkbox': return(((use_default)?obj.defaultChecked:obj.checked)?obj.value:null);
		case 'text': case 'hidden': case 'textarea': return(use_default)?obj.defaultValue:obj.value;
		case 'password': return((use_default)?null:obj.value);
		case 'select-one':
			if(use_default){
				var o=obj.options;
				for(var i=0;i<o.length;i++){if(o[i].defaultSelected){return o[i].value;}}
				return o[0].value;
				}
			if (obj.selectedIndex<0){return null;}
			return(obj.options.length>0)?obj.options[obj.selectedIndex].value:null;
		case 'select-multiple': 
			var values=new Array();
			for(var i=0;i<obj.options.length;i++) {
				if((use_default&&obj.options[i].defaultSelected)||(!use_default&&obj.options[i].selected)) {
					values[values.length]=obj.options[i].value;
					}
				}
			return (values.length==0)?null:commifyArray(values);
		}
	alert("FATAL ERROR: Field type "+obj.type+" is not supported for this function");
	return null;
	}

//-------------------------------------------------------------------
// getSingleInputText(input_object,use_default)
//   Utility function used by others
//-------------------------------------------------------------------
function getSingleInputText(obj,use_default) {
	switch(obj.type){
		case 'radio': case 'checkbox': 	return "";
		case 'text': case 'hidden': case 'textarea': return(use_default)?obj.defaultValue:obj.value;
		case 'password': return((use_default)?null:obj.value);
		case 'select-one':
			if(use_default){
				var o=obj.options;
				for(var i=0;i<o.length;i++){if(o[i].defaultSelected){return o[i].text;}}
				return o[0].text;
				}
			if (obj.selectedIndex<0){return null;}
			return(obj.options.length>0)?obj.options[obj.selectedIndex].text:null;
		case 'select-multiple': 
			var values=new Array();
			for(var i=0;i<obj.options.length;i++) {
				if((use_default&&obj.options[i].defaultSelected)||(!use_default&&obj.options[i].selected)) {
					values[values.length]=obj.options[i].text;
					}
				}
			return (values.length==0)?null:commifyArray(values);
		}
	alert("FATAL ERROR: Field type "+obj.type+" is not supported for this function");
	return null;
	}

//-------------------------------------------------------------------
// setSingleInputValue(input_object,value)
//   Utility function used by others
//-------------------------------------------------------------------
function setSingleInputValue(obj,value) {
	switch(obj.type){
		case 'radio': case 'checkbox': if(obj.value==value){obj.checked=true;return true;}else{obj.checked=false;return false;}
		case 'text': case 'hidden': case 'textarea': case 'password': obj.value=value;return true;
		case 'select-one': case 'select-multiple': 
			var o=obj.options;
			for(var i=0;i<o.length;i++){
				if(o[i].value==value){o[i].selected=true;}
				else{o[i].selected=false;}
				}
			return true;
		}
	alert("FATAL ERROR: Field type "+obj.type+" is not supported for this function");
	return false;
	}

//-------------------------------------------------------------------
// getInputValue(input_object)
//   Get the value of any form input field
//   Multiple-select fields are returned as comma-separated values
//   (Doesn't support input types: button,file,reset,submit)
//-------------------------------------------------------------------
function getInputValue(obj) {
	var use_default=(arguments.length>1)?arguments[1]:false;
	if (isArray(obj) && (typeof(obj.type)=="undefined")) {
		var values=new Array();
		for(var i=0;i<obj.length;i++){
			var v=getSingleInputValue(obj[i],use_default);
			if(v!=null){values[values.length]=v;}
			}
		return commifyArray(values);
		}
	return getSingleInputValue(obj,use_default);
	}

//-------------------------------------------------------------------
// getInputText(input_object)
//   Get the displayed text of any form input field
//   Multiple-select fields are returned as comma-separated values
//   (Doesn't support input types: button,file,reset,submit)
//-------------------------------------------------------------------
function getInputText(obj) {
	var use_default=(arguments.length>1)?arguments[1]:false;
	if (isArray(obj) && (typeof(obj.type)=="undefined")) {
		var values=new Array();
		for(var i=0;i<obj.length;i++){
			var v=getSingleInputText(obj[i],use_default);
			if(v!=null){values[values.length]=v;}
			}
		return commifyArray(values);
		}
	return getSingleInputText(obj,use_default);
	}

//-------------------------------------------------------------------
// getInputDefaultValue(input_object)
//   Get the default value of any form input field when it was created
//   Multiple-select fields are returned as comma-separated values
//   (Doesn't support input types: button,file,password,reset,submit)
//-------------------------------------------------------------------
function getInputDefaultValue(obj){return getInputValue(obj,true);}

//-------------------------------------------------------------------
// isChanged(input_object)
//   Returns true if input object's value has changed since it was
//   created.
//-------------------------------------------------------------------
function isChanged(obj){return(getInputValue(obj)!=getInputDefaultValue(obj));}

//-------------------------------------------------------------------
// setInputValue(obj,value)
//   Set the value of any form field. In cases where no matching value
//   is available (select, radio, etc) then no option will be selected
//   (Doesn't support input types: button,file,password,reset,submit)
//-------------------------------------------------------------------
function setInputValue(obj,value) {
	var use_default=(arguments.length>1)?arguments[1]:false;
	if(isArray(obj)&&(typeof(obj.type)=="undefined")){
		for(var i=0;i<obj.length;i++){setSingleInputValue(obj[i],value);}
		}
	else{setSingleInputValue(obj,value);}
	}
	
//-------------------------------------------------------------------
// isFormModified(form_object,hidden_fields,ignore_fields)
//   Check to see if anything in a form has been changed. By default
//   it will check all visible form elements and ignore all hidden 
//   fields. 
//   You can pass a comma-separated list of field names to check in
//   addition to visible fields (for hiddens, etc).
//   You can also pass a comma-separated list of field names to be
//   ignored in the check.
//-------------------------------------------------------------------
function isFormModified(theform,hidden_fields,ignore_fields){
	if(hidden_fields==null){hidden_fields="";}
	if(ignore_fields==null){ignore_fields="";}
	var hiddenFields=new Object();
	var ignoreFields=new Object();
	var i,field;
	var hidden_fields_array=hidden_fields.split(',');
	for (i=0;i<hidden_fields_array.length;i++) {
		hiddenFields[Trim(hidden_fields_array[i])]=true;
		}
	var ignore_fields_array=ignore_fields.split(',');
	for (i=0;i<ignore_fields_array.length;i++) {
		ignoreFields[Trim(ignore_fields_array[i])]=true;
		}
	for (i=0;i<theform.elements.length;i++) {
		var changed=false;
		var name=theform.elements[i].name;
		if(!isBlank(name)){
			var type=theform[name].type;
			if(!ignoreFields[name]){
				if(type=="hidden"&&hiddenFields[name]){changed=isChanged(theform[name]);}
				else if(type=="hidden"){changed=false;}
				else {changed=isChanged(theform[name]);}
				}
			}
		if(changed){return true;}
		}
		return false;
	}

function currencyFormat(fld, milSep, decSep, e) {
var sep = 0;
var key = '';
var i = j = 0;
var len = len2 = 0;
var strCheck = '0123456789';
var aux = aux2 = '';
var whichCode = (window.Event) ? e.which : e.keyCode;
if (whichCode == 13) return true;  // Enter
key = String.fromCharCode(whichCode);  // Get key value from key code
if (strCheck.indexOf(key) == -1) return false;  // Not a valid key
len = fld.value.length;
for(i = 0; i < len; i++)
if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
aux = '';
for(; i < len; i++)
if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
aux += key;
len = aux.length;
if (len == 0) fld.value = '';
if (len == 1) fld.value = '0'+ decSep + '0' + aux;
if (len == 2) fld.value = '0'+ decSep + aux;
if (len > 2) {
aux2 = '';
for (j = 0, i = len - 3; i >= 0; i--) {
if (j == 3) {
aux2 += milSep;
j = 0;
}
aux2 += aux.charAt(i);
j++;
}
fld.value = '';
len2 = aux2.length;
for (i = len2 - 1; i >= 0; i--)
fld.value += aux2.charAt(i);
fld.value += decSep + aux.substr(len - 2, len);
}
return false;
}

function checkDecimals(val){
	var decallowed = 2;  // how many decimals are allowed?
	if (!isNumeric(val) || val == "") return false;
	if (val.indexOf('.') == -1) val += ".";
	var dectext = val.substring(val.indexOf('.')+1, val.length);
	if (dectext.length > decallowed) return false;
	return true;
}

// Compare two date
// put anything for the 3rd argument to donate blank dates are not allowed
function CompareDate(SmallDate,LargeDate){
	if (arguments.length == 2 && isBlank(SmallDate) && isBlank(LargeDate)) return true;
	if ( isDateYmd(SmallDate) && isDateYmd(LargeDate) && (ToDate(LargeDate)>=ToDate(SmallDate))) return true;
	return false;  
}


// Compare two datetime
// Done by Lewis @ 6 Jun 2003
// Compart two date time
//
// @param boolean blnCanEqual => false if largedate must greater than smalldate
//						 => true if largedate must greater than or equal smalldate
function CompareDateTime(SmallDate,LargeDate, blnIsGreater){
	if (isBlank(SmallDate) || isBlank(LargeDate)) return true;
	if ( isDateTime(SmallDate) && isDateTime(LargeDate))
		if (blnIsGreater)
		{
	  		if (ToDateTime(LargeDate)>=ToDateTime(SmallDate)) return true;
	  	}else
	  		if (ToDateTime(LargeDate)>ToDateTime(SmallDate)) return true;
	  		
	return false;  
}

function ToDateTime(DateValue)
{
	var vsec;
	if (DateValue.length == 16)
		vsec = '00';
	else
		vsec = DateValue.substr(17,2);
	
	var humDate = new Date(Date.UTC(
		stripLeadingZeroes(DateValue.substr(0,4)),
		stripLeadingZeroes(DateValue.substr(5,2))-1,
		stripLeadingZeroes(DateValue.substr(8,2)),
		stripLeadingZeroes(DateValue.substr(11,2)),
		stripLeadingZeroes(DateValue.substr(14,2)),
		stripLeadingZeroes(vsec)
	));
	return (humDate.getTime()/1000.0) ;
}

function stripLeadingZeroes(it)
{
	if ((it.length >1) && (it.substr(0,1) == "0"))
		return it.substr(1);
	else
		return it;
}


// convert string to Date UTC format
function ToDate(strDate) {
	var mtempdate;
	var deli =strDate.substr(4,1);
	var tmp =strDate.substr(5);
  	var mpos=tmp.indexOf(deli);
  	var strmon=tmp.substr(0,mpos);
	var stryear=strDate.substr(0,4);
	var strday =tmp.substr(mpos+1);
	mtempdate=Date.UTC(stryear,strmon-1,strday);
	return mtempdate;
}

function verifyIP (IPvalue) {
	var ipPattern = /^(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})$/;
	var ipArray = IPvalue.match(ipPattern); 
	var thisSegment = '';
	if (IPvalue == "0.0.0.0" || IPvalue == "255.255.255.255" || ipArray == null)
		return false;
	else {
		for (i = 0; i < 4; i++) {
			thisSegment = ipArray[i];
			if (thisSegment > 255) return false;
			if ((i == 0) && (thisSegment > 255)) return false;
		}
	}
	return true;
}

function verifyEmail(s){
	//if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(s)) return true;
	var regexpEmail = /\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/;
	if (regexpEmail.test(s))
		return true;
	else
		return false;
}

function strstr(needle, str)
{
	var len = needle.length;
	if (str.substring(0,len) != needle)	return false;
	return true;
}

function replaceSubstring(inputString, fromString, toString) {
   // Goes through the inputString and replaces every occurrence of fromString with toString
   var temp = inputString;
   if (fromString == "") {
      return inputString;
   }
   if (toString.indexOf(fromString) == -1) { // If the string being replaced is not a part of the replacement string (normal situation)
      while (temp.indexOf(fromString) != -1) {
         var toTheLeft = temp.substring(0, temp.indexOf(fromString));
         var toTheRight = temp.substring(temp.indexOf(fromString)+fromString.length, temp.length);
         temp = toTheLeft + toString + toTheRight;
      }
   } else { // String being replaced is part of replacement string (like "+" being replaced with "++") - prevent an infinite loop
      var midStrings = new Array("~", "`", "_", "^", "#");
      var midStringLen = 1;
      var midString = "";
      // Find a string that doesn't exist in the inputString to be used
      // as an "inbetween" string
      while (midString == "") {
         for (var i=0; i < midStrings.length; i++) {
            var tempMidString = "";
            for (var j=0; j < midStringLen; j++) { tempMidString += midStrings[i]; }
            if (fromString.indexOf(tempMidString) == -1) {
               midString = tempMidString;
               i = midStrings.length + 1;
            }
         }
      } // Keep on going until we build an "inbetween" string that doesn't exist
      // Now go through and do two replaces - first, replace the "fromString" with the "inbetween" string
      while (temp.indexOf(fromString) != -1) {
         var toTheLeft = temp.substring(0, temp.indexOf(fromString));
         var toTheRight = temp.substring(temp.indexOf(fromString)+fromString.length, temp.length);
         temp = toTheLeft + midString + toTheRight;
      }
      // Next, replace the "inbetween" string with the "toString"
      while (temp.indexOf(midString) != -1) {
         var toTheLeft = temp.substring(0, temp.indexOf(midString));
         var toTheRight = temp.substring(temp.indexOf(midString)+midString.length, temp.length);
         temp = toTheLeft + toString + toTheRight;
      }
   } // Ends the check to see if the string being replaced is part of the replacement string or not
   return temp; // Send the updated string back to the user
} // Ends the "replaceSubstring" function

function validateID(x) {
		
	var i = x.length;
	if ( ( x.charAt(i-3)!="(" ) || ( x.charAt(i-1)!=")" ) ){		
		return(false);
	}
	if(x.length!=10 && x.length!=11){		
		return(false);
	}
	var k = 0;
	y = x.substr(0,i-3) + x.substr(i-2,1);

	if (y.length==8){
		y = "b" + y;
		sum = 36 * 9;
	}
	else {
		charCode = y.charCodeAt(0);
		if(charCode >= 65 && charCode <= 90)//only capital letter is allowed	
			sum = (y.charCodeAt(0) - 65 + 10) * 9;
		else{
			return(false);
		}
	}

	for(j = 1; j<y.length-1; j++)
	{
		charCode = y.charCodeAt(j);
		if(charCode >= 65 && charCode <= 90)
			sum = sum + (y.charCodeAt(j) - 65 + 10) * (9 - j);
		else
			sum = sum + y.charAt(j) * (9 - j);
	}
	sum = sum % 11;
	if (sum == 0 && y.charAt(8) == "0")
		return(true);

	sum = 11 - sum;
	if (sum == 10 && y.charAt(8) == "A")
		return(true);
	if (sum == y.charAt(8))
		return(true);
	else{
		return(false);
	}	
}
//-------------------------------------------------------------------
// isValidLength(max,min,str)
//   Returns true if string length is valid
//-------------------------------------------------------------------
function isValidLength(maxL,minL,str)
{
	var slen=str.length	
	if ((slen>maxL)||(slen<minL))
		return false;
	else
    	return true;
}


//-------------------------------------------------------------------
// isValidLength1000(value)
//   Returns true if string length<=1000
//-------------------------------------------------------------------
function isValidLength1000(str3)
{
	var slen3=str3.length	
	if (slen3>1000)
		{return false;}
	else
    	return true;
}

