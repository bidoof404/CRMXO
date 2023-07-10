<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
?>

<!DOCTYPE html>
<html>
<title>CRMXO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css" href="/images/favicon.ico">
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<body>

<!-- Navigation Bar -->

<ul>
    <li><a href="profile.php" class="nav-bar-item">Profile</a></li>
    <li style="background-color: green; color: black;"><a href="index.php" class="nav-bar-item">Home</a></li>
    <li><a href="news.php" class="nav-bar-item">News</a></li>
    <li style="float:right"><a href="login.php" class="nav-bar-item">Login</a></li>
    <li style="float:right"><a href="signup.php" class="nav-bar-item">Sign Up</a></li>
</ul>

<div class="content">

		</div>

</body>
</html>
