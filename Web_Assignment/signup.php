<?php
session_start();
include('conn.php');

if(!isset($_SESSION['login_user'])){
  $checkUser = "0";

}else{
  include('session.php');
  $checkUser = "1";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoong's Book Store</title>
    <link rel = "stylesheet" href = "main.css">
    <link rel = "stylesheet" href = "form.css">
</head>
<body>
    <nav>
      <header>
          <div class="header_1">
            <input id="uservalue" type="hidden" value="<?php echo $checkUser; ?>">
            <p class = "logo">Hoong's Book Store</p>
            <a href = "index.php"><img src = "image/house.png" height = 20px width = 20px>Homepage</a>
            <a href = "product.php"><img src = "image/book.png" height = 20px width = 20px>Products</a>
            <a href = "checkout.php"><img src = "image/cart.png" height = 20px width = 20px>Cart</a>  
          </div>
          <div class="login_logout_btn">
            <a class = "login" id = "login" href = "login.php"><img src = "image/key.png" height = 20px width = 20px>Login/Signup</a>  
            <a class = "logout" id = "logout" href="logout.php"><img src = "image/logout.png" height = 20px width = 20px>Log Out</a>
          </div>
      </header>
    </nav>
    <main class = account>
        <form id = "create_form" action = "insert.php" method ="post" onsubmit="return check_password()">
            <p class = large-underline>Signup</p><br><br>
            <div class = line>
            <label for = "username">
                Username: <input class = normal type="text" id = "username" name="username" minlength="4" maxlength="18" required="required" title="Username must be between 4 to 14 characters long." placeholder="Enter a username"> <br><br>
            </label>
            </div>
            <div class = line>
            <label for = "r_name">
                Name: <input class = normal type="text" id = "r_name" name="r_name" minlength="1" maxlength = "255" required="required" title="Enter recipient name for shipping purposes" placeholder="Parcel recipient name"> <br><br>
            </label>
            </div>
            <div class = line-long>
            <label for = "shipping_address">
                Shipping Address: <textarea class = normal-address type="text" id = "shipping_address" name="shipping_address" minlength="1" maxlength = "255" required="required" title="Enter your Shipping address" placeholder="Enter Shipping address"></textarea><br><br>
            </label>
            </div>
            <div class = line>
            <label for = "phonenumber">
                Phone Number: <input class = normal type="tel" id = "phonenumber" name="phonenumber" pattern="[0-9]{10,11}" required="required" title="Should contain only numbers and length between 10 to 11" placeholder="Enter Phone Number"> <br> <br>
            </label>
            </div>
            <div class = line>
            <label for = "password">
                Password: <input class = normal type="password" id="password" name="password" minlength="4" maxlength = "12" required="required" title="Set a password that is between 4 and 12 characters" placeholder="Enter password"> <br> <br>
            </label>
            </div>
            <div class = line>
            <label for = "cfm_password">
                Confirm password: <input class = normal type="password" id="cfm_password" name="cfm_password" minlength="4" maxlength = "12" required="required" title="Confirm password" placeholder="Confirm your password"> <br> <br>
            </label>
        </div>
            <button type = submit>Submit</button>
            <p>Have an account?</p> 
            <a href = "login.php">Click to return to login page.</a>
        </form>
    </main>
    <footer>
        Have any enquiries?<br><br>
        Feel free to contact us at:<br>
        Our address: Level 18, Tm Annexe 1, LG1, Jalan Pantai Baharu, Jalan Pantai, 59100 Kuala Lumpur.<br>
        Email: <a class= email href="mailto:support@hoongbook.com">support@hoongbook.com</a> <br>
        Phone/Whatsapp: 012-345 6789 <br>
    </footer>
</body>
<script>
     function check_password()
        {
            let password1 = document.forms["create_form"]["password"].value;
            let password2 = document.forms["create_form"]["cfm_password"].value;

            password1 = password1.trim();
            password2 = password2.trim();

            if (password1 == password2) 
            {
                return true;
            }
            else
            {
                alert("Input password must be the same!!!");
                document.getElementById("password").value="";
                document.getElementById("cfm_password").value="";
                return false;
            }
        }
</script>

<script type="text/javascript" src="script.js"></script>
</html>