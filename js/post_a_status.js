document.addEventListener("DOMContentLoaded", function () {
    var veil = document.getElementById('screenContent');
    document.getElementById('tweetButton').addEventListener('click', function () {
        if (veil.className == 'hideTweet') {
            veil.className = '';
        }
    })

    document.getElementById('closeButton').addEventListener('click', function (event) {
        veil.className = 'hideTweet';
    })
});