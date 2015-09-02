<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Multimedia ClassOf2015</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/lightbox.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    </head>
    <body>
        <div class="wrap"> 
            <div class="header">
                <div class="logo"><img src="img/logo.png" alt="" /></div>  
                <h1>MULTIMEDIA CLASS OF 2015</h1><hr>
                <nav><li><a href="profile.php" title="Mates" >Mates </a></li> |
                    <li><a href="events.php" title="Events"><font color= "#d49d25">Events </font></a></li>	|	
                    <li><a href="gallery.php" title="Gallery">Gallery </a></li> </nav>
                <h6><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
                    <b id="logout"><a href="logout.php">Log Out</a></b> </h6>
            </div>  

            <div class="maincontent">
                <h3>There are No events yet except for GRADUATION!! NEXT YEAR 2016!!</h3>
                <img u=image src="img/untitled-1.jpg"/>
            </div>	


            <div class="footer"><h4>Multimedia Technology Class of 2015 </h4><h5> developed by <a href="#Tima">Tima Sipoko</a><a href="#Taliwe">Lwando Taliwe</a><a href="#CarelseB">Brent Carelse</a><a href="#Mase">Monica Mase</a></h5></div>


        </div>
        <!--easy2bitcoin -->
        <script src='js/jquery.min.js'></script>
        <script src="js/index.js"></script>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jssor.slider.js"></script>
        <script src="js/jssor.js"></script>

        <script>
jQuery(document).ready(function ($) {
    //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
    //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

    var _SlideshowTransitions = [
        //Fade
        {$Duration: 3000, $Opacity: 2}
    ];

    var options = {
        $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $DragOrientation: 3, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlayInterval: 1500, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $SlideshowOptions: {//[Optional] Options to specify and enable slideshow or not
            $Class: $JssorSlideshowRunner$, //[Required] Class to create instance of slideshow
            $Transitions: _SlideshowTransitions, //[Required] An array of slideshow transitions to play slideshow
            $TransitionsOrder: 1, //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
            $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
        }
    };

    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

});
        </script>

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/lightbox.js"></script>

        <script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2196019-1']);
_gaq.push(['_trackPageview']);

(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
        </script></body>
</html>


