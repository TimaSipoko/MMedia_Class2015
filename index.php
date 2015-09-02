<?php
include('login.php'); // Includes Login Script

if (isset($_SESSION['login_user'])) {
    header("location: profile.php");
}
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

        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    </head>
    <body>
        <div class="wrap"> 
            <div class="header">
                <div class="logo"><img src="img/logo.png" alt="" /></div>  
                <h1>MULTIMEDIA CLASS OF 2015</h1><hr><h6>Please <a href="login.html">Login</a> only if you're one of us!</h6>
            </div>  

            <div class="maincontent">

                <div class="contact">.<div id="log">
                        <form id="login_form" action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">

                                <input id="name" class="input" name="username" type="text" value="" size="30" placeholder="  Your first name..." required/><br/>
                            </div>
                            <div class="row">		    
                                <input id="password" class="input" name="password" type="password" value="" size="30" placeholder="  Password.." required /><br />
                            </div>
                            <div class="row">		    

                            </div>

                            <div class="row">

                            </div>
                            <input id="submit_button" type="submit" name="submit" value="Login" title="submit"/><br><h5>Forgot your password?<br>Hahahaha..  sorry can't help you.</h5>
                        </form>	
                        <span><?php echo $error; ?></span>
                    </div>


                </div>	
                <div class="footer"><h4>Multimedia Technology Class of 2015 </h4><h5> developed by <a href="#Tima">Tima Sipoko</a>, <a href="#Taliwe">Lwando Taliwe</a>, <a href="#CarelseB">Brent Carelse</a> and <a href="#Mase">Monica Mase</a></h5></div>


            </div>
            <!--easy2bitcoin -->
    </body>
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
    </script>
</html>



