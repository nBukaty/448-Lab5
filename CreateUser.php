<?php
error_reporting(E_ALL);
$username = $_POST["username"];

$servername = "mysql.eecs.ku.edu";
$dbusername = "nbukaty";
$password = "NickDatabase2";
$db_name = "nbukaty";

$mysqli = new mysqli($servername, $dbusername, $password, $db_name);

//check conection to database
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "INSERT INTO Users (user_id) VALUES('$username')";
if (empty($username)) {
  echo "Please give a username";
}
else if ($mysqli->query($query)===TRUE) {
  echo "New Record Created";
} else {
  echo "user not created";
}
//close connection
$mysqli->close();

 ?>
