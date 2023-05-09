<?php
// proxy connect to phpmotors data base
function phpmotorsConnect() {
    $server = 'localhost';
    $dbname= 'phpmotors';
    $username = 'iClient';
    $password = ')lhxiT40B4l[93P*';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
     // Create the actual connection object and assign it to a variable
     try {
      $link = new PDO($dsn, $username, $password, $options);
      if (is_object($link))
      {echo "It worked";}
       } catch(PDOException $e) {
         echo "It didn't work";
       }
     }
phpmotorsConnect();



      // <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/WDD340/phpmotors/serverError.php'; ?> 
