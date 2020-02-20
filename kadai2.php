<?php

/* 1. 
$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください。
*/

$name = "Mayu";
if ($name = "Mayu") {
    echo "私はあなたの名前です。";
} else {
    echo "あなたの名前ではありません。";
}

/* 2.
for文を使って、1から10000までの合計の値を表示してください。 
*/

$total = 0;
for ($i = 0; $i <= 1000; $i++) {
    $total += $i;
}
echo $total;

/* 3. 
$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
*/

$fruits = array("peach", "strawberry", "pear", "fig", "orange");
foreach ($fruits as $fruit) {
    echo "要素は". $fruit;
    echo "\n";
}

/* 4.
【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ
表示するようにしてみてください。
*/

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
    if($i % 5 == 0){
        echo $i;
    }
}