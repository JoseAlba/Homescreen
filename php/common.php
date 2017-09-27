<?php
session_start();

function html5_header($title="", $cssFiles=array())
{
    echo <<<ZZEOF
        <title>$title</title>

    		<!-- META DATA -->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="description" content="University has been the best years of my life so far! First year, I lived in a student residence where I had a fantastic time making unforgettable memories and got to experience not being dependent on my parents for the first time. Second year, I lived together with my friends and experienced my first few jobs in the program I am studying. This year I was able to move to a completely different continent and still continue to thrive. My family continues congratulating me on my success and my friends wish they lived the life I have had so far. I also now have a new group of lifelong friends around the world who think just like me. I WILL continue to thrive and succeed in the next few years. I will also do my best to do another exchange experience before I graduate. This year proved to be the most challenging, stressful, and rewarding year of my life so far. I accomplished an incredible amount in the span of one year, that I have a great amount of confidence going into my next school year."/>
        <meta name="author" content="Jose Alba">
		<meta name="keywords" content="HTML, CSS, XML, JavaScript, PHP, server side, paypal, Jose Alba">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"/>
        <link rel="icon" href="img/alba.png" type="image/png">

ZZEOF;

    foreach ($cssFiles as $cssFile)
        echo "<link rel='stylesheet' type='text/css' href='$cssFile' />\n";

}

function html5_js($jsFiles=array())
{
    foreach ($jsFiles as $jsFile)
        echo "<script src='$jsFile' type='text/javascript'></script>\n";
}

function getCurrentTime(){
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("h:i:s", time());
}

function getCurrentYear(){
    date_default_timezone_set('America/Toronto');
    $timestamp =  date("d/m/Y", time());
}