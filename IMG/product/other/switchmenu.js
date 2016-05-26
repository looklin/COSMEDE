function switchmenu(obj){
  var browserName=navigator.appName; 
  
  if(document.getElementById){
    var el = document.getElementById(obj);
    var ar = document.getElementById("maindiv").getElementsByTagName("tr");
    
    if (browserName!="Netscape") {
      if(el.style.display != "block"){
        for (var i=0; i<ar.length; i++){
          if (ar[i].className=="submenu") ar[i].style.display = "none";
        }
        el.style.display = "block";
      } else {
        el.style.display = "none";
      }
    } else {
      if(el.style.display != "table-row"){
        for (var i=0; i<ar.length; i++){
          if (ar[i].className=="submenu") ar[i].style.display = "none";
        }
        el.style.display = "table-row";
      } else {
        el.style.display = "none";
      }
    }
  }
}