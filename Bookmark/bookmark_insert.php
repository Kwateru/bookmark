<?php
$title = "ブックマークの追加ページ";

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

        <form action="function/bookmark_save.php" method="post">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">ブックマークの新規追加</legend>

                <div class="uk-margin">
                    <input type="hidden" name="title">
                </div>

                <div class="uk-margin">
                    <select name="category_id" class="uk-select" required>
                        <option value="">カテゴリを選択して下さい。</option>
                        <?php
                        foreach ($categoryList as $category) {
                            echo '<option value="' . $category['id'] . '">' . $category['name'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="uk-margin">
                    <input type="text" name="url" placeholder="URLを入力" class="uk-input" required>
                </div>

                <div class="uk-margin">
                    <input type="submit" value="追加">
                </div>
            </fieldset>
        </form>
        <a class="uk-button uk-button-default" href="index.php">ブックマーク一覧へ</a>
    </div>
</body>

</html>