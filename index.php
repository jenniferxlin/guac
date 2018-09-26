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
      <button type="button" class="btn">EXPLORE</button>
    </div>
  </div>
</div>

<div class="jumbotron map">
  <img src="public/images/map.png"/>
</div>

<div class="jumbotron subscription">
  <h2>Never miss a story</h2>
  <form class="email-form">
    <input type="email" class="form-control" placeholder="Your email address" id="email">
    <button type="submit" class="btn btn-default">SUBSCRIBE</button></input>
  </form>
</div>

<div class="jumbotron journies">
  <div class="work">
    <h1>Guac's Journeys</h1>
    <div class="mission">
      <p>Founded in August 2017, Guac is an award-winning travel publication around
      by an interdisciplinary group of students at Cornell University.</p>
      <button type="button" class="btn">READ MORE</button>
    </div>
  </div>
</div>

<div class="feed">
  <h2>Follow Along</h2>
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
<iframe src="//lightwidget.com/widgets/4425a11829a055bf9efeccf640e4f9f7.html"
scrolling="no" allowtransparency="true" class="lightwidget-widget"></iframe>
</div>

<div class="quicklinks">
  <h2>Quick Links</h2>
    <a href="stories.php">Stories</a>
    <a href="about.php">About</a>
    <a href="#">Subscribe</a>
    <footer>
      <a href="#"><img src="public/images/insta.png"/></a>
      <a href="#"><img id="fb" src="public/images/fb.jpg"/></a>
      <a href="#"><img id="mail" src="public/images/mail.png"/></a>
    </footer>
</div>
</body>
</html>
