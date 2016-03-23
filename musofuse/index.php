<?php

session_start();
include("php/dbconnect.php");

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MusoFuse - Home</title>
<meta name="description" content="musofuse description here">
<link rel="stylesheet" href="css/royalslider.css">
<link rel="stylesheet" href="css/style.css">
<link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic" rel="stylesheet" type="text/css">
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>

</head>

<body>
<?php
require("php/header.php");
?>
    
<!-- WEBSITE LAYOUT Box -->
    <div class="page-inner">
  <div class="container">
<div id="boxed_content" class="boxed_content">
<div class="inner">
<div id="content" class="site-content">
        <div id="home-slider-1" class="royalSlider rsMinW">

          <div class="rsContent slide2">
            <a class="rsImg" href="images/thumb/slider1.jpg"></a>
            <div class="bContainer">
              <div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Join Musofuse</div>
              <div class="rsABlock rs_text_box" data-move-effect="bottom">
                <span>Sign Up Now</span>
              </div>
              <div class="rsABlock rs_button" data-move-effect="bottom">
                <a href="members.php" class="ui huge button coloured">Join Now</a>
              </div>
            </div>
          </div>

          <div class="rsContent slide2">
            <a class="rsImg" href="images/thumb/slider2.jpg" ></a>
            <div class="bContainer">
              <div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Find the music of your dreams</div>
              <div class="rsABlock rs_text_box" data-move-effect="bottom">
                <span>Explore Users</span>
              </div>
              <div class="rsABlock rs_button" data-move-effect="bottom">
                <a href="events.php" class="ui huge button coloured">View Users</a>
              </div>
            </div>
          </div>

          <div class="rsContent slide3">
            <a class="rsImg" href="images/thumb/slider3.jpg"></a>
            <div class="bContainer">
              <div class="rsABlock rs_text rs_text_meta" data-move-effect="top">Join the Experience</div>
              <div class="rsABlock rs_text_box" data-move-effect="bottom">
                <span>CREATE | CURATE | COLLABORATE - MUSIC</span>
              </div>
              <div class="rsABlock rs_button" data-move-effect="bottom">
                <a href="members.php" class="ui huge button coloured">Sign Up</a>
              </div>
            </div>
          </div>
          
        </div> <!-- END royalSlider -->
  
    <div class="content"> <a href="about.php" class="white">
      <h2>About MusoFuse</h2>
      </a>
      <section class="events">
        <ul class="events-list">
          <li>
            <div class="event-container">
            <a href="about.php"> <div class="artist-image"><img src="images/CivicFront300.jpg" width="244" height="170" alt="MusoFuse"></div></a>
            <div class="event-info">
              <h3 class="event-info-name">MusoFuse</h3>
              <div class="event-info-text"> musofuse description</div>
              <br>
              <div class="artist-button-homepage"><a href="about.php" class="ui small button coloured">Read More</a></div>
            </div>
              </div>
                </li>
        </ul>
      </section>
      <br />
                                                                                                        

<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>

  <!-- END .site-content -->
  <?php
require("php/footer.php");
?>
    </div></div> 
    <script id="addJS">
      jQuery(document).ready(function($) {
          jQuery.rsCSS3Easing.easeOutBack = 'cubic-bezier(0.175, 0.885, 0.320, 1.275)';
            $('#home-slider-1').royalSlider({
            arrowsNav: true,
            arrowsNavAutoHide: true,
            fadeinLoadedSlide: false,
            controlNavigationSpacing: 0,
            controlNavigation: 'bullets',
            imageScaleMode: 'none',
            imageAlignCenter:false,
            blockLoop: true,
            loop: true,
            numImagesToPreload: 3,
            transitionType: 'fade',
            keyboardNavEnabled: true,
            block: {
              delay: 400
            }
          });
      });
    </script>
    <script src="js/global.js"></script>
    <script src="js/jquery.royalslider.min.js"></script>                                                            
</body>
</html>
