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
<body>
    <div class="container">
        <!-- Header section -->
        <div class="header">
            <img src="images/background.jpg" class="header_img">
            <div class="webName">Banking System</div>
            <div class="menuContainer">
           <a href="transform_money.php" style="display: block;" class="admin"> <button class="menuButton" >Transfer Money</button></a>
            <a href="all_data.php" style="display: block;" class="admin"> <button class="menuButton" >Show customers data</button></a>
            <a href="history.php" style="display: block;" class="admin"> <button class="menuButton">Transformation History</button></a>

                <div class="links navBar" id="showNav">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <ul id="showing">
                    <li><a href="transform_money.php" style="display:block;" class="admin">Transfer Money</a></li>
                        <li><a href="all_data.php"style="display: block;" class="admin"> Show customers data</a></li>
                        <li><a href="history.php"style="display: block;" class="admin"> Transformation History </a></li>
                    </ul>
                </div>
            </div>
            <script>
                // <!-- script to show nav bar -->
var show = document.getElementById("showNav");
        var showing = document.getElementById("showing");
        var i = 0;
        show.addEventListener("click", () => {
            if (i === 0) {
                showing.style.display = "block"
                i = 1
            } else {
                showing.style.display = "none"
                i = 0
            }
})
                </script>
        </div>
    <div class="startContainer">
    <form action="transform_money.php">
        <button class='button' type="submit" value="Get Started">Transfer Money</button>
</form>
<form action="all_data.php">
        <button class='button' type="submit" value="Get Started">Show customers data</button>
</form>
<form action="history.php">
        <button class='button' type="submit" value="Get Started">Transformation History</button>
</form>
</div>
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
<script src="js/js.js"></script>
</body>
</html>