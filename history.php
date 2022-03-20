<?php
// connecting to database
$servername = "sql106.epizy.com";
$username = "epiz_31336166";
$password = "fj8K9JLjYUH";
$dbname = "epiz_31336166_banking_system";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `data_history`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/web_icon.png" type="image/x-icon">
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <title>Banking System</title>
</head>
<body class="container">
<div class='transfereContainer'style='width: 80vw;overflow: scroll;'>
        <div class="back">
            <a href="index.php"><i class='fas fa-undo'></i></a>
        </div>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width:fit-content;
    margin:4%;
}

td, th {
    border: 1px solid #3f75b5;
    text-align: center;
    padding: 8px;
    color: #3f75b5;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div style="display: flex;justify-content: center;">
<table>
  <tr>
    <th>ID</th>
    <th>From</th>
    <th>To</th>
    <th>Amount of money</th>
    <th>Date</th>
  </tr>
  <?php  
   while($row = $result->fetch_assoc()) {
    ?>
<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['money_from']?></td>
    <td><?=$row['money_to']?></td>
    <td><?=$row['money']?></td>
    <td><?=$row['theData']?></td>
  </tr>
  <?php
   }
  ?>
  
</table>
<!-- close the connection -->
<?php
$conn->close();
?>
</div> 
</div>
</div>        
</div>

<!-- footer -->
<div class="footer">
            <div class="names">
                <div>
                    Created By
                </div>
                <p class="team">
                    Alaa Osama Mohammed
                </p>
                <div class="contant">
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/alaa-osama/"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

            </div>
        </div>
</div>  
</body>
</html>