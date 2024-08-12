<?php
$title = "カテゴリの追加ページ";
?>

<!DOCTYPE html>
<html lang="ja">

<!-- head要素 -->
<?php include('layout/head.php'); ?>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのブックマーク</h1>

        <form action="function/category_save.php" method="post">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">カテゴリの新規追加</legend>

                <div class="uk-margin">
                    <input type="text" class="uk-input" name="name" placeholder="カテゴリの名称*" required>
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