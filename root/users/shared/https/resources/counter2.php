<?php 
//echo date('Y-m-d H:i:s', time());
//$date1 = strtotime("2014-04-28 13:00:00");
//$date2 = new DateTime("now");
//$diff = date_diff($date1, $date2);

/*$date1 = strtotime("2014-04-28 13:00:00");
$date2 = time();
$subTime = $date1 - $date2;
$y = 2014;
$d = ($subTime/(60*60*24))%365;
$h = ($subTime/(60*60))%24;
$m = ($subTime/60)%60;

echo "Difference between ".date('Y-m-d H:i:s',$date1)." and ".date('Y-m-d H:i:s',$date2)." is:\n";*/

//$remainder = "2014-04-".$d." " .$h.":".$m.":00";

//echo $remainder;

$serverTime = new DateTime();
echo $serverTime->getTimestamp();
?>
<!DOCTYPE HTML>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<script type="text/javascript" src="countdown/TimeCircles.js"></script>
<script>
$(document).ready(function() {
    var serverTime = <?php echo $serverTime->getTimestamp(); ?>;
	var dateNow = new Date().getTime();
	
	var timeDifference = '';
	
	if(dateNow > serverTime){
		timeDifference = dateNow - serverTime;
		}
		else{
			timeDifference = serverTime - dateNow;	
			}
	$('#DateCountdown').attr('data-date', timeDifference.getDate());
	
/*	// create a new javascript Date object based on the timestamp
// multiplied by 1000 so that the argument is in milliseconds, not seconds
var date = new Date(dateNow*1000);
var year = date.getFullYear();
var month = date.getMonth();
var days = date.getDate();
// hours part from the timestamp
var hours = date.getHours();
// minutes part from the timestamp
var minutes = date.getMinutes();
// seconds part from the timestamp
var seconds = date.getSeconds();

// will display time in 10:30:23 format
var formattedTime = year+'-'+month+'-'+days+' '+ hours + ':' + minutes + ':' + seconds;
var parsed = parse_date(date);
	alert(parsed);*/
});
</script>
<link rel="stylesheet" href="countdown/TimeCircles.css" />
<style>
body{
	background-color: #E9E9E9;
	}
</style>
</head>
<body>
<div id="DateCountdown" data-date="" style="width: 100%;"></div>
<div class="container"> </div>
<script>
$("#DateCountdown").TimeCircles({
    "animation": "smooth",
    "bg_width": 0.4,
    "fg_width": 0.03666666666666667,
    "circle_bg_color": "#90989F",
    "time": {
        "Days": {
            "text": "Days",
            "color": "#40484F",
            "show": true
        },
        "Hours": {
            "text": "Hours",
            "color": "#40484F",
            "show": true
        },
        "Minutes": {
            "text": "Minutes",
            "color": "#40484F",
            "show": true
        },
        "Seconds": {
            "text": "Seconds",
            "color": "#40484F",
            "show": true
        }
    }
});
        </script>
</body>
</html>