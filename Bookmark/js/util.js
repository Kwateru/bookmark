// ブックマーク削除
function dataTableRow(bookmarkId) {
    let delete_element = document.getElementById(bookmarkId);
    delete_element.remove();
    console.log("削除しました。");
}

// リアルタイム検索
function searchTitle() {
    const searchBoxValue = document.getElementById('searchBox').value;
    if (searchBoxValue.length > 2) {  // 少なくとも3文字以上で検索開始
        const ajax = new XMLHttpRequest();
        ajax.open('GET', 'search.php?query=' + encodeURIComponent(searchBoxValue), true);
        ajax.onload = function() {
            if (ajax.status === 200) {
                document.getElementById('searchResults').innerHTML = ajax.responseText;
            }
        };
        ajax.send();
    } else {
        document.getElementById('searchResults').innerHTML = ''; // クエリが短い場合、結果をクリア
    }
}

// 登録処理
function sendDate(){
    let categoryValue = document.getElementById('categoryBox').value;
    let urlBoxValue = document.getElementById('searchBox').value;
    console.log(categoryValue);
    console.log(urlBoxValue);
}