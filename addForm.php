<?php
require_once 'dbConnect.php';
$db = dbConnect();
addSet($db);

function addSet($db){

    if(isset($_POST["name"], $_POST["number"], $_POST["pieces"], $_POST["year"])) {
        $sql = "INSERT INTO sets (`setName`, `setNumber`, `pieceCount`, `releaseYear` )
        VALUES (:newName, :newNumber, :newPieces, :newYear)";
        $query = $db->prepare($sql);
        // binding params
        $newName = $_POST["name"];
        $newNumber = $_POST["number"];
        $newPieces = $_POST["pieces"];
        $newYear = $_POST["year"];

        $query->bindParam(':newName', $newName);
        $query->bindParam(':newNumber', $newNumber);
        $query->bindParam(':newPieces', $newPieces);
        $query->bindParam(':newYear', $newYear);

        $query->execute();

    }
}