<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>HOME</h1>
<hr>
<?php if(!isset($_SESSION['user'])): ?>
    <a href="login">Login</a>
    <a href="register">Register</a>
<?php else: ?>
    <h2>Connected: <?=$_SESSION['user']['email']?></h2>
    <a href="logout">Logout</a>
<?php endif; ?>
</body>
</html>