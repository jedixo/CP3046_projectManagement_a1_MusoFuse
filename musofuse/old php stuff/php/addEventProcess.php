<?php

session_start();
?>
<?php
try {
    $dbh = new PDO("sqlite:../db/tcmc.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}




// form validation
if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $_REQUEST[date])) {  
} else {
    header("Location: ../events.php#addEvent");
}
if (preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $_REQUEST[time])) {
} else {
    header("Location: ../events.php#addEvent");
}

$_REQUEST[name] = SQLite3::escapeString($_REQUEST[name]);
$_REQUEST[details] = SQLite3::escapeString($_REQUEST[details]);
$_REQUEST[location] = SQLite3::escapeString($_REQUEST[location]);

echo "$_REQUEST[name]<br>";
echo "$_REQUEST[details]<br>";
echo "$_REQUEST[artist]<br>";
echo "$_REQUEST[location]<br>";
$date = $_REQUEST[date]." ".$_REQUEST[time].":00";
$time  = strtotime($date);
echo "$time";

$sql = "INSERT INTO events (details, name, artistId, time, location) VALUES ('$_REQUEST[details]', '$_REQUEST[name]', '$_REQUEST[artist]', '$time', '$_REQUEST[location]')";

if ($dbh->exec($sql)) {
    header("Location: ../events.php");
} else {
    header("Location: ../events.php#addEvent");
}

?>