<?php
$username = $_POST["username"];

$servername = "mysql.eecs.ku.edu";
$dbusername = "nbukaty";
$password = "NickDatabase2";
$db_name = "nbukaty";

$mysqli = new mysqli($servername, $dbusername, $password, $db_name);

//check conection to database
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT * FROM Users";

if ($result = $mysqli->query($query)) {
  echo "<table><tr><th>User ID</th></tr>";
  while($row = $result->fetch_assoc()){
    echo "<tr><td>".$row['user_id']."</td></tr>";
  }
  //free the result set
  $result->free();
} else {
  echo "uh oh";
}
//close connection
$mysqli->close();

 ?>
