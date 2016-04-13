<?php


session_start();
error_reporting(-1);

try {
    $dbh = new PDO("sqlite:../db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

$debugOn = true;


?>



<?php

require("../php/upload_file.php");

?>
<?php


if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_REQUEST[expire])) {  
} else {
    header("Location: ../bulletinboard.php#postbulliten");
}

$exp = $_REQUEST[expire]."00:00:00";
$expire = strtotime($exp);
$date  = time();
echo  "$expire";
echo  "$date";

$_REQUEST[name] = SQLite3::escapeString($_REQUEST[name]);
$_REQUEST[details] = SQLite3::escapeString($_REQUEST[details]);



if ($_REQUEST['submit'] == "post bulletin") {
    
	$sql = "INSERT INTO bullitens (expire, user, name, date, image, thumb, details, link, number, email) VALUES ('$expire',
        '$_SESSION[username]', '$_REQUEST[name]', '$date', '$fullimage_path', '$thumbpath', '$_REQUEST[details]', '$_REQUEST[webpage]', '$_REQUEST[number]', '$_REQUEST[email]')";
	if ($dbh->exec($sql)) {
        header("Location: ../bulletinboard.php");
    }
	else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Delete bulletin") {
	$sql = "DELETE FROM bullitens WHERE name = '$_REQUEST[name]'";
	if ($dbh->exec($sql)) {
        header("Location: ../bulletinboard.php");
    } else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Update bulletin") {
    echo "<p>Here I am</p>";
	$sql = "UPDATE bullitens SET name = '$_REQUEST[name]', expire = '$expire', details = '$_REQUEST[details]', link ='$_REQUEST[webpage]', number = '$_REQUEST[number]', email = '$_REQUEST[email]'";
	if ($dbh->exec($sql)) {
    		header("Location: ../bulletinboard.php");
    } else {
    echo "<p>Failed</p>";
    }
}
else {
echo "<p>Failed</P>";
}

$sql = "SELECT * FROM bullitens";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {

	$rows = $result->fetchall(PDO::FETCH_ASSOC);

}
foreach ($dbh->query($sql) as $row)
{

}

// close the database connection 
$dbh = null;
//header("Location: ../artists.php");
?>
