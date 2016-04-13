<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>




  <header class="boxed_content">
    <!-- START Logo -->
    <a href="index.php" id="logo-link" rel="home">
      <img src="images/logo.png" id="logo" alt="Townsville Community Music Centre Logo" />
    </a>
    <!-- END Logo --> 
  <div id="show-menu"><a href="#">Menu</a></div>

    <!-- START Navigation -->
    <nav class="site-navigation primary-navigation">
      <div class="menu-all-pages-container">
        <ul class="nav-menu">
          <li <?php if ($name == "index") echo 'class="current-menu-item"'; ?>><a href="index.php">Home</a></li>
          <li <?php if ($name == "events") echo 'class="current-menu-item"'; ?>><a href="events.php">page1</a></li>
          <li <?php if ($name == "bulletinboard") echo 'class="current-menu-item"'; ?>><a href="bulletinboard.php">page2</a></li>
          <li <?php if ($name == "artists" or $name == "artistdetailed") echo 'class="current-menu-item"'; ?>><a href="artists.php">Apage3</a></li>
          <li <?php if ($name == "members") echo 'class="current-menu-item"'; ?>><a href="members.php">page4</a></li>
          <li <?php if ($name == "about") echo 'class="current-menu-item"'; ?>><a href="about.php">About</a></li>
         <!-- <li <?php if ($name == "contact") echo 'class="current-menu-item"'; ?>><a href="contact.php">Contact</a></li> -->
        <?php

    if (isset($_SESSION['username'])) {
        echo "<li><a href='php/logout.php'>Logout</a></li>";
  //  echo "<li>{$_SESSION['username']}</li>";
    } else {
        echo "<li><a href='#openModal'>Login</a></li>";
}

?>
        </ul>
        <?php
          include("php/login.php");
        ?>
      </div>
    </nav>
    <!-- END Navigation -->
  </header>