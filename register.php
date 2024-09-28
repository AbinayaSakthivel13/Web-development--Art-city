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
        <h3>Register Now:</h3><hr width="100%"><br>
        <label for="name">Enter Name : </label><br>
        <input type="text" name="name" required placeholder="Your Name">
        <label for="name">Enter Email address : </label><br>
        <input type="email" name="email" required placeholder="Your Email">
        <label for="name">Enter Password : </label><br>
        <input type="password" name="pwd" required placeholder="Your password">
        <label for="name">Confirm Password : </label><br>
        <input type="password" name="cpwd" required placeholder="Confirm Your Password">
        <label for="user_type">Select One option : </label><br>
        <select name="user_type" required>
            <option selected>Select One</option>
            <option value="User">User</option>
            <option value="Admin">Admin</option>
        </select>
        <center><input type="submit" name="submit" required value="Register" class="form-btn"></center>
        <p>Already have an account? <a href="login.php">Login now</a></p>
    </form>
</div>
</body>
</html>