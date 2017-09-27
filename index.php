<!DOCTYPE html>
<html lang="en">
    <head>

        <?php
        require_once('php/common.php');

        header('Content-Type: text/html');

        html5_header(
            "Jose Alba",
            array(
                'css/style.css', 'css/foundation.css', 'http://fonts.googleapis.com/css?family=Rokkitt',
                'css/cf-theming.css', 'css/navigation/style.css', 'css/navigation/reset.css',
            )
        );

        html5_js(
            array('js/vendor/modernizr.js','js/vendor/jquery.js','js/apps/dom-animator.js', 'js/apps/menu.js'));
        ?>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="clipped-svg-slider/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="clipped-svg-slider/css/style.css"> <!-- Resource style -->

        <style type="text/css">
            html {
                overflow: auto;
            }
        </style>

        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="stretchy-navigation/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="stretchy-navigation/css/style.css"> <!-- Resource style -->


    </head>

    <body>
        <div class="show-for-medium-up">

            <header style="left: 0; top: 0;">

                <nav class="cd-stretchy-nav">
                    <a class="cd-nav-trigger" href="#0">
        <!--                Menu-->
                        <span aria-hidden="true"></span>
                    </a>

                    <ul>
                        <li><a href="#0" class="active" onclick="switchFrame('about')"><span>Home</span></a></li>
                        <li><a href="#0" onclick="switchFrame('projects')"><span>Projects</span></a></li>
                        <li><a href="#0" onclick="switchFrame('experience')"><span>Experience</span></a></li>
                        <li><a href="#0" onclick="switchFrame('future_projects')"><span>Future Projects</span></a></li>
                        <li><a href="#0" onclick="switchFrame('contact')"><span>Contact</span></a></li>
                        <li><a href="#0" onclick="switchFrame('freelance')"><span>Freelance</span></a></li>
                    </ul>

                    <span aria-hidden="true" class="stretchy-nav-bg"></span>
                </nav>
            </header>
        </div>

