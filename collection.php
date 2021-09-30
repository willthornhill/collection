<?php
//--QUERY--
require_once 'dbConnect.php';
$db = dbConnect();

require_once 'fetchData.php';
$sets = fetchData($db);
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
        <?php
            require_once 'dataList.php';
            $list = dataList($sets);
            echo $list;
        ?>
    </div>
    <?php
    require_once 'addForm.php';
    $form = addSet($db);
    ?>
        <form action = "addForm.php" method = post>
            <label for="name">Set Name</label>
            <input type="text" name="name"/>
            <label for="number">Set Number</label>
            <input type="text" name="number"/>
            <label for="pieces">Piece Count</label>
            <input type="text" name="pieces"/>
            <label for="year">Release Year</label>
            <input type="text" name="year"/>
            <input type="submit">
        </form>
</div>

</body>
</html>
