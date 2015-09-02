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
                <nav><li><a href="profile.php" title="Mates" ><font color= "#d49d25">Mates</font></a></li> |
                    <li><a href="events.php" title="Events">Events </a></li>	|	
                    <li><a href="gallery.php" title="Gallery">Gallery </a></li> </nav>
                <h6><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
                    <b id="logout"><a href="logout.php">Log Out</a></b> </h6>
            </div>  

            <div class="maincontent">
                <div id="set-1">

                    <div class="image-row">
                        <div class="image-set">
                            <a class="example-image-link" href="img/logos/braaf-1.png" title="Brandon Braaf"data-lightbox="example-set" data-title="I'm Brandon an editor & motion designer based in Cape Town. I am a third year multimedia student at CPUT. I am currently teaching myself Cinema 4D, because it is an awesome tool for building fluid title designs and animation. http://braaf.tk/"><img class="example-image" src="img/braaf-1.png" alt=""/></a>

                            <a class="example-image-link" href="img/logos/bruintjies-1.png" title="Brandon Bruintjies" data-lightbox="example-set" data-title="This a recreation of a Mcafee computer security software company logo, inspired by a superhero in representing the work of the Mcafee brand."><img class="example-image" src="img/bruintjies-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/cahiel-1.png" title="Isabel Cahiel"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/cahiel-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/carelseB-1.png" title="Brent Carelse"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/carelseB-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/image-1.png" title="Chad Carelse"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/image-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/fakier-1.png" title="Abdullah Fakier"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/fakier-1.png" alt="" /></a>
                        </div>

                    </div></div>

                <div class="image-row"><div id="Side-left">
                        <div class="image-set">
                            <a class="example-image-link" href="img/logos/hendricks-1.png" title="Jade Hendricks"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/hendricks-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/jonas-1.png" title="Esethu Jonas"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/jonas-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/mabaleka-1.png" title="Thusang Mabaleka"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/mabaleka-1.png" alt="" /></a>
                        </div></div></div>

                <div id="banner">
                    <div id="slider1_container" style="position: relative; width: 670px;
                         height: 368px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                 background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(..img/loading.gif) no-repeat center center;
                                 top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 670px; height: 368px;
                             overflow: hidden;">
                            <div>
                                <img u=image src="img/banner-1.png" />
                            </div>
                            <div>
                                <img u=image src="img/banner-2.png" />
                            </div>
                            <div>
                                <img u=image src="img/banner-3.png" />
                            </div>
                            <div>
                                <img u=image src="img/banner-4.png" />
                            </div>
                        </div>
                    </div>

                </div>

                <div class="image-row"><div id="side-right"><div class="image-set">
                            <a class="example-image-link" href="img/logos/herbert-1.png" title="Jamie Herbert"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/herbert-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/kalombo-1.png" title="Francky Kalombo"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/kalombo-1.png" alt="" /></a>

                            <a class="example-image-link" href="img/logos/image-1.png" title="Shureta Mallemella"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/image-1.png" alt="" /></a>
                        </div></div></div>
                <div id="set-2">                      <div class="image-set">
                        <a class="example-image-link" href="img/logos/makohliso-1.png" title="Kamva Makohliso"data-lightbox="example-set" data-title="I see myself as charismatic and enthusiastic , motivate others and push them to do well for themselves. Multimedia has been very broad and has led me to marketing. New opportunities,I jump for them, that I have."><img class="example-image" src="img/makohliso-1.png" alt=""/></a>

                        <a class="example-image-link" href="img/logos/mase-1.png" title="Monica Mase" data-lightbox="example-set" data-title="I consider myself as a hardworking and ambitious person. Designing is a major part of my life, and so I spend most of the day watching movies and downloading music. http://masemonica.tk/"><img class="example-image" src="img/mase-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/matsheketsheke-1.png" title="Ronewa Matsheketsheke"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/matsheketsheke-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/mfiki-1.png" title="Andile Mfiki"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/mfiki-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/nkolose-1.png" title="Apiwe Nkolose"data-lightbox="example-set" data-title="Graphic designer I have a keen sense for problem solving. I’m a hard working person. I see myself as a highly motivated and ambitious person. I welcome change and adjustment to any opportunity to learn and improve my skills. "><img class="example-image" src="img/nkolose-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/nomnganga-1.png" title="Siphahle Nomnganga"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/nomnganga-1.png" alt="" /></a>


                        <a class="example-image-link" href="img/logos/papu-1.png" title="Bulumko Papu"data-lightbox="example-set" data-title="This is a minimalistic logo recreation for a civil engineering company based in Cape Town. created for an integrated project of 2014"><img class="example-image" src="img/papu-1.png" alt=""/></a>

                        <a class="example-image-link" href="img/logos/pedrito-1.png" title="Dior Pedrito" data-lightbox="example-set" data-title="This a recreation of a Mcafee computer security software company logo, inspired by a superhero in representing the work of the Mcafee brand."><img class="example-image" src="img/pedrito-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/pontack-1.png" title="Daniel Pontack"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/pontack-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/sedibane-1.png" title="Machele Sedibane"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/sedibane-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/swartz-1.png" title="Jashwin Swartz"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/swartz-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/taliwe-1.png" title="Lwando Taliwe"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/taliwe-1.png" alt="" /></a>


                        <a class="example-image-link" href="img/logos/tima-1.png" title="Siyabulela Tima"data-lightbox="example-set" data-title="The name is Tima Sipoko, a digital/print designer and web developer from Cape Town, South Africa. I am dedicated to building brands and making the business world less ugly than it is - to view my portfolio http://timasipoko.tk"><img class="example-image" src="img/tima-1.png" alt=""/></a>

                        <a class="example-image-link" href="img/logos/tisane-1.png" title="Thabang Tisane" data-lightbox="example-set" data-title="This a recreation of a Mcafee computer security software company logo, inspired by a superhero in representing the work of the Mcafee brand."><img class="example-image" src="img/tisane-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/voko-1.png" title="Sisanda Voko"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/voko-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/yiwana-1.png" title="Chwayita Yiwana"data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/yiwana-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/za-1.png" title="Daniel Tadeusz Zawistowski"data-lightbox="example-set" data-title="This is a minimalistic logo representation on a cover magazine for Ngunified studio, a multimedia initiative based in Cape town, created in 2014."><img class="example-image" src="img/za-1.png" alt="" /></a>

                        <a class="example-image-link" href="img/logos/image-2.png" title=""data-lightbox="example-set" data-title="The Res4Res festival logo is for an annual theatre event from University of Cape Town inspired by the energy of students and campus lifestyle."><img class="example-image" src="img/best-1.png" alt="" /></a>
                    </div>
                </div>
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
