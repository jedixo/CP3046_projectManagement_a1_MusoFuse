<?php
session_start();
include("php/dbconnect.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Townsville</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>
<!-- START Logo -->
<body>
<?php
require("php/header.php");
?>
<div id="boxed_content" class="boxed_content">
  <div class="inner">
    <div id="content" class="site-content">
      <div class="page-inner">
        <div class="">
          <header class="page-header">
            <h1 class="page-title">Townsville</h1>
          </header>
          <div class="content">
            <section class="townsville-intro">
              <div class="townsville-intro-image"> <img src="images/Dusk_at_Rowes_Bay,_Townsville250-188.jpg" width="250" height="188" alt="An image of Rowes Bay, Townsville."> </div>
              <div class="townsville-intro-text">
                <h3>About Townsville</h3>
                <p>Townsville is a fast growing city located on the north-eastern coast of Queensland, Australia. With a population of around 200,000 in 2015 and significant business, tourist and government presence, Townsville is regarded as the heart and hub of the North Queensland.</p>
              </div>
            </section>
            <section class="townsville-to-do">
              <div class="townsville-to-do-text"> <br>
                <br>
                <br>
                <br>
                <h3>Things to do in Townsville</h3>
                <p> Situated within the dry tropics region of Queensland, Townsville enjoys an average of 270 days of sunshine a year in pleasantly warm conditions. It has also many natural attractions only a stone’s throw away. </p>
                <ul>
                  <li>The central section of the Great Barrier Reef is only a short boat trip away and many tours are operated daily. </li>
                  <li>With the reef of the coast, the worst of the waves are stopped allowing for family friendly calm and warm beaches to enjoy all year round. </li>
                  <li>The famous Daintree Tropical Rainforest is nearby, allowing for a unique glimpse of Australia’s distinctive tropical flora and fauna. </li>
                  <li>Magnetic Island is just off the coastline, perfect for an island retreat for couples or for a fun-filled beach adventure for families.</li>
                  <li>There are also many other unique and exciting facilities in Townsville to enjoy such as 1300SMILES stadium, the home of the North Queensland Cowboys; or the Townsville aquarium where you can see distinctive and deadly examples of Australian marine life. </li>
                </ul>
              </div>
            </section>
            <section class="townsville-links">
              <div class="townsville-links-text"> <br>
                <br>
                <h3>Important Links</h3>
                <ul>
                  <li><a href="http://www.townsvillenorthqueensland.com.au/" target="_blank">Tourism North Queensland</a></li>
                  <li><a href="http://www.tripadvisor.com.au/Tourism-g255073-Townsville_Queensland-Vacations.html" target="_blank">Trip Advisor Townsville</a></li>
                  <li><a href="http://www.greatbarrierreef.org/" target="_blank">Great Barrier Reef</a></li>
                  <li><a href="http://www.destinationdaintree.com/" target="_blank">Destination Daintree</a></li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require("php/footer.php");
?>
</body>
</html>