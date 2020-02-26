<?php

/* 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を
作成してください。 */

function double($x){
     $x *=2;
    return $x;
}

echo double(4);
echo "\n";

/* 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を
作成してください。*/

function f($a, $b){
    $result= $a + $b;
    return $result;
}

echo f(1 , 2);
echo "\n";

/* 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください。*/

function kaketekureru($arr){
  $result = 1;
  foreach($arr as $a){
    $result = $result * $a;
  }
  return $result;
}

echo kaketekureru(array(1,3,5,7,9));
echo "\n";

/* 4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という
関数を実装しようとしています。途中の部分を完成させてください。*/

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];

//もし、$max_numberよりも$aが大きかったら、$max_numberに$aを代入します。
foreach($arr as $a){
   if( $max_number < $a){
       $max_number = $a;
   }
}
return $max_number;
}
echo max_array(array(3,5,1,7,9,109,350,2,46,199,98));
echo "\n";

/* 5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。*/

//strip_tags 文字列からHTML及びPHPタグを取り除く

$str = "<p>あいうえおかきくけこ</p>";
echo strip_tags($str);
echo "\n";


//array_push　1つ以上の要素を配列の最後に追加する。

$animals = ["こぶた", "たぬき", "きつね"];
array_push($animals,"ねこ");
print_r($animals);

//array_merge 配列の要素の最後にひとつまたは複数の配列を結合する

$array1 = [1,2,3];
$array2 = [4,5,6];
$array3 = [7,8,9];
$array = array_merge($array1,$array2,$array3);
print_r($array);

// time UNIXタイムスタンプを取得できる関数

$a = time();
echo date("Y/m/d", $a);
echo "\n";

//mktime 日時の値からタイムスタンプを取得する

//2020年3月1日
$timestamp = mktime(0,0,0,3,1,2020);
echo $timestamp;
echo "\n";

//date 現在の日時を取得する

date_default_timezone_set("Asia/Tokyo");
echo date("Y/m/d H:i:s");

