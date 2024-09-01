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
        fetch('search.php?query=' + encodeURIComponent(searchBoxValue))
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                document.getElementById('searchResults').innerHTML = data;
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
    } else {
        document.getElementById('searchResults').innerHTML = ''; // クエリが短い場合、結果をクリア
    }
}
