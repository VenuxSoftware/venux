$(document).ready(function () {
    var images = [];
    function _preload() {
        for (i = 0; i < _preload.arguments.length; i++) {
            images[i] = new Image();
            images[i].src = _preload.arguments[i];
        }
    }

    _preload(
        //LOADING
        //'../images/loading/1.png',
        //'../images/loading/2.png',
        //'../images/loading/3.png',
        //'../images/loading/4.png',
        //'../images/loading/5.png',
        //'../images/loading/6.png',
        //'../images/loading/7.png',
        //'../images/loading/8.png',
        //'../images/loading/9.png',
        //'../images/loading/10.png',
        //'../images/loading/11.png',
        //'../images/loading/12.png',
        //'../images/loading/13.png',
        //'../images/loading/14.png',
        //'../images/loading/15.png',
        //'../images/loading/16.png',
        //'../images/loading/17.png',
        //'../images/loading/18.png',
        //'../images/loading/19.png',
        //'../images/loading/20.png',
        //'../images/loading/21.png',
        //'../images/loading/22.png',
        //'../images/loading/23.png',
        //'../images/loading/24.png',
        //'../images/loading/25.png',
        //'../images/loading/26.png',
        //'../images/loading/27.png',
        //'../images/loading/28.png',
        //'../images/loading/29.png',
        //'../images/loading/30.png',
        //'../images/loading/31.png',
        //'../images/loading/32.png',
        //'../images/loading/33.png',
        //'../images/loading/34.png',
        //'../images/loading/35.png',
        //'../images/loading/36.png',
        //'../images/loading/37.png',
        //'../images/loading/38.png',
        //'../images/loading/39.png',
        //'../images/loading/40.png',
        //'../images/loading/41.png',
        //'../images/loading/42.png',
        //'../images/loading/43.png',
        //'../images/loading/44.png',
        //'../images/loading/45.png'
    );

    var _intervalID;
    function _animateImage(Index) {
        $("img#2DLogo:eq(" + Index + ")").each(function (Index) {
            if (!$(this).is(":visible")) {
                _intervalID = parseInt($(this).attr("intervalid"));
                clearInterval(_intervalID);
            }
            else {
                var max = parseInt($(this).attr("max"));
                var pattern = $(this).attr("pattern");
                var index = parseInt($(this).attr("index"));
                index++;

                if (index > max) {
                    index = 1;
                    // clearInterval(_intervalID);
                    //_animateImage(Index);
                }

                var src = pattern.replace("#", index);
                $(this).attr("index", index);
                $(this).attr("src", src);
            }
        });
    }

    $("img#2DLogo").each(function (Index) {
        var interval = $(this).attr("interval");
        $(this).attr("index", "0");
        _intervalID = setInterval(function () { _animateImage(Index); }, interval);
        $(this).attr("intervalid", _intervalID);
    });

});