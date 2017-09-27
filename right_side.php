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
            'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300', 'css/cf-theming.css'
        )
    );

    html5_js(
        array('js/vendor/modernizr.js','js/vendor/jquery.js'));
    ?>

    <script type="text/javascript" src="conversational_form/conversational_form.js" crossorigin></script>

</head>

<body>

<div class="contain-to-grid sticky">
    <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
        <ul class="title-area">
            <li class="name">

                <h1><a href="#">Jose Alba</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>

        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
                <li><a href="#about" onclick="smoothScroll(about)">About</a></li>
                <li><a href="#projects" onclick="smoothScroll(projects)">Projects</a></li>
                <li><a href="#experience" onclick="smoothScroll(experience)">Experience</a></li>
                <li><a href="#future" onclick="smoothScroll(future)">Future Projects</a></li>
                <li><a href="#contact" onclick="smoothScroll(contact)">Contact</a></li>
            </ul>


        </section>
    </nav>
</div>

<!--about-->


<div class="white">
    <div class="row"  id="about">
        <div class="small-12 large-centered columns">
            <br><br>
            <h2 class="text-center slow"> { ABOUT }</h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="small-12 small-centered columns">
            <h5>
                "A picture is worth a thousand words" is an English language-idiom. It refers to the notion that a complex idea can be conveyed with just a single still image or that an image of a subject conveys its meaning or essence more effectively than a description does.
                I personally love photos and believe this idiom to be true as when I look into old photos it reminds me of any lost memories. By looking at photos we can also partially tell the personality of a person.
                Videos are a combination of photos and as a result can show even more emotions than photos. Instead of writing a bibliography I would prefer to express myself through photos and videos as it more engaging than reading a book but you could also see the type of person I am.
                <br><br>
                One of my videos below is 509,689,965 bytes which is equivalent to 127,422,491 unicode letters using UTF-32 encoding.
                The amount of characters of text on an average book can be calculated as a standard hardcover book has about 300-350 per page and on average each word in 5 letters long in the English language plus a space. A typical book page has roughly 1,800 - 2,100 characters. If we consider the standard book length to be 250 pages, then each book is roughly 450,000 - 525,000 characters long.
                Considering each book is on average 500,000 characters, each one of my videos is going through 254.844982 books
                <br><br>
                Wheather you choose how much a standard video is worth mathamatically or if it can even be calculated at all. It does not change the fact that a video portrays a person fairly well.
                <br><br>

                <div class="row">
                    <div class="small-12 medium-6 large-6 columns">
                        <div class="flex-video">
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

            </h5>

            <br><br>
        </div>
        <!--<div class="row">-->
        <!--<div class="small-3 columns"><h1></h1></div>-->

        <!--<div class="small-3 columns">-->
        <!--<a href="http://josealba.org/files/BWResume2016.pdf" class="button">BW Resume </a>-->
        <!--</div>-->

        <!--<div class="small-3 columns">-->
        <!--<a href="http://josealba.org/files/Colour%20Resume.pdf" class="button">Colour Resume </a>-->
        <!--</div>-->

        <!--<div class="small-3 columns"></div>-->
    </div>
</div>

<div class="image-spacing-0 slide">
    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-2 large-block-grid-4" data-clearing>
        <li><a href="img/stocks.jpg"><img data-caption="caption here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 2 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
    </ul>
</div>
</div>


<!--<canvas id="background" class="solarized_yellow">-->
<!--<br><br>-->
<!--</canvas>-->



