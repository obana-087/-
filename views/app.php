<?php 
require('../models/item_model.php');

$item_date = getAllItem();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>食べログ</title>
</head>
<body>
    <div class="main">
        <h1>食べログ</h1>
        <div class="menu">
            <table>
            <tr>
                <th>No</th>
                <th>店名</th>
                <th>ﾀｲﾄﾙ</th>
                <th>コメント</th>
            </tr>
            <?php foreach($item_date as $column): ?>
                <tr>
                    <td><?php echo $column['id'] ?></td>
                    <td><?php echo setStore($column['store_id'])?></td>
                    <td><?php echo $column['item_title'] ?></td>
                    <td><?php echo $column['comment'] ?></td>
                    <td><a href="../views/item_detail.php?id=<?php echo $column['id'] ?>">詳細</a></td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>