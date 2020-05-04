<?php
date_default_timezone_set('Asia/Tokyo');

/* 課題１
 * 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください。 */
function twice($num) {
	return $num * 2;
}

echo twice(100),PHP_EOL;


/* 課題２
 * $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を
 * 作成してください。 */
function sum($a, $b) {
	return $a + $b;
}

echo sum(20, 30),PHP_EOL;


/* 課題３
 * $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
 * その要素をすべてかけた結果を返す関数を作成してください。 */
function multiply($arr) {
	$result = 1;
	foreach($arr as $a) {
		$result *= $a;
	}
	return $result;
}

echo multiply([1, 3, 5, 7, 9]),PHP_EOL;


/* 課題４
 * 配列の中で一番大きい値を返す max_array という関数を実装しようとしています。
 * 途中の部分を完成させてください。 */
function max_array($arr){
	$max_number = $arr[0];
	foreach($arr as $a) {
		if ($max_number < $a) {
			$max_number = $a;
		}
	}
	return $max_number;
}

echo max_array([4, 8, 2, 9, 12, 50, 1]),PHP_EOL;


/* 課題５
 * 次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。 */

/* strip_tags
 * 文字列から HTML および PHP タグを取り除く */
$text = '<p>Practice PHP</p>';
echo strip_tags($text),PHP_EOL;

/* array_push
 * 一つ以上の要素を配列の最後に追加する */
$animal = ["dog", "cat", "fox"];
array_push($animal, "lion", "tiger");
print_r($animal);
PHP_EOL;

/* array_merge
 * ひとつまたは複数の配列をマージする */
$color = ["black", "white", "red"];
$size = ["small", "medium", "large"];
$view = array_merge($color, $size);
print_r($view);
PHP_EOL;

/* time:現在の Unix タイムスタンプを返す
 * mktime:日付を Unix のタイムスタンプとして取得する */
echo "現在のUnixタイムスタンプ：".time(),PHP_EOL;

$timestamp = mktime(5,30,30,5,4,2020);
echo $timestamp,PHP_EOL;

/* data
 * ローカルの日付/時刻を書式化する */
echo date('Y/m/d'),PHP_EOL;