document.addEventListener("DOMContentLoaded", function () {
    var veil = document.getElementById('screenContent');
    document.getElementById('tweetButton').addEventListener('click', function () {
        veil.toggle('hideTweet');
    })

    document.getElementById('closeButton').addEventListener('click', function (event) {
        veil.toggle('hideTweet');
    })
});