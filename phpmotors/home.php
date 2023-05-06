<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors | Template</title>
    <!-- <link rel="stylesheet" href="/css/templateBase.css"> -->
    <link rel="stylesheet" href="css/homeBase.css" type="text/css">
    <link rel="stylesheet" href="css/medium.css" type="text/css">
    <link rel="stylesheet" href="css/large.css" type="text/css">
</head>
<header>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/header.php'; ?> 
</header>
<nav>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/nav.php'; ?> 
</nav>
<body>
    <div id="top">
        <h1>Welcome to PHP Motors</h1>
        <img src="images/delorean.jpg" alt="delorean pic">
        <div id="absolute">
            <h2>DMC Delorean</h2>
            <ul>
                <li>3 cup holders</li>
                <li>Superman doors</li>
                <li>Fuzzy dice</li>
            </ul>
            <img src="images/site/own_today.png" alt="own today sign">
        </div>
    </div>
    <div id="bottom">
    <div id="right">
        <h2>DMC Delorean Reviews</h2>
        <ul>
            <li>So fast its almost like traveling in time</li>
            <li>Coolest ride on the road</li>
            <li>I'm feeling Marty McFly</li>
            <li>The most futuristic ride of our day</li>
            <li>80's livin and I love it</li>
        </ul>
    </div>
    <div id="left">
    <h2>Delorean upgrades</h2>
        <picture>
            <img src="images/upgrades/flux-cap.png" alt="flux cap img">
            <p>Flux cap</p>
        </picture>
        <picture>
            <img src="images/upgrades/flame.jpg" alt="flame decals">
            <p>Flame decals</p>
        </picture>
        <picture>
            <img src="images/upgrades/bumper_sticker.jpg" alt="bumper sticker">
            <p>Bumper sticker</p>
        </picture>
        <picture>
            <img src="images/upgrades/hub-cap.jpg" alt="hub caps">
            <p>Hub caps</p>
        </picture>
    </div>
    </div>
</body>
<footer>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/footer.php'; ?> 
</footer>
</html>