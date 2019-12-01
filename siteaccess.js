/*
var nrsecacc =5;        // number of secconds till ajax function is called to send data to php
var url = window.location;
var title = document.title;

// AJAX function

function veri_gonder() {
    alert("Hello");
    var ob_ajax = (window.ActiveXObject) ? new ActiveXObject('Microsoft.XMLHTTP') : new XMLHttpRequest();    // create the XMLHttpRequest object
    var data = 'url='+ encodeURIComponent(url.pathname + url.search) +'&title='+ encodeURIComponent(title) +'&isajax=1'; // data to send to php
    // Sends data
    ob_ajax.open('GET', '/bilgi_ekle.php', true); //HERE set correct path to siteaccess.php
    ob_ajax.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    ob_ajax.send(data);
    alert("Hello");
}
*/
// calls ajaxPgAcc() after $nrsecacc secconds
//setTimeout(ajaxPgAcc, nrsecacc *1000);

function veri_gonder(gelen) {
  var url = window.location;
  var xmlHttp = new XMLHttpRequest();
  var data = '?site_id='+gelen;
  xmlHttp.open( "GET", './bilgi_ekle.php' + data, true ); // false for synchronous request
  xmlHttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xmlHttp.send();
  return xmlHttp.responseText;
}
