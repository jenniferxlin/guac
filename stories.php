<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/app.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link href="public/css/bootstrap.css" type="text/css" rel="stylesheet" media="all"/>
    <link href="public/css/extras.css" type="text/css" rel="stylesheet" media="all"/>
    <script type="text/javascript" src="jquery-1.8.3.js"></script>

    <title>Guac Stories</title>
</head>

<body>
  <?php include("includes/navigation.php"); ?>

<div class="row stories">
  <div class="col-1">
  </div>
  <div class="col-9">
    <h1>Stories</h1>
  </div>
  <div class="col-2">
  </div>
</div>

<div class="row landmarks">
  <div class="col-1">
  </div>
  <div class="col-9">
    <img id="landmarks" src="public/images/landmarks.png"/>
  </div>
  <div class="col-2">
  </div>
</div>

<div class="row banners">
  <div class="col-1">
  </div>
  <div class="story-intro col-9"><h1>We share stories about people, places, and cultures
    around the world through weekly online articles, semesterly print magazines,
    and community events.</h1>
  </div>
  <div class="col-1">
  </div>
</div>

<div class="row col-12 story articles">
    <div class="col-1">
    </div>
    <div class="col-5">
        <h1>Weekly Articles</h1>
    </div>
    <div class="col-1">
    </div>
    <div class="mission col-4">
        <p>We produce articles weekly about international affairs, cultures,
          and travel. Follow us on Medium for the weekly doses of inspiration!</p>
        <button type="button" class=" btn"><a href="https://medium.com/guac-magazine" target="_blank">READ ON MEDIUM</a></button>
      </div>
    <div class="col-1">
    </div>
  </div>

  <div class="row col-12 story prints">
    <div class="col-1">
    </div>
    <div class="col-5">
      <h1>Print Magazines</h1>
    </div>
    <div class="col-1">
    </div>
    <div class="mission col-4">
      <p>We strive to publish one issue per semester. Each of these high quality
        print issues is theme specific with stories written by a growing network
        of writers from around the world. </p>
    </div>
    <div class="col-1">
    </div>
  </div>

  <div class="scroll">
    <div class="row flex-row flex-nowrap">
    <div class="col-1">
    </div>
    <div class="mag col-4">
      <img class="covers" src="public/images/volume2.png"/>
      <div class="issues">
        <h4>ISSUE 2 SPRING 2018</h4>
        <h2>Budget Travel</h2>
        <p>Traveling can be expensive. Our Budget Travel shows how traveling is
        accessible to all. From staying in affordable hostels to visiting the
        Christmas Markets, this issue covers budget traveling experiences
        from all corners of the world.</p>
        <a href="#">Read Online → </a>
      </div>
    </div>
    <div class="col-1">
    </div>

    <div class="mag col-4">
      <img class="covers" src="public/images/pr_volume.png"></img>
      <div class="issues">
        <h4>SPECIAL ISSUE SPRING 2018</h4>
        <h2>guac x Puerto Rico</h2>
        <p>A special issue of Guac! Partnering with the Puerto Rican Student Association,
          this special issue of Guac aims to educate the Cornell community on what it
          means to be Puerto Rican in the United States. Learn more about the Island of
          Enchantment!</p>
        <a href="#">Read Online → </a>
      </div>
    </div>
    <div class="col-1">
    </div>

    <div class="mag col-4">
      <img class="covers" src="public/images/volume1.png"></img>
      <div class="issues">
        <h4>ISSUE 1 FALL 2017</h4>
        <h2>Hidden Gems</h2>
        <p>Tired of visiting those “mainstream” places for your next vacation?
          Our Hidden Gems issue explores some of the world’s best-kept travel secrets,
          places, and attractions that are typically overlooked by the normal travelers. </p>
        <a href="#">Read Online → </a>
      </div>
    </div>
  </div>
</div>

<div class="row story events">
    <div class="col-1">
    </div>
    <div class="col-5">
      <h1>Events</h1>
    </div>
    <div class="col-1">
    </div>
    <div class="mission col-4">
        <p>Once every other month, we bring people together to exchange ideas and
          share stories through hosting events on Cornell campus over some good
          food and drinks.</p>
        <button type="button" class="btn"><a href="https://www.facebook.com/guacmag/" target="_blank">SEE ON FACEBOOK</a></button>
      </div>
    <div class="col-1">
    </div>
  </div>

  <?php include("includes/subscription.php"); ?>
  <?php include("includes/instafeed.php"); ?>
  <?php include("includes/quicklinks.php"); ?>
