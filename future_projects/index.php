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
                    This idea is an all in one travelling application that is for both IOS and Android Play Store.
                    This idea is suppose to implement all the required necessities required to travel such as an Air BnB and Uber. It
                    is an all in one application that lets everyday people travel by using their phone. For example, lets say someone
                    who was visiting Windsor had this application downloaded on their phone, they would be able to visit popular
                    sites from Windsor like the casino and the waterfront.
                    It would make it easy to navigate to see all tbe special locations in Windsor and if you are indeed
                    interested to go to that location, you can use our build in Uber app. (this is just my though) In addition, you can
                    use coupons we provide on our app at specific location, such as restaurants, museum, or parks. This application
                    would be unique as it is an all-in-one application that would make it easier for students to travel and enjoy their
                    lives. This idea is also a unique idea because Uber and Air Bnb is just starting to become popular among the
                    world; so by combining both applications into one app it would make it a lot easier for the people.

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
