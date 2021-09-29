<?php

/**
 * Connects to the 'collection' database
 *
 * @return PDO
 */
function dbConnect(): PDO {
    $db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}