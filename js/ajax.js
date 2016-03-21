function ajaxGet(url, onSuccess) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    onSuccess(xhttp.responseText);
  }
  xhttp.open("GET", url, true);
  xhttp.send();
}
