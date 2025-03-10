<!DOCTYPE html>
<html lang="en" ng-app="photoStockApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK Ecommerce Photo Stock</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body ng-controller="HomeController">

    <?php include 'navbar.php'; ?>

    <div class="hero">
        Welcome to AK Ecommerce Photo Stock
    </div>

    <nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    <div class="search-box">
        <input type="text" placeholder="Search..." id="searchInput">
        <button onclick="searchFunction()">🔍</button>
    </div>
</nav>

<script>
    function searchFunction() {
        var searchQuery = document.getElementById("searchInput").value;
        if (searchQuery) {
            alert("Searching for: " + searchQuery);
            // Redirect to a search results page if implemented
            // window.location.href = "search.php?q=" + encodeURIComponent(searchQuery);
        }
    }
</script>

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

    <script>
        var app = angular.module('photoStockApp', []);
        app.controller('HomeController', function ($scope) {
            $scope.message = "Welcome to AK Ecommerce Photo Stock!";
        });
    </script>

</body>
</html>
