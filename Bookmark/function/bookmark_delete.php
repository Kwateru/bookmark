<?php

// DB接続
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['id'])) {
    // POST情報を変数に格納
    $bookmarksId = $_POST['id'];

    // DBに保存
    try {
        // UPDATE文の実行
        $sql = 'UPDATE bookmarks SET finish_flag = 1 WHERE id = :bookmarksId';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':bookmarksId', $bookmarksId);
        $stmt->execute();

        // DELETE文の実行
        $sql = 'DELETE FROM bookmarks WHERE id = :bookmarksId AND finish_flag = 1';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':bookmarksId', $bookmarksId);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "ブックマーク物理削除に失敗：" . $e->getMessage() . "\n";
        exit(1);
    }
}
