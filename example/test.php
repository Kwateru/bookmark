<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    //書き込み処理
    //$_POST['value']

    
    //DBへの書き込みに成功したとき
    if ($result) {
    echo "成功しました。";
    }else{
    //DBへの書き込みに失敗したとき
    echo "失敗しました。";
    }
}
?>
