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
$_REQUEST[name] = SQLite3::escapeString($_REQUEST[name]);
$_REQUEST[address] = SQLite3::escapeString($_REQUEST[address]);
$id = intval($_REQUEST[id]);
 /*name = name
address = address
number = number
email = username
paid = paid
vol = volunteer*/

if ($_REQUEST['submit'] == "Delete User ") {
	$sql = "DELETE FROM users WHERE Id = '$id'";
	if ($dbh->exec($sql)) {
        header("Location: ../members.php");
    } else {
        echo "<p>failed</p>";
    }
} else if ($_REQUEST['submit'] == "Update User") {
    echo "<p>Here I am</p>";
	$sql = "UPDATE users SET name = '$_REQUEST[name]', address = '$_REQUEST[address]', number = '$_REQUEST[number]', username ='$_REQUEST[email]', paid = '$_REQUEST[paid]', volunteer = '$_REQUEST[vol]' WHERE Id = '$id'";
	if ($dbh->exec($sql)) {
    		header("Location: ../members.php");
    } else {
    echo "<p>Failed</p>";
    }
} else {
echo "<p>Failed</P>";
}

$sql = "SELECT * FROM users";
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