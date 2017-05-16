<?php
/**
 * Created by @author Zbyněk Mlčák
 * Date: 16.05.2017
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Test MVC</title>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" href="/infs/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<header>
    <a href='/infs/'>Home</a> |
    <a href='/infs/?controller=posts&action=index'>Posts</a>
</header>

<?php require_once('routes.php'); ?>

<footer>
    Copyright Zbyněk Mlčák
</footer>
</body>
</html>