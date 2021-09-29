<?php

/**
 * Formats and lists the contents of each field
 *
 * @param array $sets
 * @return mixed
 */

function dataList(array $sets){
    // create list as empty string
    $list = '';
    foreach ($sets as $set)
    {
        $list .= "<h2>" . $set['setName'] . "</h2>";
        $list .= "<h4>Set Number: " . $set['setNumber'] . "</h4>";
        $list .= "<h4>Piece Count: " . $set['pieceCount'] . "</h4>";
        $list .= "<h4>Release Year: " . $set['releaseYear'] . "</h4>";
    }
    return $list;
}