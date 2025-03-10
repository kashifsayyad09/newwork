<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header1">
		<h2>Welcome To AK Ecommerce Photo Stock</h2>
	</div>
	<div class="content">

	
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p><br>
            <div class="next-page-arrow">
    <a href="home.php">
        <img src="icons8-right-arrow-48.png" alt="Next Page">
    </a>
</div>
		<?php endif ?>
	</div>
	<footer class="footer">
    <p>&copy; 2025 AK Ecommerce Photo Stock. All rights reserved.</p>
    <div class="contact-info">
        <p>Phone: +91 8265061177</p>
        <p>Email: <a href="mailto:kashifsayyad09@gmail.com">kashifsayyad09@gmail.com</a></p>
    </div>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank">
            <img src="facebook.png" alt="Facebook">
        </a>
        <a href="https://www.instagram.com" target="_blank">
            <img src="instagram.png" alt="Instagram">
        </a>
        <a href="https://www.twitter.com" target="_blank">
            <img src="twitter.png" alt="X (Twitter)">
        </a>
    </div>
</footer>
		
</body>
</html>