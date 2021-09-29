<?php

/**
 * Fetches the content of four fields from the 'sets' table in the 'collection' DB
 *
 * @param $db
 * @return mixed
 */
function fetchData($db): array {
    $query = $db->prepare("SELECT `setName`, `setNumber`, `pieceCount`, `releaseYear` FROM `sets`;");
    $query->execute();
    $sets = $query->fetchAll();
    return $sets;
}