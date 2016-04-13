<?php
session_start();
include("php/dbconnect.php")
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Members</title>
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
<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
  <div class="inner">
    <div class="content">
      <div class="page-innter">
        <div class="">
          <header class="page-header">
            <?php
if (!isset($_SESSION[username])) {
	?>
            <h1 class="page-title">Members - Registration</h1>
          </header>
          <section class="members-about">
            <div class="members-about-intro">
              <h3>Information about Membership</h3>
              <p>If you want to volunteer to help at events or on the administrative side of the Townsville Community Music Centre, simply sign up for membership and respond to the various different positions as they appear on the Bulletin Board.</p>
              <p>There are two different types of membership: Registered Members and Paid Members. Paid membership is $25 a year and has many benefits.
              <p>Features of being a registered user are:
              <ul>
                <li>Receive information about artists and events</li>
                <li>Get mailed or emailed the Newsletter</li>
                <li>Post and edit on the bulletin board.</li>
              </ul>
              <p>Benefits of Paid Memebership include:</p>
              <ul>
                <li>All of the features of Registered membership</li>
                <li>Members' ticket discounts can be as high as 50% ! ! ! ! ! ! ! ! ! ! !</li>
                <li>Exclusive access to artists.</li>
                <li>Access to members exclusive events.</li>
                <li>Your money supports the continuing fuction of the TCMC</li>
                <li>The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</li>
              </ul>
            </div>
          </section>
          <section class="members-guidelines">
            <h3>Membership Guidelines</h3>
            <ul>
              <li>No inappropiate language.</li>
              <li>Always be respectful of others.</li>
              <li>Have FUN!</li>
            </ul>
            <?php
if (!isset($_SESSION[username])) {
    ?>
            <a href="#addUser" class="ui huge button coloured">Sign Up</a>
            <?php
}
?>
          </section>
          <?php
require("php/addUser.php");
?>
          <?php
} else if ($_SESSION[username] == "Administrator") {
	?>
          <h1 class="page-title">You are the Administrator</h1>
          <h3 Class="page-title">you can edit users here</h3>
        </div>
      </div>
      <br>
      <br>
      <ul class="events-list">
        <?php 
	$sql = "SELECT * FROM users";
foreach ($dbh->query($sql) as $rowu) {
	if ($rowu[username] != "Administrator") {
	?>
        <li> <a class="white" href="?name=<?php echo"$rowu[Id]"; ?>#edituser"><?php echo "$rowu[username]"; ?></a>
          <?php
	 require("php/edituser.php"); ?>
        </li>
        <?php
	}
} ?>
      </ul>
      <?php
} else {
	?>
      <header>
        <h1 class="page-title">You are already a member </h1>
      </header>
      <?php
}
?>
    </div>
  </div>
</div>
<?php
require("php/footer.php");
?>
</body>
</html>
