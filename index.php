<?php
$file = 'people.txt';
// The new person to add to the file
//echo $person;
$mail = $_POST["email"];
$person = $mail . "\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hotdrop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="favicon.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-45067099-1', 'gethotdrop.com');
          ga('send', 'pageview');

        </script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">

            <header>

                <div class="header-left">
                    <a href="http://gethotdrop.com"><img src="img/icon-logo.png" alt="Hotdrop Logo"></a>
                </div>

                <div class="header-right">
                    <a href="http://twitter.com/gethotdrop" target="_blank"><img src="img/icon-twitter.png" alt="Twitter"></a>
                    <a href="http://facebook.com/gethotdrop" target="_blank"><img src="img/icon-facebook.png" alt="Facebook"></a>
                </div>

            </header>

            <div class="teaser" id="teaser">
                <img src="img/teaser-screen.png">
            </div>

            <div class="content" id="content">

                <a href="http://gethotdrop.com"><h1>Hotdrop</h1></a>
                <h2>connections through spaces</h2>

                <form action="index.php" method="post">
                    <div>
                        <input type="text" name="email" id="name" placeholder="stay tuned via email" value="" tabindex="1" /> <input type="submit" value="SEND" class="button"/>
                    </div>
                </form>
                <p class="contact"><a href="mailto:hello@gethotdrop.com">(or shoot us a message)</a></p>

            </div>

        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
