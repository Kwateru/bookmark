function dataTableRow(bookmarkId) {
    let delete_element = document.getElementById(bookmarkId);
    delete_element.remove();
    console.log("削除しました。");
}