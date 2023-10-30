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
    <main class = product> 
        <br><p class = "large-underline">Product</p><br>
        <div class = row>   
            <img class = round-left src = "image/book1.jpg" width = 210 height = 350>
            <p class = title>The Art of War</p>
            <p class = desc>`Opportunities multiply as they are seized.'
                Written in the 6th century BC, Sun Tzu's The Art of War is a Chinese military treatise that is still revered today as the ultimate commentary on war and military strategy.  
                Words that are as resonant today in every aspect of our lives as they were when he wrote them. 
                Legend has it that he was known for the brilliant campaigns he led around the time of Confucius. 
                His work was memorized and passed down orally, before eventually being copied onto bamboo strips and passed around.</p>
            <div class = "left">Price(RM):<div class = price id = "book1-price">RM 120.00</div></div>
            <label class = right-label for = q1> Qty:
            <input type = number id = book1 name = book1 placeholder = "Adjust with arrows only" min = "0" max= "21" step="1" onkeydown="return false" value = >
            </label>
        </div>
        <div class = row>
            <img class = round-left src = "image/book2.jpg" width = 210 height = 350>
            <p class = title>Billion Dollar Whale: The Man Who Fooled Wall Street, Hollywood, and the World</p>
            <p class = desc>An epic true-tale of hubris and greed from two Pulitzer-finalist Wall Street Journal reporters, 
                Billion Dollar Whale reveals how a young social climber pulled off one of the biggest financial heists in history--right under the nose of the global financial industry
                --exposing the shocking secret nexus of elite wealth, banking, Hollywood, and politics.
            </p>
            <div class = "left">Price(RM):<div class = price id = "book2-price">RM 100.00</div></div>
            <label class = right-label for = q2> Qty:
            <input type = number id = book2 name = book2 placeholder = "Adjust with arrows only" min = "0" max= "5" step="1" onkeydown="return false">
            </label>
        </div>
        <div class = row>
            <img class = round-left src = "image/book3.jpg" width = 210 height = 350>
            <p class = title>Way of the Wolf: Straight Line Selling: Master the Art of Persuasion, Influence, and Success</p>
            <p class = desc>Jordan Belfort reveals the step-by-step sales and persuasion system proven to turn anyone into a sales-closing, money-earning rock star. 
                For the first time ever, Jordan Belfort opens his playbook and gives you access to his exclusive step-by-step system--the same system he used to create massive wealth for himself, 
                his clients, and his sales teams.  
                Every technique, every strategy, and every tip has been tested and proven to work in real-life situations.
            </p>
            <div class = "left">Price(RM):<div class = price id = "book3-price">RM 70.00</div></div>
            <label class = right-label for = q3> Qty:
            <input type = number id = book3 name = book3 placeholder = "Adjust with arrows only" min = "0" max= "20" step="1" onkeydown="return false">
            </label>
        </div>
        <div class = row>
            <img class = round-left src = "image/book4.jpg" width = 210 height = 350>
            <p class = title>Crazy Rich Asians</p>
            <p class = desc>Crazy Rich Asians is the outrageously funny debut novel about three super-rich, pedigreed Chinese families and the gossip, 
                backbiting, and scheming that occurs when the heir to one of the most massive fortunes in Asia brings home his ABC (American-born Chinese) girlfriend to the wedding of the season.
                "There's rich, there's filthy rich, and then there's crazy rich ... 
                A Pride and Prejudice-like send-up about an heir bringing his Chinese-American girlfriend home to meet his ancestor-obsessed family."
            </p>
            <div class = "left">Price(RM):<div class = price id = "book4-price">RM 50.00</div></div>
            <label class = right-label for = q4> Qty:
            <input type = number id = book4 name = book4 placeholder = "Adjust with arrows only" min = "0" max= "3" step="1" onkeydown="return false">
            </label>
        </div>
        <div>
            <form action = checkout.php>
                <button>&#8594; Proceed to Checkout &#8592;</button>
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

<script type="text/javascript" src="script.js"></script>
<script>
document.querySelector('#book1').addEventListener('change',
function(){
    console.log(document.querySelector('#book1').value)
    localStorage.setItem('book1qty', document.querySelector('#book1').value)
})

document.querySelector('#book2').addEventListener('change',
function(){
    console.log(document.querySelector('#book2').value)
    localStorage.setItem('book2qty', document.querySelector('#book2').value)
})

document.querySelector('#book3').addEventListener('change',
function(){
    console.log(document.querySelector('#book3').value)
    localStorage.setItem('book3qty', document.querySelector('#book3').value)
})

document.querySelector('#book4').addEventListener('change',
function(){
    console.log(document.querySelector('#book4').value)
    localStorage.setItem('book4qty', document.querySelector('#book4').value)
})

</script>
</html>