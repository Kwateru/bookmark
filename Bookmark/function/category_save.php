<?php
// DB接続
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])) {
    // POST情報を変数に格納
    $name = $_POST['name'];

    // DBに保存
    try {
        $sql = 'INSERT INTO categorys (name) VALUE (:name)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->execute();
        header('Location:../index.php');
        exit(0);
    } catch (PDOException $e) {
        echo "カテゴリ名の追加失敗：" . $e->getMessage() . "\n";
        exit(1);
    }
}