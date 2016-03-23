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


// form validation
if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_REQUEST[date])) {  
} else {
    header("Location: ../events.php#editEvent");
}
if (preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $_REQUEST[time])) {
} else {
    header("Location: ../events.php#editEvent");
}

$_REQUEST[name] = SQLite3::escapeString($_REQUEST[name]);
$_REQUEST[details] = SQLite3::escapeString($_REQUEST[details]);
$_REQUEST[location] = SQLite3::escapeString($_REQUEST[location]);
echo "$_REQUEST[id]<br>";
echo "$_REQUEST[name]<br>";
echo "$_REQUEST[details]<br>";
echo "$_REQUEST[artist]<br>";
echo "$_REQUEST[location]<br>";
$date = $_REQUEST[date]." ".$_REQUEST[time].":00";
$time  = strtotime($date);
echo "$time";
$id = intval($_REQUEST[id]);


if ($_REQUEST['submit'] == "Delete Event ") {
	$sql = "DELETE FROM events WHERE id = '$id'";
	if ($dbh->exec($sql)) {
        header("Location: ../events.php");
    } else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Update Event") {
    echo "<p>Here I am</p>";
	$sql = "UPDATE events SET name = '$_REQUEST[name]', time = '$time', details = '$_REQUEST[details]', artistId ='$_REQUEST[artist]', location = '$_REQUEST[location]' WHERE id = '$id'";
	if ($dbh->exec($sql)) {
    		header("Location: ../events.php");
    } else {
    echo "<p>Failed</p>";
    }
} else {
echo "<p>Failed</P>";
}

$sql = "SELECT * FROM events";
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
