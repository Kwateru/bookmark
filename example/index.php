<html>
    <head>
        <!-- CSSフレームワーク（https://getuikit.com/docs/introduction） -->
        <link rel="stylesheet" href="uikit.css">
        <!-- JavaScript -->
        <script src="sample.js"></script>
        <title>Sample Page</title>
    </head>
    <body>
    <div class="uk-container uk-container-small">

<!-- URL入力欄と登録ボタン -->
    <div class="uk-margin">
        <input class="uk-input" type="text" placeholder="URL" aria-label="Input" id="url_box">
    </div>

    <button class="uk-button uk-button-primary" type="button" onclick="sendData()">登録</button>


<!-- テーブル -->
        <table class="uk-table uk-table-justify uk-table-divider">
            <thead>
                <tr>
                    <th>カテゴリ</th>
                    <th>タイトル</th>
                    <th class="uk-width-small"></th>
                </tr>
            </thead>
            <tbody>
                <tr id="row1">
                    <td>PC</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル1</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row1")'>削除</a></td>
                </tr>
                <tr id="row2">
                    <td>PC</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル2</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row2")'>削除</a></td>
                </tr>
                <tr id="row3">
                    <td>PC</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル3</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row3")'>削除</a></td>
                </tr>
                <tr id="row4">
                    <td>スマホ</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル4</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row4")'>削除</a></td>
                </tr>
                <tr id="row5">
                    <td>スマホ</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル5</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row5")'>削除</a></td>
                </tr>
                <tr id="row6">
                    <td>スマホ</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル6</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row6")'>削除</a></td>
                </tr>
                <tr id="row7">
                    <td>スマホ</td>
                    <td>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル7</td>
                    <td><a class="uk-button uk-button-default" href="#" onclick='deleteTableRow("row7")'>削除</a></td>
                </tr>
            </tbody>
        </table>
        
    </div>
    </body>
</html>
