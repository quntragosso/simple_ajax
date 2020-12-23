<?php
// 再度読み込む面倒な部分はあるけど。
// ファイルを開く処理
$file = fopen("data/todo.txt", "r");
// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
$str = [];

// 1行づつ取り出す
if ($file) {
    while ($line = fgets($file)) {
        array_push($str, $line);
    }
};

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイル閉じる
fclose($file);

// 入力画面へ移動せず、phpからexit。
// 読み込んだデータを返却しています。この返却したデータを利用してjs側で表示更新を行います。
echo json_encode($str);
exit();
