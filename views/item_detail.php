<?php 

require_once('../models/item_model.php');
// require_once('../controllers/item_controller.php.');

$result = Item\Dbc\getItem( $_GET['id']);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="item_detail_main">
        <h2>商品詳細</h2>
        <h3>商品名:<?php echo $result['item_title'] ?></h3>
        <p>投稿日時:<?php echo $result['post_at'] ?></p>
        <p>店名:<?php echo Item\Dbc\setStore($result['store_id'])?></p>
        <br>
        <p>説明文:<?php echo $result['description'] ?></p>
    </div>
</body>
</html>

