<?php
include("conn.php");
$sql="INSERT INTO customer (Username, Password, Name, Contact, Shipping_Address)
VALUES
('$_POST[username]','$_POST[password]','$_POST[r_name]', '$_POST[phonenumber]', '$_POST[shipping_address]')";

$check_existing = mysqli_query($con,"SELECT * FROM customer WHERE Username = '$_POST[username]'");
$exist_rows = mysqli_num_rows($check_existing);

if (!$exist_rows == 0) 
{
    echo '<script>alert("Username already taken, please choose another username.");
    window.location.href = "signup.php";
    </script>';
} 
else 
{
    mysqli_query($con,$sql);
    echo '<script>alert("Details recorded!");
    window.location.href = "success_signup.php";
    </script>';
}

mysqli_close($con);
?>