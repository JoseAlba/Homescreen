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
            'css/cf-theming.css',
        )
    );

    html5_js(
        array('../js/vendor/modernizr.js','../js/vendor/jquery.js', '../js/apps/menu.js', 'conversational_form.js'));
    ?>

    <style type="text/css">
        html
        ,body
        {
            overflow-y: hidden;
        }
    </style>
</head>

<body>



    <div id="container" cf-form>
        <form id="form" method="post" id="my_form" action="mailto:albaj@uwindsor.ca" cf-form>

            <input id="intro"
                   type="text"
                   cf-questions="Hello, my name is Jose Alba and this is my biographical webpage!!!&&On the top left of this webpage is a menu bar which will switch the page around&& If you want to learn more about me type:yes if you want to learn more or type:no If you just want to contact me "
                   name="cfc-intro">
            <label for="intro">tinder | yes | no </label>

<!--            <fieldset cf-questions="Hello, my name is Jose Alba and this is my biographical webpage!!!&&On the top left of this webpage is a menu bar which will switch the page around&& If you want to learn more about me click yes or click not to contact me">-->
<!--                <input type="radio" name="cfc-intro" id="intro-yes" value="yes">-->
<!--                <label for="intro-yes">Yes, I want to learn more</label>-->
<!---->
<!--                <input type="radio" name="cfc-intro" id="intro-no" value="nope">-->
<!--                <label for="intro-no">No thanks, just bring me the contact fieldset</label>-->
<!--            </fieldset>-->

            <fieldset cf-questions="You are in the hidden menu tinder!!&&Do you like cracking a cold one with the boys?">
                <input required type="radio" name="tinder-intro" id="tinder-intro-1" value="about" cf-conditional-cfc-intro="tinder">
                <label for="tinder-intro-1">Tinder reply 1</label>

                <input required type="radio" name="tinder-intro" id="tinder-intro-2" value="projects" cf-conditional-cfc-intro="tinder">
                <label for="tinder-intro-2">Tinder reply 2</label>

                <input required type="radio" name="tinder-intro" id="tinder-intro-3" value="experience" cf-conditional-cfc-intro="tinder">
                <label for="tinder-intro-3">Tinder reply 3</label>

                <input required type="radio" name="tinder-intro" id="tinder-intro-4" value="future_projects" cf-conditional-cfc-intro="tinder">
                <label for="tinder-intro-4">Tinder reply 4</label>

                <input required type="radio" name="tinder-intro" id="tinder-intro-5" value="freelance" cf-conditional-cfc-intro="tinder">
                <label for="tinder-intro-5">Tinder reply 5</label>
            </fieldset>


            <fieldset cf-questions="What do you want to know about me?">
                <input required type="radio" name="category-path" id="path-about" value="about" cf-conditional-cfc-intro="yes">
                <label for="path-about">About</label>

                <input required type="radio" name="category-path" id="path-projects" value="projects" cf-conditional-cfc-intro="yes">
                <label for="path-projects">Projects</label>

                <input required type="radio" name="category-path" id="path-experience" value="experience" cf-conditional-cfc-intro="yes">
                <label for="path-experience">Experience</label>

                <input required type="radio" name="category-path" id="path-future_projects" value="future_projects" cf-conditional-cfc-intro="yes">
                <label for="path-future_projects">Future Projects</label>

                <input required type="radio" name="category-path" id="path-freelance" value="freelance" cf-conditional-cfc-intro="yes">
                <label for="path-freelance">Freelance</label>
            </fieldset>

            <input id="about"
                   type="radio"
                   cf-questions="My name is Jose Alba and I love creating 'things' with my abilities in Computer Science"
                   name="about"
                   cf-conditional-category-path="about">
            <label for="about">Okay</label>

            <input id="projects"
                   type="radio"
                   cf-questions="My projects range from simple Websites to Games and Evolutionary Programming"
                   name="projects"
                   cf-conditional-category-path="projects">
            <label for="projects">Okay</label>

            <input id="experience"
                   type="radio"
                   cf-questions="I have experience working as a teaching assistant, research assistant, and Information Technologist. I just attained a Software Engineering Internship with Nokia and am currently searching for another summer internship"
                   name="experience"
                   cf-conditional-category-path="experience">
            <label for="experience">Okay</label>

            <input id="future_projects"
                   type="radio"
                   cf-questions="I really want to play around with AR - Augmented Reality "
                   name="future_projects"
                   cf-conditional-category-path="future_projects">
            <label for="future_projects">Okay</label>

            <input id="freelance"
                   type="radio"
                   cf-questions="If you need me to make you a website feel free to contact me. You can pay me either by Paypal or Cryptocurrencies"
                   name="freelance"
                   cf-conditional-category-path="freelance">
            <label for="freelance">Okay</label>


            <fieldset cf-questions="If you want to check out the previous options you can click your previous answer and it will bring you back to the last question asked&&You can contact me or you can talk to me like I would in real-life">
                <input type="radio" name="goto_contact_1" value="yes" id="go_contact_1_yes" >
                <label for="go_contact_1_yes">Let me contact you</label>

                <input type="radio" name="goto_contact_1" value="no" id="go_contact_1_no" >
                <label for="go_contact_1_no">No, let me talk to your robot form</label>

            </fieldset>

            <fieldset cf-questions="Okay, soooooo you came to my website to see my website and all you want to do is get to know me&&THANKS!!!&&Do you like traveling">
                <input type="radio" name="traveling" value="like" id="traveling_likes" cf-conditional-goto_contact_1="no">
                <label for="traveling_likes">I love traveling</label>

                <input type="radio" name="traveling" value="notlike" id="traveling_nlikes" cf-conditional-goto_contact_1="no">
                <label for="traveling_nlikes">I prefer other things</label>

                <input type="radio" name="traveling" value="interview" id="traveling_interview" cf-conditional-goto_contact_1="no">
                <label for="traveling_interview">I want to interview you now</label>
            </fieldset>

            <fieldset cf-questions="What place would you rather go to?">
