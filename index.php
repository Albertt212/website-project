<?php

include "config.php";
session_start();

if(isset($_POST{'submit'})){

$email =msqli_real_escape_string($conn, $_POST['email']);

$select_validation = mysqli_query($conn, "SELECT * FROM 'users' WHERE email = '$email' AND password = '$pass';") or die ('query failed');
 if(mysqli_num_rows($select_validation) > 0){

    $row= mysqli_fetch_assoc($select_validation);


    $_SESSION['user_name'] = $row['name'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_id'] = $row['id'];
    header('location:.php');


 }else{
    $message[]= 'incorrect email or password!';
 }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = "form-container">
        <h2>Login To Get Started</h2>
        <form action ="" method="post">
            <input type="email" name="email" placeholder="Enter Your Email" required class="box">
            <input type="password" name="password" placeholder="Enter Your Password" required class="box">
            <input type="submit" name="submit" value="Login Now" class="btn">
            <p>Don't have an account? <a href="register.php"> Register Now</a><p>


</body>
</html>