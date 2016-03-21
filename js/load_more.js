window.onload = function () {
    event_setup();
}

function load_more() {
  var x = document.getElementById("loadMore");
  x.onclick = function() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      document.getElementById("moreHere").innerHTML = xhttp.responseText;
      event_setup();
    }
    xhttp.open("GET", "/statuses-1.html", true);
    xhttp.send();
  }
}

function event_setup() {
  post_a_status();
  load_more();
  reply();
}
