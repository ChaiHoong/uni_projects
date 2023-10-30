<?php
   session_start();
   include('conn.php');
   $error = "";
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT Cus_ID FROM customer WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


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
          <form action = "" method = "POST">
              <p class = "large-underline">Login</p><br><br>
              <div class = "line">
              <label  for = "username">Username: </label> 
              <input class = normal type = "text" id = "username" name = "username" required><br><br>
              </div>
              <div class = "line">
              <label  for =  "password">Password: </label> 
              <input class = normal type = "password" id = "password" name = "password" required> <br><br>
              </div>
              <div style = "color:red"> <?php echo $error; ?> </div>
              <button type = "submit">Submit</button><br><br>
              <p>Don't have an account yet?</p> 
              <a href = "signup.php">Register here</a>
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
  
  <script type="text/javascript" src="script.js"></script>
</html>