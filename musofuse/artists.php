<?php

session_start();
include("php/dbconnect.php")

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Artists</title>
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
            <h1 class="page-title">Artists</h1>
          </header>
          <div class="content">
            <div class="artists-intro">
              <p><strong>Free listing for Music Centre members! Publicise yourself, your band or organisation here!</strong></p>
              <?php
                    if (isset($_SESSION['username']) and $_SESSION['paid'] == '1') {
                    echo    "<div class='artist-button'><a href='#openModal2' class='ui small button colored'>Add new artist</a></div>";
                        include("php/addArtist.php");                   
}
?>
            </div>
            <ul class="artist-list">
              <?php

// Display what's in the database at the moment.
$sql = "SELECT * FROM artists WHERE hidden=0";
foreach ($dbh->query($sql) as $row)
{
?>
              <?php            
echo              "<li>";
echo                   "<div class='artist-container'>";
echo                      "<div class='artist-image'><img src='$row[thumb]' alt='$row[name]' /></div>";
echo                       "<div class='artist-info'>";
echo                           "<h2 class='artist-info-name'>$row[name]</h2>";
echo                            "<div class='artist-info-bio'>$row[summary]";
echo                            "<div class='artist-button'><a href='artistdetailed.php?rowid=$row[id]' class='ui small button colored'>Read More</a></div></div>";
                                    echo "<input type='hidden' name='email' value='$row[email]' />";
                                    echo "<input type='hidden' name='phone' value='$row[phone]' />";
                                    echo "<input type='hidden' name='fax' value='$row[fax]' />";
                                    echo "<input type='hidden' name='id' value='$row[id]' />";
echo                        "</div>";
echo                    "</div>";
echo                "</li>";
?>
              <?php
}

// close the database connection
$dbh = null;
?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>
<?php
require("php/footer.php");
?>
</body>
</html>
