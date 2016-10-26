<?php
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
