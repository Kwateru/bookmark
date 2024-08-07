function deleteTableRow(row){
    //要素を取得
    const delete_element = document.getElementById(row);
    //要素を削除
    delete_element.remove();
    //デバッグ用
    //console.log("削除しました");
}



function sendData() {
    // input要素を取得
    const inputElement = document.getElementById('url_box');

    // input要素の値を取得
    const inputValue = inputElement.value;

    // XMLHttpRequestオブジェクトを作成
    const ajax = new XMLHttpRequest();

    // POSTリクエストを設定
    ajax.open('POST', 'test.php', true);

    // リクエストが完了したときの処理
    ajax.onload = function() {
        if (ajax.status >= 200 && ajax.status < 300) {
            // 成功時の処理
            alert(ajax.responseText);
        } else {
            // エラー時の処理
            alert(ajax.status);
         }
    };

    //リクエストヘッダーにContent-Typeを設定
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // リクエストを送信
    ajax.send('value=' + inputValue);

    //URLエンコードするとき
    //encodeURIComponent(inputValue)

    //複数送信時
    //ajax.send('value1=' + inputValue1 +'&value2=' + inputValue2);
}
