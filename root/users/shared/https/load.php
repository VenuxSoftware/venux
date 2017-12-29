<?php

// These lines are mandatory.
require_once './pages/detector/Mobile_Detect.php';

$detect = new Mobile_Detect;

// Redirect the user to your mobile version of the site.
if(($detect->isMobile())||($detect->isTablet())){
    header('Location: http://venux.com/2d');
    die();
}
//require './statisrics-includes/header.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="google-site-verification" content="AfitdOVBerOegjBZnI_gft0gIpBVPWJgxlANgY0b64Q" />
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
    <meta name="wot-verification" content="a0be24b6016cdf94dcca" />
    <meta name="msvalidate.01" content="90FEB867FD1B9BC6962F1740E8BC07AB" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta content="user-scalable=no" name="viewport" />
    <title>Venux</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/hint.css" type="text/css">
    <!--<link rel="stylesheet" href="css/mCustomScrollbar.css" type="text/css">-->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel='shortcut icon' type='image/x-icon' href='venux.ico' />
    <link rel="image_src" href="images/main_logo.jpg" />

    <!-- General Meta -->
    <meta name="copyright" content="2013-2014 Venux LLC. Copyright. All rights reserved." />
    <meta name="description" content="Software development company that simplifies the experience of computing while allowing users to manage and secure personal data. Users can communicate with friends, family, and co-workers in a private environment." />
    <meta name="keywords" content="privacy, private chat, security, 3D website, security software, file sharing, multimedia converter, anonymous, video call, venux" />
    <meta name="robots" content="index,follow" />
    <!--  -->

    <meta property="og:title" content="Venux - Digital Privacy Reinvented" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Venux simplifies the experience of computing while allowing users to manage and secure personal data. Users can communicate with friends, family, and co-workers in a private environment." />
    <meta property="og:image" content="http://www.venux.com/images/og_image_1.jpg" />
    <meta property="og:image:secure_url" content="https://www.venux.com/images/og_image_1.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:image" content="http://www.venux.com/images/og_image_2.png" />
    <meta property="og:image:secure_url" content="https://www.venux.com/images/og_image_2.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />

    <meta property="og:site_name" content="Venux" />
    <meta property="og:url" content="http://www.venux.com" />
    <meta property="fb:app_id" content="539762679399902" />

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/+Venux/posts" />
    <link rel="publisher" href="https://plus.google.com/+Venux" />

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Venux - Digital Privacy Reinvented">
    <meta itemprop="description" content="Venux simplifies the experience of computing while allowing users to manage and secure personal data. Users can communicate with friends, family, and co-workers in a private environment.">
    <meta itemprop="image" content="http://www.venux.com/images/og_image_1.jpg">

    <!--jQuery + loading-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/loading.js" async ></script>

