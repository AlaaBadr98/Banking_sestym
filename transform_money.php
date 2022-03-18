<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/web_icon.png" type="image/x-icon">
    <link rel='stylesheet' type='text/css' media='screen' href='style/style.css'>
    <title>Banking System</title>
</head>
<body>
<div class="container">
    <div class="startContainer">
    <form method="post" action="make_sure.php">
        <div id="section1">
        <lable>Choose the customer</lable>
        <select id="customer" name="customerfrom">
  <option value="1">Alaa Osama Mohamed</option>
  <option value="2">Shimaa Mostafa Kamal</option>
  <option value="3">Eman Ahmed Mohamed</option>
  <option value="4">Dina Mohamed Ahmed</option>
  <option value="5">Esraa Osama Mohamed</option>
  <option value="6">Ahmed Mohamed Mahmoud</option>
  <option value="7">Saad Mahmoud Mohamed</option>
  <option value="8">Mahmoud Mohamed Ahmed</option>
  <option value="9">Sara Ahmed Mohamed</option>
  <option value="10">Kamal Mohamed Ahmed</option>
  <option value="11">Rasha Mohammed Ahmed</option>
  <option value="12">Mohamed Ahmed Mohamed</option>
</select>
<button id="next">Next</button>
</div >
<div id="section2" style="display:none">
<lable>Choose who you want to trasnfere to:</lable><br>
        <select id="customer" name="customerto">
  <option value="1">Alaa Osama Mohamed</option>
  <option value="2">Shimaa Mostafa Kamal</option>
  <option value="3">Eman Ahmed Mohamed</option>
  <option value="4">Dina Mohamed Ahmed</option>
  <option value="5">Esraa Osama Mohamed</option>
  <option value="6">Ahmed Mohamed Mahmoud</option>
  <option value="7">Saad Mahmoud Mohamed</option>
  <option value="8">Mahmoud Mohamed Ahmed</option>
  <option value="9">Sara Ahmed Mohamed</option>
  <option value="10">Kamal Mohamed Ahmed</option>
  <option value="11">Rasha Mohammed Ahmed</option>
  <option value="12">Mohamed Ahmed Mohamed</option>
</select><br>
<input type="text" name="money" placeholder="Amount of money" required><br>
<button id="back">Back</button>
<button type="submit">Next</button>
</div>
</form>
</div>
</div>
<script src="js/js.js"></script>
</body>
</html>