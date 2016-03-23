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
$_REQUEST[comments] = SQLite3::escapeString($_REQUEST[comments]);


echo "{$_REQUEST[name]}";
echo "{$_REQUEST[number]}";
echo "{$_REQUEST[email]}";
echo "{$_REQUEST[address]}";
//echo "{$_REQUEST[password]}";
echo "{$_REQUEST[comments]}";
$pwd = md5($_REQUEST[password]);


$sql = "INSERT INTO users (number, comments, address, name, password, username) VALUES ('$_REQUEST[number]', '$_REQUEST[comments]', '$_REQUEST[address]', '$_REQUEST[name]', '$pwd', '$_REQUEST[email]')";

if ($dbh->exec($sql)) {
    header("Location: ../members.php");
} else {
    header("Location: ../members.php#addUser");
}

?>