<!DOCTYPE HTML>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<script type="text/javascript" src="countdown/TimeCircles.js"></script>
<link rel="stylesheet" href="countdown/TimeCircles.css" />
<style>
@import url(http://fonts.googleapis.com/css?family=Quicksand);
body {
		    background: #90c4f4;
	color: white;
	text-shadow: -1px -1px 0 rgba(0, 0, 0, 0.18);
}
p {
	text-align: center;
	font: 200% 'Quicksand';
}
</style>
</head>
<body>
<section id="center">
  <div id="DateCountdown" data-date="2014-04-28 13:00:00" style="width: 50%;margin-bottom: 50px;"></div>
  <p>Are You Ready?</p>
  <div class="container"></div>
</section>
<script>
$("#DateCountdown").TimeCircles({
    "animation": "tick",
    "bg_width": 0.4,
    "fg_width": 0.03666666666666667,
    "circle_bg_color": "#b6d7f6",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#519FE9",
            "show": false
        },
        "Hours": {
            "text": "Hours",
            "color": "#519FE9",
            "show": false
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#519FE9",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#519FE9",
            "show": true
        }
    }
});

jQuery.fn.center = function () {
    this.css("position", "absolute");
    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + $(window).scrollLeft()) + "px");
    return this;
}

$(document).ready(function(){
	$('#center').center();
	});
</script>
</body>
</html>