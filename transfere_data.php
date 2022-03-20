<?php
// get customer data
$from=$_POST['customerfrom'];
$to=$_POST['customerto'];
$money=$_POST['money'];

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

$sql = "SELECT * FROM `customers` WHERE id = '$from'";
$result = $conn->query($sql);
$from_data = $result->fetch_assoc();
// 
$sql = "SELECT * FROM `customers` WHERE id = '$to'";
$result = $conn->query($sql);
$to_data = $result->fetch_assoc();

if($from_data['money']>=$money) {

  $moneyfrom=$from_data['money']-$money;
  $sql= "UPDATE `customers` SET `money`='$moneyfrom' WHERE `id`='$from'";
  $result = $conn->query($sql);
  // 
$moneyto=$to_data['money']+$money;
$sql= "UPDATE `customers` SET `money`='$moneyto' WHERE `id`='$to'";
  $result = $conn->query($sql);
  // 
  $send=$from_data['name'];
  $reseiver=$to_data['name'];
  $sql= "INSERT INTO `data_history`( `money_from`, `money_to`, `money`) 
VALUES ( '$send' , '$reseiver' , '$money' )";
$result = $conn->query($sql);
echo '<script>alert("The money transfere successfully")</script>';
header("REFRESH:0.5;URL=history.php");
  }else{
    echo '<script>alert("You entered amount of money larger than you have")</script>';
  header("REFRESH:0.5;URL=transfere_money.php");
  }


$conn->close();
?>