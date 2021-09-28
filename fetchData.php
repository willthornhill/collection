<?php
function fetchData($db){
    $query = $db->prepare("SELECT `setName`, `setNumber`, `pieceCount`, `releaseYear` FROM `sets`;");
    $query->execute();
    $sets = $query->fetchAll();
    return $sets;
}