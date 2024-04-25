<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <div class = "form-container">
        <h2>Login To Get Started</h2>
        <form action ="Register.php" method="post">
        <input type="username" name="username" placeholder="Enter Your Username" required class="box">
            <input type="email" name="email" placeholder="Enter Your Email" required class="box">
            <input type="password" name="password" placeholder="Enter Your Password" required class="box">
            <input type="password" name="cpassword" placeholder="Confirm Your Password" required class="box">
            <input type="submit" name="submit" value="Register Now" class="btn">
            <p>Already have an account? <a href="Login.php"> Login</a><p>
    </div>

</body>
</html>

