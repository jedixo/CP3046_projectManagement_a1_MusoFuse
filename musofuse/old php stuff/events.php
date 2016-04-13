<?php

session_start();
include("php/dbconnect.php")

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Events</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
    selector: "textarea",
    menubar: false,
     toolbar: false,
    statusbar : false
    
    
});
</script>
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
        <h1 class="page-title">Events</h1>
      </header>
      <div class="content">
        <?php
    if ($_SESSION['username'] == "Administrator") {
        echo    "<div class='artist-button'><a href='#addEvent' class='ui small button colored'>Add new Event</a></div>";
        include("php/addEvent.php");

}
?>
        <section class="events">
          <ul class="events-list">
            <?php 
$sql = "SELECT * FROM events ORDER BY time";
foreach ($dbh->query($sql) as $row) {
    $artist;
    $sql2 = "SELECT * FROM artists WHERE id='$row[artistId]'";
    foreach ($dbh->query($sql2) as $art) {
        $artist = $art;
    }
    if (time() < $row['time']) {
       $date = date('l jS \of F Y h:i:s A', $row['time']);

?>
            <li>
              <div class="event-container">
                <div class="artist-image"><img <?php echo "src='$artist[thumb]' alt='$artist[name]'";?> /></div>
                <div class="event-info">
                  <h3 class="event-info-name"><?php echo "$row[name]"; ?></h3>
                  <div class="event-info-details"> <span class="event-time"><strong><?php echo "$date"; ?></strong></span> <span class="event-location"> at the <?php echo "$row[location]"; ?></span> </div>
                  <div class="artist-info-bio"><?php echo "$row[details]"; ?><br>
                    <?php  
        if ($_SESSION[username] == "Administrator") { ?>
                    <div class="event-button"><a href="?name=<?php echo"$row[name]"; ?>#editEvent" class="ui small button colored">user edit</a></div>
                    <?php 
                    include("php/editeventdialog.php");
                                               } 
                            ?>
                  </div>
                  <br>
                </div>
              </div>
            </li>
            <?php
    }
}
?>
          </ul>
        </section>
      </div>
      <script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>
      <?php
require("php/footer.php");
?>
    </div>
  </div>
</div>
</body>
</html>
