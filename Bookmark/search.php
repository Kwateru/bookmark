<?php
// DB接続
include('./db/connection.php');

// ユーザーの検索クエリを取得
$query = isset($_GET['query']) ? $_GET['query'] : "";

try {
    $sql = 'SELECT bookmarks.title FROM bookmarks WHERE bookmarks.title LIKE :query';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':query', '%' . $query . '%');
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $result) {
        echo $result['title'];
    }
    exit;
} catch (PDOException $e) {
    echo "クエリ取得失敗：" . $e->getMessage() . "\n";
    exit(1);
}