<!--                <input type="radio" name="continents" value="africa" id="africa" cf-conditional-traveling="like">-->
<!--                <label for="africa">Africa</label>-->
<!---->
<!--                <input type="radio" name="continents" value="antarctica" id="antarctica" cf-conditional-traveling="like">-->
<!--                <label for="antarctica">Antarctica </label>-->
<!---->
<!--                <input type="radio" name="continents" value="asia" id="asia" cf-conditional-traveling="like">-->
<!--                <label for="asia">Asia</label>-->
<!---->
                <input type="radio" name="continents" value="europe" id="europe" cf-conditional-traveling="like">
                <label for="europe">Europe</label>

                <input type="radio" name="continents" value="north-america" id="north-america" cf-conditional-traveling="like">
                <label for="north-america">North America</label>

<!--                <input type="radio" name="continents" value="oceania" id="oceania" cf-conditional-traveling="like">-->
<!--                <label for="oceania">Oceania</label>-->

<!--                <input type="radio" name="continents" value="south-america" id="south-america" cf-conditional-traveling="like">-->
<!--                <label for="south-america">South America</label>-->
            </fieldset>

            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/africa/" name="image-africa" tabindex="1" value="antelope" cf-conditional-continents="africa">
                <input cf-label="Canyonlands" type="radio" cf-image="img/africa/" name="image-africa" tabindex="2" value="canyonlands" cf-conditional-continents="africa">
                <input cf-label="Colorado" type="radio" cf-image="img/africa/" name="image-africa" tabindex="3" value="colorado" cf-conditional-continents="africa">
                <input cf-label="Enchantments" type="radio" cf-image="img/africa/" name="image-africa" tabindex="4" value="enchantments" cf-conditional-continents="africa">
                <input cf-label="Glacier" type="radio" cf-image="img/africa/" name="image-africa" tabindex="5" value="glacier" cf-conditional-continents="africa">
                <input cf-label="Lake Louise" type="radio" cf-image="img/africa/" name="image-africa" tabindex="6" value="lake_louise" cf-conditional-continents="africa">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/africa/" name="image-africa" tabindex="7" value="moraine" cf-conditional-continents="africa">
                <input cf-label="Utah" type="radio" cf-image="img/africa/" name="image-africa" tabindex="8" value="utah" cf-conditional-continents="africa">
            </div>
            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="1" value="antelope" cf-conditional-continents="antarctica">
                <input cf-label="Canyonlands" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="2" value="canyonlands" cf-conditional-continents="antarctica">
                <input cf-label="Colorado" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="3" value="colorado" cf-conditional-continents="antarctica">
                <input cf-label="Enchantments" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="4" value="enchantments" cf-conditional-continents="antarctica">
                <input cf-label="Glacier" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="5" value="glacier" cf-conditional-continents="antarctica">
                <input cf-label="Lake Louise" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="6" value="lake_louise" cf-conditional-continents="antarctica">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="7" value="moraine" cf-conditional-continents="antarctica">
                <input cf-label="Utah" type="radio" cf-image="img/antarctica/" name="image-antarctica" tabindex="8" value="utah" cf-conditional-continents="antarctica">
            </div>
            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/asia/" name="image-asia" tabindex="1" value="antelope" cf-conditional-continents="asia">
                <input cf-label="Canyonlands" type="radio" cf-image="img/asia/" name="image-asia" tabindex="2" value="canyonlands" cf-conditional-continents="asia">
                <input cf-label="Colorado" type="radio" cf-image="img/asia/" name="image-asia" tabindex="3" value="colorado" cf-conditional-continents="asia">
                <input cf-label="Enchantments" type="radio" cf-image="img/asia/" name="image-asia" tabindex="4" value="enchantments" cf-conditional-continents="asia">
                <input cf-label="Glacier" type="radio" cf-image="img/asia/" name="image-asia" tabindex="5" value="glacier" cf-conditional-continents="asia">
                <input cf-label="Lake Louise" type="radio" cf-image="img/asia/" name="image-asia" tabindex="6" value="lake_louise" cf-conditional-continents="asia">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/asia/" name="image-asia" tabindex="7" value="moraine" cf-conditional-continents="asia">
                <input cf-label="Utah" type="radio" cf-image="img/asia/" name="image-asia" tabindex="8" value="utah" cf-conditional-continents="asia">
            </div>

            <div class="radio-control" >
                <input cf-label="Amalfi Coast" type="radio" cf-image="img/europe/amalfi.jpg" name="image-europe" tabindex="1" value="amalfi" cf-conditional-continents="europe">
                <input cf-label="Barcelona" type="radio" cf-image="img/europe/barcelona.jpg" name="image-europe" tabindex="2" value="barcelona" cf-conditional-continents="europe">
                <input cf-label="Budapest" type="radio" cf-image="img/europe/budapest.jpg" name="image-europe" tabindex="3" value="budapest" cf-conditional-continents="europe">
                <input cf-label="Cinque Terre" type="radio" cf-image="img/europe/cinque_terre.jpg" name="image-europe" tabindex="4" value="cinque_terre" cf-conditional-continents="europe">
                <input cf-label="Edinburgh" type="radio" cf-image="img/europe/edinburgh.jpg" name="image-europe" tabindex="5" value="edinburgh" cf-conditional-continents="europe">
                <input cf-label="London" type="radio" cf-image="img/europe/london.jpg" name="image-europe" tabindex="6" value="london" cf-conditional-continents="europe">
                <input cf-label="Sintra" type="radio" cf-image="img/europe/sintra.jpg" name="image-europe" tabindex="7" value="sintra" cf-conditional-continents="europe">
                <input cf-label="Zante" type="radio" cf-image="img/europe/zante.jpg" name="image-europe" tabindex="8" value="zante" cf-conditional-continents="europe">
            </div>

            <input id="amalfi"
                   type="radio"
                   cf-questions="I walked for two days on this coast and slept in the beach."
                   name="amalfi"
                   cf-conditional-image-europe="amalfi">
            <label for="amalfi">Okay</label>

            <input id="barcelona"
                   type="radio"
                   cf-questions="I lost my scuba diving virginity in Barcelona"
                   name="barcelona"
                   cf-conditional-image-europe="barcelona">
            <label for="barcelona">Okay</label>

            <input id="budapest"
                   type="radio"
                   cf-questions="A city split in half"
                   name="budapest"
                   cf-conditional-image-europe="budapest">
            <label for="budapest">Okay</label>

            <input id="cinque_terre"
                   type="radio"
                   cf-questions="I jumped off a cliff here right after somebody else attempted this and they hit their legs with the rocks at the bottom"
                   name="cinque_terre"
                   cf-conditional-image-europe="cinque_terre">
            <label for="cinque_terre">Okay</label>

            <input id="edinburgh"
                   type="radio"
                   cf-questions="Let's just say I celebrated St.Patricks day with a group of international students in Edinburgh"
                   name="edinburgh"
                   cf-conditional-image-europe="edinburgh">
            <label for="edinburgh">Okay</label>

            <input id="london"
                   type="radio"
                   cf-questions="I called this place home for 6 months and would always find something new to do everyday"
                   name="london"
                   cf-conditional-image-europe="london">
            <label for="london">Okay</label>

            <input id="sintra"
                   type="radio"
                   cf-questions="A not so hidden castle"
                   name="sintra"
                   cf-conditional-image-europe="sintra">
            <label for="sintra">Okay</label>

            <input id="zante"
                   type="radio"
                   cf-questions="Before going to Zante it was on my bucket list since I was a child. Once in a lifetime experience"
                   name="zante"
                   cf-conditional-image-europe="zante">
            <label for="zante">Okay</label>

            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/north_america/antelope.jpg" name="image-north-america" tabindex="1" value="antelope" cf-conditional-continents="north-america">
                <input cf-label="Canyonlands" type="radio" cf-image="img/north_america/canyonlands.jpg" name="image-north-america" tabindex="2" value="canyonlands" cf-conditional-continents="north-america">
                <input cf-label="Colorado" type="radio" cf-image="img/north_america/colorado.jpg" name="image-north-america" tabindex="3" value="colorado" cf-conditional-continents="north-america">
                <input cf-label="Enchantments" type="radio" cf-image="img/north_america/enchantments.jpg" name="image-north-america" tabindex="4" value="enchantments" cf-conditional-continents="north-america">
                <input cf-label="Glacier" type="radio" cf-image="img/north_america/glacier.jpg" name="image-north-america" tabindex="5" value="glacier" cf-conditional-continents="north-america">
                <input cf-label="Lake Louise" type="radio" cf-image="img/north_america/lake_louise.jpg" name="image-north-america" tabindex="6" value="lake_louise" cf-conditional-continents="north-america">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/north_america/moraine.jpg" name="image-north-america" tabindex="7" value="moraine" cf-conditional-continents="north-america">
                <input cf-label="Utah" type="radio" cf-image="img/north_america/Utah.jpg" name="image-north-america" tabindex="8" value="utah" cf-conditional-continents="north-america">
            </div>

            <input id="antelope"
                   type="radio"
                   cf-questions="Antelope Canyon bends time with sand"
                   name="antelope"
                   cf-conditional-image-north-america="antelope">
            <label for="antelope">Okay</label>

            <input id="canyonlands"
                   type="radio"
                   cf-questions="Where every country movie or song is filmed at"
                   name="canyonlands"
                   cf-conditional-image-north-america="canyonlands">
            <label for="canyonlands">Okay</label>

            <input id="colorado"
                   type="radio"
                   cf-questions="Climbed a 14er"
                   name="colorado"
                   cf-conditional-image-north-america="colorado">
            <label for="colorado">Okay</label>

            <input id="enchantments"
                   type="radio"
                   cf-questions="Enchantments has been the best hike I have ever done. Got to witness a variety of differet biomes in the span of 1 hard day"
                   name="enchantments"
                   cf-conditional-image-north-america="enchantments">
            <label for="enchantments">Okay</label>

            <input id="glacier"
                   type="radio"
                   cf-questions="Almost ran into a grizzly bear climbing this mountain"
                   name="glacier"
                   cf-conditional-image-north-america="glacier">
            <label for="glacier">Okay</label>

            <input id="lake_louise"
                   type="radio"
                   cf-questions="A must for those who love to hike mountains."
                   name="lake_louise"
                   cf-conditional-image-north-america="lake_louise">
            <label for="lake_louise">Okay</label>

            <input id="moraine"
                   type="radio"
                   cf-questions="This was the most dangerious hike I have ever done. A must for those who want a really challenging hike "
                   name="moraine"
                   cf-conditional-image-north-america="moraine">
            <label for="moraine">Okay</label>

            <input id="utah"
                   type="radio"
                   cf-questions="Lovely place but I highly recommend you rent a car with AC and have water at all times"
                   name="utah"
                   cf-conditional-image-north-america="utah">
            <label for="utah">Okay</label>

            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="1" value="antelope" cf-conditional-continents="oceania">
                <input cf-label="Canyonlands" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="2" value="canyonlands" cf-conditional-continents="oceania">
                <input cf-label="Colorado" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="3" value="colorado" cf-conditional-continents="oceania">
                <input cf-label="Enchantments" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="4" value="enchantments" cf-conditional-continents="oceania">
                <input cf-label="Glacier" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="5" value="glacier" cf-conditional-continents="oceania">
                <input cf-label="Lake Louise" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="6" value="lake_louise" cf-conditional-continents="oceania">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="7" value="moraine" cf-conditional-continents="oceania">
                <input cf-label="Utah" type="radio" cf-image="img/oceania/" name="image-oceania" tabindex="8" value="utah" cf-conditional-continents="oceania">
            </div>

            <div class="radio-control" >
                <input cf-label="Antelope Canyon" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="1" value="antelope" cf-conditional-continents="south-america">
                <input cf-label="Canyonlands" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="2" value="canyonlands" cf-conditional-continents="south-america">
                <input cf-label="Colorado" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="3" value="colorado" cf-conditional-continents="south-america">
                <input cf-label="Enchantments" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="4" value="enchantments" cf-conditional-continents="south-america">
                <input cf-label="Glacier" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="5" value="glacier" cf-conditional-continents="south-america">
                <input cf-label="Lake Louise" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="6" value="lake_louise" cf-conditional-continents="south-america">
                <input cf-label="Moraine Lake" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="7" value="moraine" cf-conditional-continents="south-america">
                <input cf-label="Utah" type="radio" cf-image="img/south_america/" name="image-south-america" tabindex="8" value="utah" cf-conditional-continents="south-america">
            </div>

            <fieldset cf-questions="What!!!&&We can't be friends&&What do you do with so much money?">
                <input type="radio" name="money" value="invest" id="invest" cf-conditional-traveling="notlike">
                <label for="invest">Invest</label>

                <input type="radio" name="money" value="spent" id="spent" cf-conditional-traveling="notlike">
                <label for="spent">I spend it all on goofy things =(</label>

                <input type="radio" name="money" value="no_money" id="no_money" cf-conditional-traveling="notlike">
                <label for="no_money">I don't have money</label>

            </fieldset>


            <fieldset cf-questions="What type of investments do you have?">
                <input type="radio" name="investments" value="cryptocurrency" id="cryptocurrency" cf-conditional-money="invest">
                <label for="cryptocurrency">Cryptocurrency</label>

                <input type="radio" name="investments" value="FOREX" id="FOREX" cf-conditional-money="invest">
                <label for="FOREX">FOREX</label>

                <input type="radio" name="investments" value="stock_market" id="stock_market" cf-conditional-money="invest">
                <label for="stock_market">Stock Market</label>

                <input type="radio" name="investments" value="real_estate" id="real_estate" cf-conditional-money="invest">
                <label for="real_estate">Real Estate</label>

                <input type="radio" name="investments" value="etc" id="etc" cf-conditional-money="invest">
                <label for="etc">etc</label>
            </fieldset>

            <input id="cryptocurrency_reply"
                   type="radio"
                   cf-questions="If you are canadian and want to start invesing in cryptocurrency open an account with this link https://www.quadrigacx.com/?ref=cpckvsb0dc5rgdo5s1zfa53m"
                   name="cryptocurrency"
                   cf-conditional-investments="cryptocurrency">
            <label for="cryptocurrency_reply">Okay</label>

            <input id="FOREX_reply"
                   type="radio"
                   cf-questions="I'm trying to get into trading in FOREX using Metatrader4"
                   name="FOREX"
                   cf-conditional-investments="FOREX">
            <label for="FOREX_reply">Okay</label>

            <input id="stock_market_reply"
                   type="radio"
                   cf-questions="I have invest in the stock market for the two years now and half made a 300% ROI"
                   name="stock_market"
                   cf-conditional-investments="stock_market">
            <label for="stock_market_reply">Okay</label>

            <input id="real_estate_reply"
                   type="radio"
                   cf-questions="My next goal is to buy a house in the Waterloo area "
                   name="real_estate"
                   cf-conditional-investments="real_estate">
            <label for="real_estate_reply">Okay</label>

            <input id="etc_reply"
                   type="radio"
                   cf-questions="Another way I have thought of making money is by selling items on Amazon or making a website for my fathers business that automates transactions for him"
                   name="etc"
                   cf-conditional-investments="etc">
            <label for="etc_reply">Okay</label>

            <fieldset cf-questions="What do you spend so much money on?">
                <input type="radio" name="bought" value="technology" id="technology" cf-conditional-money="spent">
                <label for="technology">Technology</label>

                <input type="radio" name="bought" value="partying" id="partying" cf-conditional-money="spent">
                <label for="partying">Partying</label>

                <input type="radio" name="bought" value="food" id="food" cf-conditional-money="spent">
                <label for="food">Food</label>

            </fieldset>

            <input id="technology_reply"
                   type="radio"
                   cf-questions="I truly love technology and love playing around with it. I want to buy Myo and start a project with it"
                   name="technology"
                   cf-conditional-bought="technology">
            <label for="technology_reply">Okay</label>

            <input id="partying_reply"
                   type="radio"
                   cf-questions="Lets just say I have partied in Pacha, Ibiza the the most popular club in Europe and possibly the world"
                   name="partying"
                   cf-conditional-bought="partying">
            <label for="partying_reply">Okay</label>

            <input id="food_reply"
                   type="radio"
                   cf-questions="I really do spend too much money on food. I'm currently addicted to bubble tea"
                   name="food"
                   cf-conditional-bought="food">
            <label for="food_reply">Okay</label>


            <input id="no_money"
                   type="radio"
                   cf-questions="You should start investing money instead of spending it all. I have a websites which demonstrates how you can make money even while studying http://financialjourney.me/ "
                   name="no_money"
                   cf-conditional-money="no_money">
            <label for="no_money">Okay</label>

            <fieldset cf-questions="Alright boss&&What type of interview question do you want to ask me?">

                <input type="radio" name="interview-type-question" value="classic" id="classic" cf-conditional-traveling="interview">
                <label for="classic">Classic/Traditional</label>

                <input type="radio" name="interview-type-question" value="behavioural" id="behavioural" cf-conditional-traveling="interview">
                <label for="behavioural">Behavioural</label>

                <input type="radio" name="interview-type-question" value="situational" id="situational" cf-conditional-traveling="interview">
                <label for="situational">Situational</label>

                <input type="radio" name="interview-type-question" value="skill-testing" id="skill-testing" cf-conditional-traveling="interview">
                <label for="skill-testing">Skill Testing</label>

                <input type="radio" name="interview-type-question" value="unconventional" id="uncoventional" cf-conditional-traveling="interview">
                <label for="uncoventional">Unconventional</label>
            </fieldset>

            <fieldset cf-questions="What type of classical/traditional type question do you want to ask me?">
                <input type="radio" name="classic-question" value="tell-me-about-yourself" id="tell-me-about-yourself" cf-conditional-interview-type-question="classic">
                <label for="tell-me-about-yourself">Tell me about yourself?</label>

                <input type="radio" name="classic-question" value="strengths-weaknesses" id="strengths-weaknesses" cf-conditional-interview-type-question="classic">
                <label for="strengths-weaknesses">What are your strengths and weaknesses?</label>

                <input type="radio" name="classic-question" value="skills" id="skills" cf-conditional-interview-type-question="classic">
                <label for="skills">What skills do you have related to this job?</label>
            </fieldset>






            <fieldset cf-questions="What type of behavioural question do you want to ask me?">
                <input type="radio" name="behavioural-question" value="tell-me-about-yourself" id="tell-me-about-yourself" cf-conditional-interview-type-question="behavioural">
                <label for="tell-me-about-yourself">Tell me about yourself?</label>

                <input type="radio" name="behavioural-question" value="strengths-weaknesses" id="strengths-weaknesses" cf-conditional-interview-type-question="behavioural">
                <label for="strengths-weaknesses">What are your strengths and weaknesses?</label>

                <input type="radio" name="behavioural-question" value="" id="food" cf-conditional-interview-type-question="behavioural">
                <label for="food">What skills do you have related to this job?</label>
            </fieldset>






            <fieldset cf-questions="What type of classical/traditional type question do you want to ask me?">
                <input type="radio" name="classic-question" value="tell-me-about-yourself" id="tell-me-about-yourself" cf-conditional-interview-type-question="situational">
                <label for="tell-me-about-yourself">Tell me about yourself?</label>

                <input type="radio" name="classic-question" value="strengths-weaknesses" id="strengths-weaknesses" cf-conditional-interview-type-question="situational">
                <label for="strengths-weaknesses">What are your strengths and weaknesses?</label>

                <input type="radio" name="classic-question" value="" id="food" cf-conditional-interview-type-question="situational">
                <label for="food">What skills do you have related to this job?</label>
            </fieldset>





            <fieldset cf-questions="What type of classical/traditional type question do you want to ask me?">
                <input type="radio" name="classic-question" value="tell-me-about-yourself" id="tell-me-about-yourself" cf-conditional-interview-type-question="skill-testing">
                <label for="tell-me-about-yourself">Tell me about yourself?</label>

                <input type="radio" name="classic-question" value="strengths-weaknesses" id="strengths-weaknesses" cf-conditional-interview-type-question="skill-testing">
                <label for="strengths-weaknesses">What are your strengths and weaknesses?</label>

                <input type="radio" name="classic-question" value="" id="food" cf-conditional-interview-type-question="skill-testing">
                <label for="food">What skills do you have related to this job?</label>
            </fieldset>




            <fieldset cf-questions="What type of classical/traditional type question do you want to ask me?">
                <input type="radio" name="classic-question" value="tell-me-about-yourself" id="tell-me-about-yourself" cf-conditional-interview-type-question="unconventional">
                <label for="tell-me-about-yourself">Tell me about yourself?</label>

                <input type="radio" name="classic-question" value="strengths-weaknesses" id="strengths-weaknesses" cf-conditional-interview-type-question="unconventional">
                <label for="strengths-weaknesses">What are your strengths and weaknesses?</label>

                <input type="radio" name="classic-question" value="" id="food" cf-conditional-interview-type-question="unconventional">
                <label for="food">What skills do you have related to this job?</label>
            </fieldset>


            <!-- Contact page ask for name -->
            <input id="contact_username"
                   type="text"
                   cf-questions="What is your name?"
                   name="username"
            >

            <input id="contact_city"
                   type="text"
                   cf-questions="Greet to meet you {contact_username} &&Where are you from?"
                   name="city">

            <fieldset>
                <label for="email">Email</label>
                <input id="contact-email"
                       type="email"
                       pattern=".+\@.+\..+"
                       cf-error="E-mail not correct"
                       cf-questions="{contact_city} is nice around this time of year&&{contact_username}, if you want me to contact me I will need your email that way I can respond to your email!"
                       name="email">
            </fieldset>

            <input id="message"
                   type="text"
                   cf-questions="Now that I have your email {contact_username}, feel free to tell me anything below ie&&Freelancee&&Traveling&&Technology&&Company&&Work Opportunity"
                   name="message">

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
    </div>
</body>
</html>


