<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/app.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link href="public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/extras.css" type="text/css" rel="stylesheet" media="all"/>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="public/js/menu.js"></script>
    <title>Guac Magazine</title>
</head>

<body onclick="exitNav()">
  <?php include("includes/navigation.php"); ?>

  <div class="row guac_walk header">
    <div class="col-1">
    </div>
    <div class="col-10">
    <img id="guac_walk" src="public/images/guac_walk.png"/>
    </div>
    <div class="col-1">
    </div>
  </div>

  <div class="row">
    <div class="col-1">
    </div>
    <div class="intro col-10">
      <h1>Guac celebrates cultural diversity and inspires communities to view the world with an open mind</h1>
    </div>
    <div class="col-1">
    </div>
  </div>

  <div class="row story">
    <div class="col-md-1 col-xs-1">
    </div>
    <div class="col-md-5 col-xs-11">
        <h1>Stories</h1>
    </div>
    <div class="col-md-1 col-xs-1">
    </div>
    <div class="mission col-md-4 col-xs-10">
      <p>We share stories about people, places, and cultures around the world through
      publishing weekly online articles, delivering semesterly print magazines,
      and hosting events.<br><br>
      Within a year, we have featured stories about 15 different countries around
      the world!</p>
      <button type="button" class="btn"><a href="stories.php">EXPLORE</a></button>
    </div>
    <div class="col-md-1 col-xs-1">
    </div>.
  </div>

<div class="col-12 map">
  <img src="public/images/map.png"/>
</div>

<?php include("includes/subscription.php"); ?>


<div class="row journies">
  <div class="col-1">
  </div>
  <div class="col-md-5 col-xs-11">
    <h1>Guac's Journeys</h1>
  </div>
  <div class="col-md-1 col-xs-1">
  </div>
  <div class="mission col-md-4 col-xs-10">
    <p>Founded in August 2017, Guac is an award-winning travel publication around
    by an interdisciplinary group of students at Cornell University.</p>
    <button type="button" class="btn"><a href="about.php">READ MORE</a></button>
  </div>
  <div class="col-md-1 col-xs-1">
  </div>
</div>

<?php include("includes/instafeed.php"); ?>

<?php include("includes/quicklinks.php"); ?>

</body>
</html>
