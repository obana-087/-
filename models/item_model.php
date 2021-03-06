<?php 

//データの取得
function dbConnect(){
    //db接続
    $dsh = 'mysql:host=localhost;dbname=app;charset=utf8';
    $user = 'app_user';
    $pass = '11111111';
    try {
        $dbh = new PDO($dsh,$user,$pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
    } catch(PDOException $e){
        echo '接続失敗', $e->getMessage();  
        exit();      
    };
    return $dbh;
}

//商品の取得
function getAllItem(){
    $dbh = dbConnect();
    //sqlの取得
    $sql = 'SELECT * FROM t_item';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    // var_dump($result);
    return $result;
    $dbh = null;
    
}

//店の取得
function setStore($store_id){
    if($store_id == 1){
        return 'メキシコ料理屋Ｋｅｔｓｕ';
    }elseif($store_id == 2){
        return 'あバラーそばＭＫ';
    }elseif($store_id == 3 ){
        return 'dining yuji';
    }else{
        return 'ソノホカ';
    }
}


?>