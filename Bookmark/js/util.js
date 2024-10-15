// ブックマーク削除
function dataTableRow(bookmarkId) {
    const ajax = new XMLHttpRequest();
    ajax.open('POST', 'function/bookmark_delete.php', true);
    ajax.onload = function (){
        if (ajax.status >= 200 && ajax.status < 300){
            // 成功した時にエレメントを削除
            let delete_element = document.getElementById(bookmarkId);
            delete_element.remove();
            console.log("削除しました。");
        }else{
            alert('失敗しました。エラーコード：' + ajax.status);
        }
    };
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('id=' + encodeURIComponent(bookmarkId))
}

// リアルタイム検索
function searchTitle() {
    const searchBoxValue = document.getElementById('searchBox').value;
    if (searchBoxValue.length > 2) {  // 少なくとも3文字以上で検索開始
        const ajax = new XMLHttpRequest();
        ajax.open('GET', 'search.php?query=' + encodeURIComponent(searchBoxValue), true);
        ajax.onload = function () {
            if (ajax.status >= 200 && ajax.status < 300) {
                document.getElementById('searchResults').innerHTML = ajax.responseText;
            }
        };
        ajax.send();
    } else {
        document.getElementById('searchResults').innerHTML = ''; // クエリが短い場合、結果をクリア
    }
}

// 登録処理
function sendDate() {
    // 入力欄を取得
    let categoryValue = document.getElementById('categoryBox').value;
    let urlBoxValue = document.getElementById('searchBox').value;

    // 入力欄のバリデーション
    if (categoryValue === '' || urlBoxValue === '') {
        alert('カテゴリとURLは必須になります。\n再度やり直して下さい。');
        return;
    }

    const ajax = new XMLHttpRequest();
    ajax.open('POST', 'function/bookmark_save.php', true);
    ajax.onload = function () {
        if (ajax.status >= 200 && ajax.status < 300) {
            document.body.innerHTML = ajax.responseText;
            // inputをリセット
            document.getElementById('categoryBox').value = '';
            document.getElementById('searchBox').value = '';
        } else {
            alert('失敗しました。エラーコード：' + ajax.status);
        }
    };
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('category_id=' + encodeURIComponent(categoryValue) + '&url=' + encodeURIComponent(urlBoxValue));
}