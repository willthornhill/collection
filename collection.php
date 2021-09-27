<?php
//--QUERY--
$db = new PDO('mysql:host=db; dbname=collection', 'root', 'password');
$query = $db->prepare("SELECT `setName`, `setNumber`, `pieceCount`, `releaseYear` FROM `sets`;");
$query->execute();
$sets = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lego Collection</title>
</head>
<body>
<header>
    <h1>My collection</h1>
</header>

<div class="main">
    <div class="item">
<!--        <h3>Name Placeholder</h3>-->
<!--        <img src="placeholder" alt="placeholder image"/>-->
<!--        <p>Set Number:</p>-->
<!--        <p>Piece Count:</p>-->
<!--        <p>Release Year:</p>-->
        <?php
            foreach ($sets AS $set){
                echo "<h2>" .$set['setName']. "</h2>";
                echo "<h4>Set Number: " .$set['setNumber']. "</h4>";
                echo "<h4>Piece Count: " .$set['pieceCount']. "</h4>";
                echo "<h4>Release Year: " .$set['releaseYear']. "</h4>";


            }
        ?>
    </div>
</div>

</body>
</html>