</head>
<body>

    <!--     <main>
        <img id="mainLogo" src="images/main_logo.jpg" />
    </main> -->

    <noscript>
        <div id="noJsErrorWrapper">
            <div id="jsError" class="center">
                <img src="images/error-logo.png" />
                <div id="jsErrorMsg">
                    <p>JavaScript is disabled in your browser.</p>
                    <p>Please enable it to view our 3D website.</p>
                    <p class="m-top20"><a href="/2d">View our 2D website</a>.</p>
                </div>
            </div>
        </div>
    </noscript>

    <!--     <section id="siteBadges">
        <a href="http://kck.st/1o6zEdZ" target="_blank"><div class="badge-kickstarter"></div></a>
    </section> -->

    <div id="progressWrapper">
        <div id="progress" class="center">
            <!--            <img id="2DLogo" src="images/loading-logo.png" />-->
        <!--    <img id="2DLogo" src="images/loading/1.png" class="animated" interval="75" max="45" pattern="images/loading/#.png" /> --> 
            
         <!--   <img id="2DLogo" src="images/logo/1.png" class="pointer animated" interval="75" max="23" pattern="images/logo/#.png" /> --> 
            
            <img id="2DLogo" src="images/loading/load.gif" class="animated" />
            
            <!--            <div id="progressbar" class="center">
                <div id="bar"></div>
            </div>-
            <!--            <div id="message">0%</div>-->
        </div>
    </div>

    <div id="legalWrapper">
        <iframe id="legal"></iframe>
    </div>

    <!--PULLOUT border on top of window-->
    <!--<section id="videoWrapper">
		<div id="videoContainer" class="center">
		    <div id="videoClose" class="closeButton"></div>
		    <p class="mainText">About Us</p>
		    <div class="divider"></div>
			<video width="90%" controls>
			    <source src="video/privacy.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			</video>
		    <p class="mainText">Multimedia Engine Trailer</p>
		    <div class="divider"></div>
			<video width="90%" controls>
			    <source src="video/trailer.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			</video>
		</div>
		<div id="videoPullOut">
		    <img class="filmIcon" src="images/icons/film.svg" />
		    <div class="newsText">Videos</div>
		</div>
	    </section>-->

    <div id="container"></div>
    <div id="topCopy">
        <p>2013-2014 Venux LLC. Copyright. All rights reserved.</p>
        <p>
            <a href="/2d">2D Website</a> | <span id="privacyPolicy">Privacy Policy</span> | <span id="termsConditions">Terms & Conditions</span>
        </p>
    </div>
    <div id="zoomErrorWrapper">
        <div id="zoomError" class="center">
            <img src="images/error-logo.png" />
            <div id="zoomErrorMsg">
                <p>Your current zoom level is set to <strong><span id="zoomErrorLevel"></span></strong>.</p>
                <p>Please reset it to 100% to properly view the website.</p>
            </div>
        </div>
    </div>

    <footer class="transition">
        <div id="logoContainer" class="transition">
            <img id="logoSpin" src="images/logo/1.png" class="pointer animated" interval="75" max="23" pattern="images/logo/#.png" />
        </div>
        <!--<div id="logoContainer" class="hint--top hint--rounded" data-hint="Home">
		<img id="logoSpin" src="images/logo/1.png" class="pointer animated" interval="75" max="23" pattern="images/logo/#.png" />
	    </div>-->

        <!-- data hints are in main.js -->
        <div id="footerInfo">
            <div id="helpIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="    Help    "></div>
            <div id="aboutIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="About Us"></div>
            <div id="contactIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="Contact Us"></div>
            <div id="newsIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="News"></div>
        </div>

        <div id="socialMediaWrapper">
            <div id="socialMedia">
                <div id="forumIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="Venux Forum"></div>
                <div id="facebookIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="Facebook"></div>
                <div id="googleplusIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="Google+"></div>
                <div id="twitterIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="Twitter"></div>
                <!--<div id="linkedinIcon" class="icon"></div>-->
                <div id="youtubeIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="YouTube"></div>
                <!--<div id="pintrestIcon" class="icon"></div>-->
            </div>
        </div>

        <div id="effectsContainerWrapper">
            <div id="effectsContainer">
                <div id="parallaxViewIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="3D Parallax View (Glasses Required)"></div>
                <div id="anaglyphViewIcon" class="icon icon-opacity hint--top hint--rounded" data-hint="3D Anaglyph View (Glasses Required)"></div>
            </div>
        </div>
    </footer>

    <!--Custom Scroll-->
    <!--    <script src="js/mCustomScrollbar.min.js"></script>-->
    <script src="js/threejs/build/three.min.js"></script>
    <script src="js/threejs/Detector.js"></script>
    <script>
        function isIE() {
            return ((navigator.appName == 'Microsoft Internet Explorer') || ((navigator.appName == 'Netscape') && (new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})").exec(navigator.userAgent) != null)));
        }

        if (isIE() || !Detector.webgl) {
            window.location = "/2d";
        }
    </script>
    <!--Stats-->
    <script src="js/threejs/libs/stats.min.js"></script>
    <script src="js/threejs/loaders/ColladaLoader.js"></script>
    <script src="js/threejs/controls/OrbitControls.js"></script>
    <!--EFFECTS-->
    <script src="js/threejs/effects/AnaglyphEffect.js"></script>
    <script src="js/threejs/effects/ParallaxBarrierEffect.js"></script>
    <script src="js/threejs/effects/OculusRiftEffect.js"></script>
    <!--tween-->
    <script src="js/threejs/libs/tween.min.js"></script>
    <!--Resize Window Event-->
    <script src="js/threejs/libs/THREEx.WindowResize.js"></script>
    <!--CSS3 Renderer-->
    <script src="js/threejs/renderers/CSS3DRenderer.js"></script>

    <script src="js/detect-zoom.min.js"></script>
    <!--<script>
    
	    function adjust() {
		var zoom = detectZoom.zoom().toFixed(2);
		var device = detectZoom.device().toFixed(2);
		var currentLevel = Math.round(device * 100);
		var adjustedZoom = 1 / device;
    
		$('#progressWrapper, #topCopy, #zoomError, footer').css({
		    'zoom': adjustedZoom,
		    '-moz-transform': 'scale(' + adjustedZoom + ')'
		});
    
		console.log(zoom, device, adjustedZoom);
    
		$('#zoomErrorLevel').html(currentLevel + '%');
    
		if (adjustedZoom !== 1) {
		    $('#zoomErrorWrapper').show();
		}
		else {
		    $('#zoomErrorWrapper').hide();
		}
	    }
    
	    $(document).ready(function () {
		adjust();
		$(window).on('resize', adjust);
	    });
    
	</script>-->
    <script src="js/settings.js"></script>
    <script src="js/main.js"></script>
    <script src="/ga.js"></script>
</body>
</html>
<?php
//require './statisrics-includes/footer.php';
?>