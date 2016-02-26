document.addEventListener("DOMContentLoaded", function () {
    var icons = document.querySelectorAll(".replyIcon");
    for (x = 0; x < icons.length; x++) {
        icons[x].addEventListener("click", function (e) {
            var box = document.querySelector('#' + this.dataset.id)
            box.toggle('showBox')
        });
    }
});