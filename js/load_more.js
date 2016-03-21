window.onload = function () {
    event_setup();
}

function load_more(res) {
  var x = document.getElementById("loadMore");
  x.onclick = function() {
    ajaxGet("/statuses-1.html", function(res) {
      document.getElementById("moreHere").innerHTML = res;
      event_setup();
    });
  }
}

function event_setup() {
  post_a_status();
  load_more();
  reply();
}
