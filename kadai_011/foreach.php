<!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>

 <body>
     <p>
         <?php
        // 連想配列を作成
$vegetable = array(
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道'
);

// foreach文とecho文を使ってキーと値を出力
foreach ($vegetable as $key => $value) {
    echo $key . "：" . $value . "<br>"; // コロン（：）で区切り、改行する
}
         ?>
     </p>
 </body>

 </html>