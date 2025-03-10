<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
<div class="header">
		<h2>Register</h2>
	</div>
		<div class="input-group">
			<label>Username</label>
			<input class="ruser" type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
    <label>Email</label>
    <input class="remail" type="email" name="email" id="email" value="<?php echo $email; ?>" required>
    <span id="emailError" class="error-message"></span>
</div>
		<div class="input-group">
    <label>Password</label>
    <div class="password-wrapper">
        <input class="rpass" type="password" name="password_1" id="password">
        <span class="toggle-password" onclick="togglePassword('password', this)">👁️</span>
    </div>
</div>

<div class="input-group">
    <label>Confirm Password</label>
    <div class="password-wrapper">
        <input class="rcpass" type="password" name="password_2" id="confirmPassword">
        <span class="toggle-password" onclick="togglePassword('confirmPassword', this)">👁️</span>
    </div>
</div>

		<div class="input-group2">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
    
    <script>
        function togglePassword(fieldId, icon) {
    var passwordInput = document.getElementById(fieldId);
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.textContent = "👁️‍🗨️"; 
    } else {
        passwordInput.type = "password";
        icon.textContent = "👁️";
    }
}
document.getElementById("email").addEventListener("input", function() {
    var emailInput = this.value;
    var emailError = document.getElementById("emailError");
    
    // Regular Expression for email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailPattern.test(emailInput)) {
        emailError.textContent = "Invalid email format";
        emailError.style.color = "red";
    } else {
        emailError.textContent = "";
    }
});
    </script>
   
</body>
</html>