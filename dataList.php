<?php

function dataList(array $sets){
    foreach ($sets as $set) {
        echo "<h2>" . $set['setName'] . "</h2>";
        echo "<h4>Set Number: " . $set['setNumber'] . "</h4>";
        echo "<h4>Piece Count: " . $set['pieceCount'] . "</h4>";
        echo "<h4>Release Year: " . $set['releaseYear'] . "</h4>";
    }
    return $list;
}