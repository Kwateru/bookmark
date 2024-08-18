<?php
$dsn = 'mysql:dbname=academy_db;host=docker_server_test-db-1';
$user = 's4LwPq';
$password = 'zXw8mVbL1';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗：" . $e->getMessage() . "\n";
    exit(1);
}

try {
    $sql = 'SELECT bookmarks.id, categorys.name, bookmarks.title FROM categorys INNER JOIN bookmarks ON categorys.id = bookmarks.category_id';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    $bookmarkLists = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "ブックマーク一覧取得失敗：" . $e->getMessage() . "\n";
    exit(1);
}

