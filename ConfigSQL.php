<?php

$host = "ilinkserver.cs.utep.edu";
$db = 'S20am_team8';   

$username = "arodriguez103"; 
$password = "awG2000ky!";  
/**
 * Making the connection to the database.
 * Parameters - host, username, password, team database.
 */

$conn = new mysqli($host, $username, $password, $db);
#$conn = mysqli_connect($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>