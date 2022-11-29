<?php

// access to database

function phpbooksConnect() {
  $server = 'localhost';
  $dbname = 'phpbooksf';
  $username = 'iUser';
  $password = '[]tTpgjEud/gAkx)';
  $dsn = "mysql:host=$server;dbname=$dbname";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

  try {
    $link = new PDO($dsn, $username, $password, $options);
    return  $link;
  } catch (PDOException $e) {
    header('Location: /phpbooks/view/500.php');
    exit;
  }
}

// just for test
// phpbooksConnect();
