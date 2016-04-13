<?php


include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: displayArtitsList.php");
}
?>
<?php
$target_dir = "";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    } else {
    }

?>
<?php

if ($_REQUEST['submit'] == "Insert Entry")
{
    
	$sql = "INSERT INTO artists (name, summary, imageUrl, details, webpage, fax, phone, email, mobile) VALUES ('$_REQUEST[name]', '$_REQUEST[summary]', '$target_file', '$_REQUEST[details]', '$_REQUEST[webpage]', '$_REQUEST[fax]', '$_REQUEST[phone]', '$_REQUEST[email]', '$_REQUEST[mobile]')";
	if ($dbh->exec($sql)) {
    		header("Location: displayArtitsList.php");
}
	else {}
}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
    		header("Location: displayArtitsList.php");
}
	else {}
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', summary = '$_REQUEST[summary]', imageUrl = '$target_file', details = '$_REQUEST[details]', webpage = '$_REQUEST[webpage]', fax = '$_REQUEST[fax]', phone = '$_REQUEST[phone]', email = '$_REQUEST[email]', mobile = '$_REQUEST[mobile]' WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
    		header("Location: displayArtitsList.php");
}
	else {}
}
else {}

$sql = "SELECT * FROM artists";
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
?>
