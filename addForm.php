<?php
require_once 'dbConnect.php';
$db = dbConnect();
addSet($db);

function addSet($db){

    if(isset($query)) {
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
?>
<!--<html>-->
<!--    <form action = "addForm.php" method = post>-->
<!--        <label for="name">Set Name</label>-->
<!--        <input type="text" id="name"/>-->
<!--        <label for="number">Set Number</label>-->
<!--        <input type="text" id="number"/>-->
<!--        <label for="pieces">Piece Count</label>-->
<!--        <input type="text" id="pieces"/>-->
<!--        <label for="year">Release Year</label>-->
<!--        <input type="text" id="year"/>-->
<!--        <input type="submit">-->
<!--    </form>-->
<!--</html>-->
