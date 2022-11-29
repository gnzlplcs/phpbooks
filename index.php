<?php

// main controller

//imports
require_once 'library/connections.php';
require_once 'library/functions.php';
require_once 'model/main-model.php';

// get genres from db
$genres = getGenres();
$navList = showNavList($genres);

switch ($action) {
  case 'sample':
    break;
  default:
    include 'view/home.php';
}
