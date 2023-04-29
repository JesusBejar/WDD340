<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors | Template</title>
    <link rel="stylesheet" href="/css/templateBase.css">
</head>
<header id="header">
    <!-- logo img wrapped with home link -->
    <a href="template.php"><img src="/images/site/logo.png" alt="php motors logo"></a>
    <!-- header php -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/header.php'; ?> 
</header>
<nav id="nav">
    <!-- nav php -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/nav.php'; ?> 
</nav>
<body>
    <h1>CONTENT GOES HERE</h1>
</body>
<footer id="footer">
    <!-- footer php -->
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/footer.php'; ?> 
</footer>
</html>