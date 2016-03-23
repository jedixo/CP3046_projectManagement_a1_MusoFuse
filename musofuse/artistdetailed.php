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
<script language="javascript" type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
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
<div id="boxed_content" class="boxed_content">
  <div class="inner">
    <div id="content" class="site-content">
      <div class="page-inner">
        <div class="">
          <div class="content">
            <?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM artists WHERE id = '$_REQUEST[rowid]'";
foreach ($dbh->query($sql) as $row)
{
?>
            <?php   
echo "<section class='artistdetailed'>";
echo     "<div class='artistdetailed-image'>";
    echo    "<h2 class='artistdetailed-name'>$row[name]</h2>";
echo        "<img src='$row[imageUrl]' width='800' height='363' alt='$row[name]'>";
echo    "</div>";
echo    "<h2 class='artistdetailed-name'>$row[name]</h2>";
echo    "<div class='artistdetailed-info'>";
echo        "$row[details]";
echo "<h3>Contact information:</h3>";
echo "<table class='contact-table'>";
if (isset($row[phone]))
{
    echo "<tr>";
    echo "<td>Phone:</td>";
    echo "<td>$row[phone]</td>";
    echo "</tr>";
}
if (isset($row[mobile]))
{
    echo "<tr>";
    echo "<td>Mobile:</td>";
    echo "<td>$row[mobile]</td>";
    echo "</tr>";
}
if (isset($row[fax]))
{
    echo "<tr>";
    echo "<td>Fax:</td>";
    echo "<td>$row[fax]</td>";
    echo "</tr>";
}
echo "</table>";
if (isset($row[email])) 
{
    echo        "<a href='mailto:$row[email]' class='ui button colored'>Email</a>";
}
 if (isset($row[webpage])) 
{
    echo        " <a href='$row[webpage]' class='ui button colored'>Webpage</a>";
}
else {}
    
    if ($row[user] == $_SESSION['username'] or $_SESSION['username'] == 'Administrator') {
        
         echo        " <a href='#openModal3' class='ui button colored'>Update Details</a>";
        include("php/updateDetails.php");
    }
    
    
echo    "</div> ";           
echo "</section>";
$hits = $row[hits] + 1;
?>
            <?php
}


//increments hits
$sql = "UPDATE artists SET hits = '$hits' WHERE id = '$_REQUEST[rowid]'"; 
$dbh->exec($sql);


// close the database connection
$dbh = null;
?>
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
