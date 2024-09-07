<?php
// DB接続
include('db/connection.php');

try {
    $sql = 'SELECT * FROM categorys';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $categoryList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "カテゴリ一覧取得失敗：" . $e->getMessage() . "\n";
    exit(1);
}
