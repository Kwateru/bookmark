<?php
$title = "はじめてのブックマーク";

// DBからブックマークを取得
include('function/bookmark_get.php');

// カテゴリを動的に選択
include('function/category_get.php');
?>

<!DOCTYPE html>
<html lang="ja">

<!-- head要素 -->
<?php include('layout/head.php'); ?>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのブックマーク</h1>

        <!-- カテゴリ -->
        <div class="uk-container uk-flex">
            <div class="uk-flex-auto"></div>
            <a class="uk-button uk-button-default uk-margin-small-right" href="category_insert.php"><i class="fa-solid fa-plus fa-xl" style="color: #17a67b;"></i> カテゴリ追加</a>
            <a class="uk-button uk-button-default" href="bookmark_insert.php"><i class="fa-solid fa-plus fa-xl" style="color: #17a67b;"></i> ブックマーク追加</a>
        </div>

        <div class="uk-margin">
            <select name="category_id" class="uk-select" id="categoryBox" required>
                <option value="">カテゴリを選択して下さい。</option>
                <?php
                foreach ($categoryList as $category) {
                    echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                }
                ?>
            </select>
        </div>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="URL" id="searchBox" name="url" onkeyup="searchTitle()">
            <div id="searchResults"></div>
        </div>

        <button class="uk-button uk-button-primary" type="button" onclick="sendDate()">
            登録
        </button>

        <!-- 取得したデータをテーブルに展開 -->
        <table class="uk-table uk-table-justify uk-table-divider">
            <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>タイトル</th>
                    <th class="uk-width-small"></th>
                    <th class="uk-width-small"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bookmarkLists as $bookmarkList) {
                    echo <<<EOM
                    <tr id="{$bookmarkList['id']}">
                        <td>{$bookmarkList['name']}</td>
                        <td>{$bookmarkList['title']}</td>
                        <td>
                            <a class="uk-button uk-button-default" href="{$bookmarkList['url']}" target="_blank" rel="noopener noreferrer">
                                <i class="fa-solid fa-display" style="color: #74C0FC;"></i> 表示
                            </a>
                        </td>
                        <td>
                            <a class="uk-button uk-button-default" href="#" onclick='dataTableRow({$bookmarkList['id']})'>
                                <i class="fa-solid fa-trash" style="color: #333;"></i> 削除
                            </a>
                        </td>
                    </tr>
                    EOM;
                }

                ?>
            </tbody>
        </table>
    </div>
    <script src="js/util.js"></script>
</body>

</html>