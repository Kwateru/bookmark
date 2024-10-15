<?php
// DB接続
include('db/connection.php');

try {
    $sql = 'SELECT bookmarks.id, categorys.name, bookmarks.title, bookmarks.url FROM categorys INNER JOIN bookmarks ON categorys.id = bookmarks.category_id';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $bookmarkLists = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "ブックマーク一覧取得失敗：" . $e->getMessage() . "\n";
    exit(1);
}

