<?php

// create navList populated with genres
function showNavList($genres) {
  $navList = '<ul>';
  $navList .= "<li><a href='/phpbooks/' title='Home page'>Home</a></li>";
  foreach ($genres as $genre) {
    $navList .= "<li><a href='/phpbooks/?action=" . urldecode($genre['genreName']) . "' title='$genre[genreName] view'>$genre[genreName]</a></li>";
  }
  $navList .= '<ul>';
  return $navList;
}
