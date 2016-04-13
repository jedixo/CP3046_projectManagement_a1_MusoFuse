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

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: ../artits.php");
}

?>



<?php

require("../php/upload_file.php");

?>
<?php

$_REQUEST[name] = SQLite3::escapeString($_REQUEST[name]);
$_REQUEST[summary] = SQLite3::escapeString($_REQUEST[summary]);
$_REQUEST[details] = SQLite3::escapeString($_REQUEST[details]);



if ($_REQUEST['submit'] == "Add Artist") {
    
	$sql = "INSERT INTO artists (name, summary, imageUrl, details, webpage, fax, phone, email, mobile, user, thumb) VALUES ('$_REQUEST[name]',
        '$_REQUEST[summary]', '$fullimage_path', '$_REQUEST[details]', '$_REQUEST[webpage]', '$_REQUEST[fax]', '$_REQUEST[phone]', '$_REQUEST[email]',
        '$_REQUEST[mobile]', '$_SESSION[username]', '$thumbpath' )";
	if ($dbh->exec($sql)) {
        header("Location: ../artists.php");
    }
	else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Delete Artist") {
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
        header("Location: ../artists.php");
    } else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Update Artist") {
    echo "<p>Here I am</p>";
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', summary = '$_REQUEST[summary]', details = '$_REQUEST[details]',
    webpage ='$_REQUEST[webpage]', fax = '$_REQUEST[fax]', phone = '$_REQUEST[phone]', email = '$_REQUEST[email]', mobile = '$_REQUEST[mobile]' 
    WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql)) {
    		header("Location: ../artists.php");
    } else {
    echo "<p>Failed</p>";
    }
}
else {
echo "<p>Failed</P>";
}

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
//header("Location: ../artists.php");
?>
