<?php
   include('conn.php');

   if(!isset($_SESSION)){
      session_start();
      /*session is started if you don't write this line can't use $_Session  global variable*/
   }
   
   $username = $_SESSION['login_user'];
   // Initializing PHP Variable with value of Session
   
   $ses_sql = mysqli_query($con,"select * from customer where Username = '$username' ");
   // mysqli_query(connect, query)
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   // mysqli_fetch_array to find username that exists in database

   $cus_id = $row['Cus_ID'];
   $_SESSION['login_user_id'] = $cus_id;
?>
