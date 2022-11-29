<?php

// main controller

$action = filter_input(INPUT_POST, 'action');
 if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
 }

switch ($action) {
  case 'sample':
    break;
  default:
    include 'view/home.php';
}
