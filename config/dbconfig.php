<?php

/*
 * Dbconfig is connecting my application
 * to my database waawphp
 */

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'taeky';


$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "connection successful";

/*
 * With this code we've been able to connect
 * our application to our database.
 */



?>
