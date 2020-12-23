<?php
// var_dump($_POST);
// exit();

// データの受取
$todo = $_POST["todo"];

// とりあえず書き込む
// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
$write_content = "{$todo}\n";

// ファイルを開く処理
$file = fopen("data/todo.txt", "a");

// ファイルロックの処理
flock($file, LOCK_EX);

// ファイル書き込み処理
fwrite($file, $write_content);

// ファイルアンロックの処理
flock($file, LOCK_UN);

// ファイルを閉じる処理
fclose($file);

// ここまで書き込む処理

exit();
