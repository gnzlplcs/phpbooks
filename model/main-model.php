<?php
// main model php books

function getGenres() {
  $db = phpbooksConnect();
  $sql = 'SELECT genreName FROM genres ORDER BY genreName ASC';
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $genres = $stmt->fetchAll();
  $stmt->closeCursor();
  return $genres;
}
