//test
$(document).ready(function () {

    var images = [];
    function preload() {
        for (i = 0; i < preload.arguments.length; i++) {
            images[i] = new Image();
            images[i].src = preload.arguments[i];
        }
    }
    preload(
        '../images/logo/1.png',
        '../images/logo/2.png',
        '../images/logo/3.png',
        '../images/logo/4.png',
        '../images/logo/5.png',
        '../images/logo/6.png',
        '../images/logo/7.png',
        '../images/logo/8.png',
        '../images/logo/9.png',
        '../images/logo/10.png',
        '../images/logo/11.png',
        '../images/logo/12.png',
        '../images/logo/13.png',
        '../images/logo/14.png',
        '../images/logo/15.png',
        '../images/logo/16.png',
        '../images/logo/17.png',
        '../images/logo/18.png',
        '../images/logo/19.png',
        '../images/logo/20.png',
        '../images/logo/21.png',
        '../images/logo/22.png',
        '../images/logo/23.png',
        '../images/icons/socialmedia/icons.png'
    );



    $('#newsPullOut, #newsClose').click(function () {
        var newsContainer = $('#newsContainer');
        newsContainer.show();
        newsContainer.animate({
            right: parseInt(newsContainer.css('right'), 10) == 0 ? -newsContainer.outerWidth() : 0
        });
        $('#newsPullOut').toggle();
    });
    var intervalID;
    var allowMouseOver = true;
    function animateImage(Index) {
        $("img.animated:eq(" + Index + ")").each(function (Index) {
            if (!$(this).is(":visible")) {
                intervalID = parseInt($(this).attr("intervalid"));
                clearInterval(intervalID);
            } else {
                var max = parseInt($(this).attr("max"));
                var pattern = $(this).attr("pattern");
                var index = parseInt($(this).attr("index"));
                index++;
                if (index > max) {
                    index = 1;
                    clearInterval(intervalID);
                    allowMouseOver = true;
                }
                var src = pattern.replace("#", index);
                $(this).attr("index", index);
                $(this).attr("src", src);
            }
        });
    }
    function initialiseAnimatedImages() {
        allowMouseOver = false;
        $("img.animated").each(function (Index) {
            var interval = $(this).attr("interval");
            $(this).attr("index", "0");
            intervalID = setInterval(function () { animateImage(Index); }, interval);
            $(this).attr("intervalid", intervalID);
        });
    }
    $('#logoSpin').mouseover(function () {
        if (allowMouseOver) {
            initialiseAnimatedImages();
        }
    });
    $('#facebookIcon').click(function () {
        window.open("https://www.facebook.com/venuxsoftware");
    });
    $('#googleplusIcon').click(function () {
        window.open("https://plus.google.com/+Venux/");
    });
    $('#twitterIcon').click(function () {
        window.open("https://twitter.com/venux_software");
    });
    $('#youtubeIcon').click(function () {
        window.open(" http://www.youtube.com/user/VenuxSoftware");
    });
});
