<?php
// proxy connect to phpmotors data base
$server = 'localhost';
$dbname= 'phpmotors';
$username = 'iClient';
$password = ')lhxiT40B4l[93P*';
$dsn = "mysql:host=$server;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

 // Create the actual connection object and assign it to a variable
 try {
  $link = new PDO($dsn, $username, $password, $options);
  return $link;
 } catch(PDOException $e) {
  header('Location: /phpmotors/view/500.php');
  exit;
 }