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
            'css/page_scroll.css', 'css/reset.css', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,700',
            '../css/foundation.css', '../css/normalize.css'
            ,
        )
    );

    html5_js(
        array('js/modernizr.js',));
    ?>



</head>

<body data-hijacking="off" data-animation="gallery">

<div class="row">
    <div class="small-9 small-centered columns">
        <h2 class="text-center">Contact</h2>
        <h5 class="text-center">Incase you forgot you can contact me by talking to the robot on the left or you can email me by clicking
            <a href="mailto:albaj@uwindsor.ca" target="_top">this</a>
            or call 1(519)-591-3542
            <br>

            Enjoy the videos to the left
        </h5>
    </div>
</div>

<div class="row">
    <div class="small-12 medium-6 large-6 columns">
        <div class="flex-video text-center">
            <iframe src="https://www.youtube.com/embed/KNYcDWBWnmg" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <div class="flex-video">
            <iframe src="https://www.youtube.com/embed/CshpbmLpHzw" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <div class="flex-video">
            <iframe src="https://www.youtube.com/embed/w5snnCVk7DE" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="small-12 medium-6 large-6 columns">
        <div class="flex-video">
            <iframe src="https://www.youtube.com/embed/-ABRgHhJtAc" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php

html5_js(
    array( 'js/jquery-2.1.4.js', 'js/velocity.min.js',
        'js/velocity.ui.min.js', 'js/main.js'
    )
);

?>

</body>
</html>
