<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors | Template</title>
    <!-- <link rel="stylesheet" href="/css/templateBase.css"> -->
    <link rel="stylesheet" href="css/homeBase.css" type="text/css">
</head>
<header>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/header.php'; ?> 
</header>
<nav>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/nav.php'; ?> 
</nav>
<body>
    <h1>Welcome to PHP Motors</h1>
    <img src="images/delorean.jpg" alt="delorean pic">
    <h2>DMC Delorean</h2>
    <ul>
        <li>3 cup holders</li>
        <li>Superman doors</li>
        <li>Fuzzy dice</li>
    </ul>
    <img src="images/site/own_today.png" alt="own today sign">
</body>
<footer>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/footer.php'; ?> 
</footer>
</html>