<!--Future Project-->
<div class="solarized_yellow">    <div class="row" id="projects">
        <div class="small-12 large-centered columns">
            <br><br>
            <h2 class="text-center slow">{ Projects }</h2>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="small-12 medium-6 columns">
            <img src="img/stocks.jpg" class="thumbnail" alt="">
        </div>

        <div class="small-12 medium-6 columns">
            <br>
            <h4 class="text-center">Financial Journey<br><small>(Blog)</small></h4>

            <h5>
                This project showcases the stocks I have bought or plan to buy. In this blog, I also explain why I bought a
                particular stock and the risks associated with buying it.
            </h5>
            <h5 class="text-center">
                <a href="#" data-reveal-id="blogModal" class="text-center">Learn More</a>
            </h5>

            <div id="blogModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2>Financial Journey</h2>
                <p class="lead">Personal Project</p>
                <div class="small-12 columns">
                    <img src="img/modal/financialjourney.png" class="thumbnail" alt="">
                </div>
                <br>
                <p>
                    As an individual my goal is to make enough passive income to live a relaxing life by the age of 30. I am currently 19 and turning 20 in a few days. I wanna do this  to show the world that becoming wealth is not merely an illusion but a possibility especially with the help of current technology. Currently I am going to my third year of computer science and have managed to pay 20,000 out of 40,000 dollars worth of student debt out of my own pocket. I have managed to work as a teaching assistant, research assistant, and Information technologist before I begin my third year at University, which is exceedingly well for my age. I plan on using my love for technology to my advantage and create an app that analysis stocks. If everything goes according to plan I will hopefully graduate with a student loan less than 50,000 and by the age of 24. Currently I have 5$ in my bank but my goal is to have a net worth of 500,000(100,000 times more than what I currently have) by the age of 30.
                    <br><br>
                    I plan on achieving my goal by creating yearly goals. I do this as it sets me up in the right direction and it gives me the ambition to achieve my ultimate goal 500,000 by the age of 30. My first goal is to put in 10,000$ into dividend stocks by the age of 21. The reason my goal does not seem like a hard goal is because I am currently a student so not only do I have to pay 20,000 per year but I am also limited to the amount of money I can earn per year. On top of that I also plan on doing an exchange in the United Kingdom during the winter semester because I believe it will gives me an edge over most students as I will gain personal and academic knowledge.  This exchange will also make it harder for me to reach my end destination as more costly to live in United Kingdom compared to Canada. Once I graduate my goals will increase drastically as I will have more time to work plus in the computer science field.
                </p>
                <p class="text-center">
                    To visit my blog click
                    <a href="http://josealba.org/financialjourney/">
                        this
                    </a>
                </p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>

        </div>
    </div>

    <br>

    <div class="row">
        <div class="small-12 medium-6 columns">
            <br>
            <h4 class="text-center">ColourJS<br><small>(Hack The North Project)</small></h4>

            <h5>
                A JavaScript tool to help manage colours.
                This library helps calculate colors to transition from color A to B to (optionally) C and so on... It can calculate analogous, complementary, primary, secondary, tertiary, warm or cool colors.
            </h5>
            <h5 class="text-center">
                <a href="#" data-reveal-id="colourJSModal" class="text-center">Learn More</a>
            </h5>

            <div id="colourJSModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2 id="modalTitle">ColoursJS</h2>
                <p class="lead">Hack The North</p>
                <div class="small-12 columns">
                    <img src="img/modal/ColoursJS.png" class="thumbnail" alt="">
                </div>
                <br>
                <p>
                    A JavaScript tool to helps manage colours.
                    <br><br>
                    <strong>Inspiration</strong>
                    While thinking of ideas for Hack The North, my buddy and I, noticed that data visualization packages such as D3 and Dygraph lack the functions to generate and manage colours.
                    <br><br>
                    <strong>What It Does</strong>
                    This library helps calculate colors to transition from color A to B to (optionally) C and so on... It can calculate analogous, complementary, primary, secondary, tertiary, warm or cool colors. This project was made at a hackathon under time constraint. I plan on working on this software with my partners into a full library.
                    <br><br>
                    <strong>Built With</strong>
                    HTML, CSS, JavaScript
                    AngularJS
                    Zurb Foundation
                </p>
                <br>
                <p class="text-center">
                    To visit the website click here
                    <a href="https://colourjs.github.io/">
                        this
                    </a>
                </p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>

        </div>

        <div class="small-12 medium-6 columns">
            <img src="img/colours.jpg" class="thumbnail" alt="">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="small-12 medium-6 columns">
            <img src="img/books.jpg" class="thumbnail" alt="">
        </div>

        <div class="small-12 medium-6 columns">
            <br>
            <h4 class="text-center">Book Webpage<br><small>(Personal Project)</small></h4>

            <h5>
                Simple decluttered user interface that allows users to navigate the website with ease and allow them to search for their required textbooks efficiently.
            </h5>
            <h5 class="text-center">
                <a href="#" data-reveal-id="bookModal" class="text-center">Learn More</a>
            </h5>

            <div id="bookModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2>Book Webpage</h2>
                <p class="lead">Personal Project</p>
                <div class="small-12 columns">
                    <img src="img/modal/books.png" class="thumbnail" alt="">
                </div>
                <p>
                    Simple decluttered user interface that allows users to navigate the website with ease and allow them to search for their required textbooks efficiently. Website allows users to log in to an account which has a history of their past textbook purchases. Users who are not logged in are allowed to navigate and browse the selection of uploaded textbooks. If they want to make a purchase / sale they are required to log in for safety measures. (ie  proof of identification)
                </p>
                <p class="text-center">
                    To visit my book webstore click
                    <a href="http://josealba.org/books/">
                        this
                    </a>
                </p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>

        </div>
    </div>

    <br>

    <div class="row">
        <div class="small-12 medium-6 columns">
            <br>
            <h4 class="text-center">HomeScreen<br><small>(Personal Project)</small></h4>

            <h5>
                I made a home screen to show all my projects on my website such as my blog, biographical webpage, and business project. The purpose of this project was to show me the possibilities JavaScript has. Plus I also used this project as a learning opportunity and learned about JavaScript libraries.
            </h5>
            <h5 class="text-center">
                <a href="#" data-reveal-id="hsModal" class="text-center">Learn More</a>
            </h5>

            <div id="hsModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                <h2>Home Screen</h2>
                <p class="lead">Personal Project</p>

                <div class="small-6 columns">
                    <img src="img/modal/homescreen.png" class="thumbnail" alt="">
                </div>
                <div class="small-6 columns">
                    <img src="img/modal/homescreen2.png" class="thumbnail" alt="">
                </div>

                <p>
                    While developing my current home screen I came up with these two designs.
                </p>
                <p class="text-center">
                    To visit my old homescreen click
                    <a href="http://josealba.org/homescreen">
                        this
                    </a>
                    or
                    <a href="http://josealba.org/homescreen2">
                        this
                    </a>
                </p>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
        </div>

        <div class="small-12 medium-6 columns">
            <img src="img/JoseAlba.png" class="thumbnail" alt="">
        </div>
    </div>
