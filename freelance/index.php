<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("d/m/Y h:i:s", time());

    require_once('../php/common.php');

    header('Content-Type: text/html');

    html5_header(
        "Jose Alba",
        array(
            'style.css', '../css/foundation.css', 'http://fonts.googleapis.com/css?family=Rokkitt',
        )
    );

    html5_js(
        array('../js/vendor/modernizr.js','../js/vendor/jquery.js', '../js/apps/menu.js'));
    ?>


    <style type="text/css">
        html {
            overflow-y: hidden;
        }
    </style>
</head>
<body>

<canvas id='canvas'></canvas>

<div class="centered">
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="FBMB8GYJ972H2">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form>
</div>



        <?php

        html5_js(
            array('../js/vendor/jquery.js', '../js/apps/oil_painting.js'
            )
        );

        ?>

</body>
</html>
