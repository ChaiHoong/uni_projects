<?php
session_start();
include('conn.php');

if(!isset($_SESSION['login_user'])){
  $checkUser = "0";
  echo "<script>alert('Please login before checking out.')</script>";
  echo "<script> location.href='login.php'; </script>";
  // Display the alert box 
  exit;

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
    <main class = main>
        <br><p class = "large-underline">Checkout</p><br>
        <div class = row>
            <img class = round-left src = "image/book1.jpg" width = 210 height = 350>
            <p class = title>The Art of War</p>
            <div class = "left">Price(RM):<div class = price id = "book1-price">RM 120.00</div></div>
            <div class = right-label> 
                Total price(RM) is: <p id = "book1-total">0</p>
            </div>
            <div class = right-label> 
                Qty: <p id = "book1-qty">0</p>
            </div>
        </div>
        <div class = row>
            <img class = round-left src = "image/book2.jpg" width = 210 height = 350>
            <p class = title>Billion Dollar Whale: The Man Who Fooled Wall Street, Hollywood, and the World</p>
            <div class = "left">Price(RM):<div class = price id = "book1-price">RM 100.00</div></div>
            <div class = right-label> 
                Total price(RM) is: <p id = "book2-total">0</p>
            </div>
            <div class = right-label> 
                Qty: <p id = "book2-qty">0</p>
            </div>
        </div>
        <div class = row>
            <img class = round-left src = "image/book3.jpg" width = 210 height = 350>
            <p class = title>Way of the Wolf: Straight Line Selling: Master the Art of Persuasion, Influence, and Success</p>
            <div class = "left">Price(RM):<div class = price id = "book1-price">70.00</div></div>
            <div class = right-label> 
                Total price(RM) is: <p id = "book3-total">0</p>
            </div>
            <div class = right-label> 
                Qty: <p id = "book3-qty">0</p>
            </div>
        </div>
        <div class = row>
            <img class = round-left src = "image/book4.jpg" width = 210 height = 350>
            <p class = title>Crazy Rich Asians</p>
            <div class = "left">Price(RM):<div class = price id = "book1-price">50.00</div></div>
            <div class = right-label> 
                Total price(RM) is: <p id = "book4-total">0</p>
            </div>
            <div class = right-label> 
                Qty: <p id = "book4-qty">0</p>
            </div>
        </div>
        <div class = row>
            <div class = "large">Total Price(RM):
                <div id = "total-price" class = price-large>-</div>
            </div>
            <form action="success_checkout.php">
                <button type="submit" onclick = "window.localStorage.clear();">Checkout</button>
            </form>
        </div>
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



document.querySelector('#book1-qty').innerText = localStorage.getItem('book1qty')
document.querySelector('#book2-qty').innerText = localStorage.getItem('book2qty')
document.querySelector('#book3-qty').innerText = localStorage.getItem('book3qty')
document.querySelector('#book4-qty').innerText = localStorage.getItem('book4qty')

document.getElementById('book1-total').innerText = localStorage.getItem('book1qty') * 120
document.getElementById('book2-total').innerText = localStorage.getItem('book2qty') * 100
document.getElementById('book3-total').innerText = localStorage.getItem('book3qty') * 70
document.getElementById('book4-total').innerText = localStorage.getItem('book4qty') * 50

var a = document.getElementById('book1-total').innerText;
var b = document.getElementById('book2-total').innerText;
var c = document.getElementById('book3-total').innerText;
var d = document.getElementById('book4-total').innerText;
var total = parseFloat(a) + parseFloat(b) + parseFloat(c) + parseFloat(d);  
document.getElementById("total-price").innerText = total;


</script>

<script type="text/javascript" src="script.js"></script>
</html>