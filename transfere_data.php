<?php
// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banking_system";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// get customer data
$from=$_POST['customerfrom'];
$to=$_POST['customerto'];
$money=$_POST['money'];

$sql="SELECT `money` FROM `customers`WHERE `id`=$from
       SELECT`money` FROM `customers` WHERE `name`=`$to`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

print_r($row);

$conn->close();
?>