<!--    <main>-->
        <div class="show-for-medium-up">
            <iframe name="menu" src="conversational_form/index.php" frameborder=0 style="  padding: 0;
                  margin: 0;
                  border: none;
                  display: block;
                  width: 50vw;
                  height: 100vh;
                  float: left;
                  &::-webkit-scrollbar {
                    display: none;
                  }" id="menu"></iframe>
            <iframe name="right-side" src="freelance" frameborder=0 style="  padding: 0;
                  margin: 0;
                  border: none;

                  display: block;
                  width: 50vw;
                  height: 100vh;
                  float: left;
                  &::-webkit-scrollbar {
                    display: none;
                  }" id="rightPanel"></iframe>
        </div>
        <div class="show-for-small-only">
            <iframe src="small" frameborder="0" style="
            padding: 0;
            margin: 0;
            border: 0;
            display: block;
            width: 100vw;
            height: 100vh;
            &::-webkit-scrollbar {
                    display: none;
            "></iframe>
        </div>
<!--    </main>-->

        <div class="show-for-medium-up">

            <div class="cd-svg-clipped-slider" data-selected="M780,0H20C8.954,0,0,8.954,0,20v760c0,11.046,8.954,20,20,20h760c11.046,0,20-8.954,20-20V20
	C800,8.954,791.046,0,780,0z" data-lateral="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851
	c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648
	C801.401,404.544,801.401,395.456,795.796,389.851z" style="width: 20%; height: auto;">

                <div class="gallery-wrapper">
                    <ul class="gallery">
                        <li class="left">
                            <div class="svg-wrapper">
                                <svg viewBox="0 0 800 800">
                                    <title>Animated SVG</title>
                                    <defs>
                                        <clipPath id="cd-image-1">
                                            <path id="cd-morphing-path-1" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                                        </clipPath>
                                    </defs>

                                    <image height='800px' width="800px" clip-path="url(#cd-image-1)" xlink:href="img/picture_slider/img_1.jpg"></image>
                                    <use xlink:href="#cd-morphing-path-1" class="cover-layer" />
                                </svg>
                            </div> <!-- .svg-wrapper -->
                        </li>

                        <li class="selected">
                            <div class="svg-wrapper">
                                <svg viewBox="0 0 800 800">
                                    <title>Animated SVG</title>
                                    <defs>
                                        <clipPath id="cd-image-2">
                                            <path id="cd-morphing-path-2" d="M780,0H20C8.954,0,0,8.954,0,20v760c0,11.046,8.954,20,20,20h760c11.046,0,20-8.954,20-20V20 C800,8.954,791.046,0,780,0z"/>
                                        </clipPath>
                                    </defs>

                                    <image height='800px' width="800px" clip-path="url(#cd-image-2)" xlink:href="img/picture_slider/img_1.jpg"></image>
                                    <use xlink:href="#cd-morphing-path-2" class="cover-layer" />
                                </svg>
                            </div> <!-- .svg-wrapper -->
                        </li>

                        <li class="right">
                            <div class="svg-wrapper">
                                <svg viewBox="0 0 800 800">
                                    <title>Animated SVG</title>
                                    <defs>
                                        <clipPath id="cd-image-3">
                                            <path id="cd-morphing-path-3" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                                        </clipPath>
                                    </defs>

                                    <image height='800px' width="800px" clip-path="url(#cd-image-3)" xlink:href="img/picture_slider/img_1.jpg"></image>
                                    <use xlink:href="#cd-morphing-path-3" class="cover-layer" />
                                </svg>
                            </div> <!-- .svg-wrapper -->
                        </li>

                        <li>
                            <div class="svg-wrapper">
                                <svg viewBox="0 0 800 800">
                                    <title>Animated SVG</title>
                                    <defs>
                                        <clipPath id="cd-image-4">
                                            <path id="cd-morphing-path-4" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                                        </clipPath>
                                    </defs>

                                    <image height='800px' width="800px" clip-path="url(#cd-image-4)" xlink:href="img/picture_slider/img_1.jpg"></image>
                                    <use xlink:href="#cd-morphing-path-4" class="cover-layer" />
                                </svg>
                            </div> <!-- .svg-wrapper -->
                        </li>

                        <li>
                            <div class="svg-wrapper">
                                <svg viewBox="0 0 800 800">
                                    <title>Animated SVG</title>
                                    <defs>
                                        <clipPath id="cd-image-5">
                                            <path id="cd-morphing-path-5" d="M795.796,389.851L410.149,4.204c-5.605-5.605-14.692-5.605-20.297,0L4.204,389.851 c-5.605,5.605-5.605,14.692,0,20.297l385.648,385.648c5.605,5.605,14.692,5.605,20.297,0l385.648-385.648 C801.401,404.544,801.401,395.456,795.796,389.851z"/>
                                        </clipPath>
                                    </defs>

                                    <image height='800px' width="800px" clip-path="url(#cd-image-5)" xlink:href="img/picture_slider/img_1.jpg"></image>
                                    <use xlink:href="#cd-morphing-path-5" class="cover-layer" />
                                </svg>
                            </div> <!-- .svg-wrapper -->
                        </li>
                    </ul>

                    <nav>
                        <ul class="navigation">
                            <li><a href="#0" class="prev">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul>
                    </nav>
                </div> <!-- .gallery-wrapper -->

                <ul class="caption">
                    <li class="left"></li>
                    <li class="selected"></li>
                    <li class="right"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div> <!-- .cd-svg-clipped-slider -->

        </div>



    </div>
<!--    navigation-->
    <script src="stretchy-navigation/js/jquery-2.1.4.js"></script>
    <script src="stretchy-navigation/js/main.js"></script> <!-- Resource jQuery -->


<!--   svg photo-->
    <script src="clipped-svg-slider/js/modernizr-custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script>
        if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
    </script>
    <script src="clipped-svg-slider/js/snap.svg-min.js"></script>
    <script src="clipped-svg-slider/js/main.js"></script> <!-- Resource jQuery -->
    <?php

    html5_js(
        array('js/vendor/jquery.js',  'js/navigation/main.js',
             'js/constellation/constellation.js', 'js/constellation/zepto.min.js',
            'js/picture_slider/jquery-3.0.0.min.js'
//            'js/apps/ascii_art.js'
        )
    );

    ?>

    </body>
</html>


