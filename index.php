<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/app.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/style.css" type="text/css" rel="stylesheet" media="all"/>
        <link href="public/css/extras.css" type="text/css" rel="stylesheet" media="all"/>

    <title>Guac Magazine</title>
</head>

<body>
  <?php include("includes/navigation.php"); ?>

<div class="jumbotron header">
  <img class="guac_walk" src="public/images/guac_walk.png"/>
</div>

<div class="intro"><h1>Guac celebrates cultural diversity and inspires communities
to view the world with an open mind</h1></div>

<div class="jumbotron stories">
  <div class="work">
    <h1>Stories</h1>
    <div class="mission">
      <p>We share stories about people, places, and cultures around the world through
      publishing weekly online articles, delivering semesterly print magazines,
      and hosting events.<br><br>
      Within a year, we have featured stories about 15 different countries around
      the world!</p>
      <button type="button" class="btn"><a href="stories.php">EXPLORE</a></button>
    </div>
  </div>
</div>

<div class="jumbotron map">
  <img src="public/images/map.png"/>
</div>

<?php include("includes/subscription.php"); ?>


<div class="jumbotron journies">
  <div class="work">
    <h1>Guac's Journeys</h1>
    <div class="mission">
      <p>Founded in August 2017, Guac is an award-winning travel publication around
      by an interdisciplinary group of students at Cornell University.</p>
      <button type="button" class="btn"><a href="about.php">READ MORE</a></button>
    </div>
  </div>
</div>

<?php include("includes/instafeed.php"); ?>

<?php include("includes/quicklinks.php"); ?>

</body>
</html>
