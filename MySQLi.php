<?php

/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","") 
            or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test2",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

// https://stackoverflow.com/questions/27345377/try-catch-in-mysqli

include_once('database.php');

$databaseHost = $Host;
$databaseName = $Name;
$databaseUsername = $Username;
$databasePassword = $Password;

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($mysqli->connect_error) {
    echo "<h1>Error</h1>";
    die("Connection failed: " . $mysqli->connect_error);
}
