<?php
// DB接続
include('../db/connection.php');

// URLからタイトルを取得/短縮
include('util.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['category_id']) && !empty($_POST['url'])) {
    // POST情報を変数に格納
    $categoryID = $_POST['category_id'];
    $url = $_POST['url'];
    $title = get_title_from_URL($url);
    $titleShort = bookmark_title_short($title, 30);

    // DBに保存
    try {
        $sql = 'INSERT INTO bookmarks (title, url, category_id) VALUES (:title, :url, :category_id)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':title', $titleShort);
        $stmt->bindValue(':url', $url);
        $stmt->bindValue(':category_id', $categoryID);
        $stmt->execute();

        header('Location:../index.php');
        exit(0);
    } catch (PDOException $e) {
        echo "ブックマークの保存失敗：" . $e->getMessage() . "\n";
        exit(1);
    }
}
