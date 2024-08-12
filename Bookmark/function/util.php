<?php
// 外部サイトURLからページタイトルを取得
function get_title_from_URL($url){
    $urls = file_get_contents($url);
    //タイトル取得
    $pattern  = '/<title>([\s\S]*?)<\/title>/i';
    preg_match($pattern, $urls, $match);
    $title = trim($match[1]);

    return $title;
}

// ブックマークのタイトルを短縮
function bookmark_title_short($title, $titleLength){
    if (mb_strlen($title) > $titleLength) {
        return mb_substr($title, 0, $titleLength) . '...';
    }elseif (mb_strlen($title) <= $titleLength) {
        return $title;
    }
}
?>