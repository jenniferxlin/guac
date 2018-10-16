<!DOCTYPE html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="public/js/menu.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navigation row">
    <div class="col-1">
    </div>
    <div class="col-1">
      <a class="navbar-brand" href="index.php">guac</a>
    </div>
    <div class="col-3">
    </div>
    <a href="#" class="icon" id="menu-icon" onclick="openNav()" style="background-color:transparent">
    <img src="public/images/menu-icon.png"/></a>
    <div class="col-6 navlinks">
      <div class="topnav" id="myTopnav">
          <a class="navlink" href="index.php">Home</a>
          <a class="navlink" href="stories.php">Stories</a>
          <a class="navlink" href="about.php">About</a>
          <a class="navlink" href="mailto:guacmag@gmail.com">Contact</a>
          <a class="navlink" href="#subscribe" id="sub">Subscribe</a>
      </div>
    </div>
    <div class="overlay" id="myNav">
      <div class="logo">
        <a href="index.php">guac</a>
        <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
      </div>
        <a class="navlink" href="index.php">Home</a>
        <a class="navlink" href="stories.php">Stories</a>
        <a class="navlink" href="about.php">About</a>
        <a class="navlink" href="mailto:guacmag@gmail.com">Contact</a>
        <a class="navlink" href="#subscribe" id="sub">Subscribe</a>
    </div>
    <div class="col-1">
    </div>
  </nav>
</body>
</html>
