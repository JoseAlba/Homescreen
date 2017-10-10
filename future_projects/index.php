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
            '../css/style.css', '../css/foundation.css', 'http://fonts.googleapis.com/css?family=Rokkitt',
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

        <div class="row">
            <div class="small-10 small-centered columns">

                <h4 class="text-center">Bon Voyage<br><small>(Personal Project)</small></h4>

                <h5 class="text-center">
                    This idea is an all-in-one travelling application that is available on both IOS and Android. This app will implement all the required necessities required to travel, such as accommodation and transport. For example, someone who was visiting Windsor could use this app to visit popular sites from Windsor like the casino and the waterfront by making transportation simple, and then book accommodations. In addition, you can use coupons we provide on our app at specific locations, such as restaurants, museum, or parks. This will be how the app produces revenue, through company promotions. This application would be unique as it is an all-in-one application that would make it easier for students to travel and enjoy their lives. This idea is also a unique because it utilizes both Uber and Airbnb API in one platform.
                </h5>

            </div>
        </div>


<?php

html5_js(
    array('../js/vendor/jquery.js', '../js/apps/android_symbol.js'
    )
);

?>

</body>
</html>
