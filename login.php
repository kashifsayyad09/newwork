<?php include('server.php'); ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

   
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="header">
        <h2>Login</h2>
    </div>
        <div class="input-group">
            <label>Username</label>
            <input class="user" type="text" name="username">
        </div>

        <div class="input-group">
    <label>Password</label>
    <div class="password-wrapper">
        <input class="pass" type="password" name="password" id="password">
        <span class="toggle-password" onclick="togglePassword('password', this)">
            👁️
        </span>
    </div>
</div>

        <div class="input-group2">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>

        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
    
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            var toggleIcon = document.querySelector(".toggle-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "👁️‍🗨️"; 
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "👁️"; 
            }
        }
    </script>
   

</body>
</html>
