<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
    <form action="" method="post">
        <h3>Login:</h3><hr width="100%"><br>
        <label for="name">Enter Email address : </label><br>
        <input type="email" name="email" required placeholder="Your Email">
        <label for="name">Enter Password : </label><br>
        <input type="password" name="pwd" required placeholder="Your password">
        <center><input type="submit" name="submit" required value="Login" class="form-btn"></center>
        <p>Don't have an account? <a href="register.php">Register now</a></p>
    </form>
</div>
</body>
</html>