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
</div>

</body>
</html>
