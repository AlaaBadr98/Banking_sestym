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
        <div class='transfereContainer'>
        <div class="back">
            <a href="index.php"><i class='fas fa-undo'></i></a>
        </div>
        <form method="post" action="transfere_data.php">
        <div class='transfereform'>
            <div>
            <lable class='text'>Choose the customer:</lable>
        </div>
    <div>
            <select class='select' id="customer" name="customerfrom">
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
</div>
<div>
<lable class='text'>Choose who you want to trasnfere to:</lable>
</div>
<div>
        <select class='select' id="customer" name="customerto">
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
</div>
<div>
            <lable class='text'>Enter the amount of money:</lable>
        </div>
<div>
<input class='input' type="text" name="money" placeholder="Amount of money" required><br>
</div>
<div>
<button class='transferebutton' type="submit">Transfer money</button>
</div>
        </form>

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