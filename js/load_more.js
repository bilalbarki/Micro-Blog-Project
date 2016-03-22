window.onload = function () {
    event_setup();
}



function load_more(res) {
  var x = document.getElementById("loadMore");
  x.onclick = function() {
    x.disabled = true;
    x.toggle('offButton');
    window.setTimeout(function() {
      ajaxGet("/statuses-1.html", function(res) {
        document.getElementById("moreHere").innerHTML = res;
        event_setup();
      });
      x.disabled = false;
      x.toggle('offButton');
    }, 2000);
  }
}

function event_setup() {
  post_a_status();
  load_more();
  reply();
}
