<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/app.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/style.css" type="text/css" rel="stylesheet" media="all"/>
        <link href="public/css/extras.css" type="text/css" rel="stylesheet" media="all"/>

    <title>About Guac</title>
</head>

<body>
  <?php include("includes/navigation.php"); ?>

<div class="jumbotron header" id="guac_char">
  <h1>About</h1>
  <img class="guac_char" src="public/images/characters.png"/>
</div>

<div class="intro about"><h1>Founded in Aug 2017, Guac is an award-winning
  travel publication run by an interdisciplinary group of students at
  Cornell University.</h1></div>

<div class="jumbotron stories" id="journies">
    <h1>Guac's Journies</h1>
    <div class="work">
      <img class="left-img" src="public/images/journey1.png"></img>
      <div class="right-paragraphs">
        <h4 class="time">Aug 2017</h4>
        <h3>"Let's start a travel magazine"</h3>
        <p class="details">The headline news story was of President Trump's travel ban on
        predominantly Muslim nations. As international students, we wanted to value
        of diversity to be appreciated and known. This is why we started a travel
        magazine. To celebrate the beauty of the world and inspire people to go out
        and experience different cultures for themselves.</p>
      </div>
    </div>
    <div class="work">
      <div class="left-paragraphs">
        <h4 class="time">Nov 2017</h4>
        <h3>Hidden Gems, Our First Issue</h3>
        <p class="details">For our first issue, we wanted to truly show the different
        level of diversity the world has to offer. This is why we chose the theme
        Hidden Gems. Written by friends who traveled to various interesting places,
        this issue exposes some of the world's best kept secrets that is often
        overlooked by travelers.</p>
      </div>
        <img class="right-img" src="public/images/journey2.png"></img>
    </div>
    <div class="work">
      <img class="left-img" src="public/images/journey3.png"></img>
      <div class="right-paragraphs last">
        <h4 class="time">Jan 2018</h4>
        <h3>40 Students, 14 Countries</h3>
        <p class="details">After a semester, we grew into a publication of 40
          students from 14 countries, representing 5 different continents. This
          is only the start, we are only getting bigger and more diverse!</p>
      </div>
    </div>
    <div class="work">
      <img class="center-img" src="public/images/journey4.png"></img>
      <div class="paragraphs center">
        <h4 class="time">March 2018</h4>
        <h3>Perkins Prize</h3>
        <p class="details">Only after 8 months, Guac Magazine was awarded an honorary
          mention for the James A. Perkins Prize for Interracial & Intercultural
          Peace & Harmony. We believe we are the youngest club at Cornell to have
          ever been awarded with this honor.</p>
      </div>
    </div>
    <div class="work">
      <div class="left-paragraphs">
        <h4 class="time">Now</h4>
        <h3>More than a magazine</h3>
        <p class="details">We are embarking on a new and exciting journey to
          expand our impact beyond delivering high quality print magazines. We
          are creating a growing community where diverse voices can be heard and
          barriers will be broken.</p>
      </div>
        <img class="right-img" src="public/images/journey5.png"></img>
    </div>
</div>

<?php include("includes/subscription.php"); ?>


<div class="jumbotron team">
  <div class="work">
    <h1>Guac Family</h1>
    <div class="mission">
      <p>We are an interdisciplinary and international team of 40 students; we
        represent 12 different countries around the world. </p>
      <img class="fam" src="public/images/guacfam.png"/>
    </div>
  </div>
</div>

<?php include("includes/instafeed.php"); ?>

<?php include("includes/quicklinks.php"); ?>

</body>
</html>
