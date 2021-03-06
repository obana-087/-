<?php 

require('../models/item_model.php');


$detail_id = $_GET['id'];
echo "hello";

$dbh = dbConnect();

$stmt = $dbh->prepare('SELECT * FROM t_item WHERE id = :id');
$stmt->bindValue(':id', (int)$detail_id, PDO::PARAM_INT);

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>商品詳細</h2>
    <h3>商品名:<?php echo $result['item_title'] ?></h3>
    <p>投稿日時:<?php echo $result['post_at'] ?></p>
    <p>店名:<?php echo $result['store_id'] ?></p>
    <br>
    <p>説明文:<?php echo $result['description'] ?></p>
</body>
</html>