</div>

<div class="image-spacing-0 slide">
    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-2 large-block-grid-4" data-clearing>
        <li><a href="img/stocks.jpg"><img data-caption="caption here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 2 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
    </ul>
</div>


<!--<canvas id='canvas'></canvas>-->
<!--Future Project-->
<div class="row" id="future">
    <div class="small-12 large-centered columns">
        <br><br>
        <h2 class="text-center slow">Future Projects</h2>
        <hr>
    </div>
</div>

<canvas id='canvas'></canvas>

<div class="row">
    <div class="small-12 columns">
        <div>
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
</div>

<br><br>

<div class="image-spacing-0 slide">
    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-2 large-block-grid-4" data-clearing>
        <li><a href="img/stocks.jpg"><img data-caption="caption here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 2 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
    </ul>
</div>

<ul class="clearing-thumbs small-block-grid-1 medium-block-grid-1 large-block-grid-3 solarized_yellow">
    <script src="js/effects/prism.js" id="prism_javascript"></script>
    <div class="small-12 large-centered columns">
        <br><br>
        <h2 class="text-center slow">{ Experience }</h2>
        <hr>
    </div>

    <li>
        <pre>
          <code class="language-java">
              package Experience;
              import financialjourney;

              public class Experience(){
              public String teaching_assistant(){
              return "I have been working as a teaching "
              + "assistant at the University of Windsor "
              + "since January 2016. As a teaching "
              + "assistant it is my job to proctor test, "
              + "tutor students, and assist the professor "
              + "with various tasks.";
              }

              public String research_assistant(){
              return "I worked as a research assistant under "
              + "Dr.Kent for eight months. I was the "
              + "website administrator, as part of a "
              + "larger research project. I was also the "
              + "main line of communication between the "
              + "head of the project and the lower levels.";
              }

              public String information_technologists(){
              return "During the summer of 2016 I worked for "
              + "the Canadian Food Inspection Agency - A branch "
              + "for the Government of Canada. Here I installed "
              + "and configuered computer hardware, software,  "
              + "systems, networks, printers, and scanners. "
              + "Obtaining replacement or specialist components, "
              + "fixtures, and fittings";
              }
          </code>
        </pre>
    </li>

    <li>
        <pre>
        <code class="language-java">



            public String programming_languages(){
            return "I mainly code using Java and have a bit of "
            + "experiece using C++. I also consider myself a "
            + "great front-end web-designer.";
            }

            public String why_me(){
            return "In university I realized a lot of students are"
            + " going into programs they do not like just for"
            + " the money. Well I am one of the few lucky"
            + " students who like the field of study they are"
            + " in. The fact that I can make something happen,"
            + " due to my programming skills, gives me a"
            + " satisfaction that can only be experienced if you"
            + " are in computer science. These emotions and"
            + " feelings is what lead to my success. Those same feelings is what"
            + " makes me stand-out as a computer scientist as I"
            + " plan to learning more during"
            + " my free time and enhance my abilities. I am very"
            + " trust worthy and tend to not disappoint others."
            + " I am also bilingual and am currently learning "
            + " French";
            }

            public String areas_of_interest(){
            return "I am concentrating in artificial intilligence. "
            + "I have also begun loving web-designing, software "
            + "engineering, and data structures. I am always looking "
            + "towards enhancing my abilities and learning new skills.";
            }
        </code>
        </pre>
    </li>
    <li>
        <pre>
        <code class="language-java">
            public String student_exchange(){
            return "Student exchange has been the best experience"
            + " of my life, but it has also been an eye"
            + " opening experience. I traveled to fifteen"
            + " countries during my trip and experienced"
            + " their unique cultures and lifestyles.  I "
            + "believe most people who do student exchange "
            + "are open-minded, who are optimistic towards "
            + "everything they do in life. We are all culturally "
            + "different, come from completely different time "
            + "zones, and have different type of pigments. "
            + "I made such a diverse and unique group of "
            + "friends, who I will never forget. While on exchange "
            + "I also took classes which aren't normally offered "
            + "at my home University.";
            }

            public String awards_and_achievements(){
            return "IT Services Scholarship in Computer Science (80%)\n"
            + "Deans Honour Roll (University of Windsor)(x3)\n"
            + "Mary Fuller Scholarship (80%)(x2)\n"
            + "Award Of Excellency(2015)\n"
            + "School Involvement Award";
            }

            public String profile_of_skills(){
            return "I have developed strong leadership, communicational, "
            + "and organizational skills due to hundred "
            + "plus hours of volunteer experience. I am fluent in"
            + "both Spanish and English, I am currently learning "
            + "French. I also have creative problem solving skills "
            + "and require minimal supervision.";
            }
            }
        </code>
          </pre>
    </li>
    <!--<button id="switchPrismStyle" onclick="swap_style_sheet()">Try it</button>-->
</ul>



<div class="image-spacing-0 slide">
    <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-2 large-block-grid-4" data-clearing>
        <li><a href="img/stocks.jpg"><img data-caption="caption here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 2 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
        <li><a href="img/stocks.jpg"><img data-caption="caption 3 here..." src="img/books.jpg"></a></li>
    </ul>
</div>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="FBMB8GYJ972H2">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<div class="elevator-button">Back to Top</div>


</div>
<script>
    // Elevator script included on the page, already.

    window.onload = function() {
        var elevator = new Elevator({
            element: document.querySelector('.elevator-button'),
            mainAudio: './music/elevator.mp3',
            endAudio: './music/ding.mp3'
        });
    }
</script>


</iframe>
<div class="medium-6 columns" style="position: absolute;">

</div>


<div class="small-12 medium-6 columns">

</div>
<?php

html5_js(
    array('js/vendor/jquery.js'
    )
);

?>

</body>
</html>

