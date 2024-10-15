<?php
// 外部サイトURLからページタイトルを取得
function get_title_from_URL($url)
{
    // 先頭がhttpかチェック
    if (strpos($url, 'http') !== 0) {
        header('Location:../index.php');
        exit;
    }

    // User-Agentを設定してリクエスト
    $context = stream_context_create([
        'http' => [
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.6668.101 Safari/537.36\r\n"
        ]
    ]);
    $urls = file_get_contents($url, false, $context);

    //タイトル取得
    $pattern  = '/<title>([\s\S]*?)<\/title>/i';
    preg_match($pattern, $urls, $match);
    $title = trim($match[1]);

    return $title;
}

// ブックマークのタイトルを短縮
function bookmark_title_short($title, $titleLength)
{
    if (mb_strlen($title) > $titleLength) {
        return mb_substr($title, 0, $titleLength) . '...';
    } elseif (mb_strlen($title) <= $titleLength) {
        return $title;
    }
}
