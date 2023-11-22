<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>

<?php
require_once "post.php";
?>

<h2>Bonjour <?= $_POST["username"]; ?> </h2>

<form action="" method="post">
    <input type="text" placeholder="Username" name="username">
    <input type="text" placeholder="Password" name="password">
    <button type="submit">OK</button>
</form>

<h2> <?= $content; ?> </h2>




</body>
</html>
