<?php
//表示するだけの処理
// 変数の初期化
$sql = null;
$res = null;
$dbh = null;

try {
	// DBへ接続
	$dbh = new PDO("mysql:host=127.0.0.1; dbname=mydb; charset=utf8", 'root', 'root');

	// SQL作成
	$sql = "SELECT * FROM Recipe";

	// SQL実行
	$res = $dbh->query($sql);

	// 取得したデータを出力
	foreach( $res as $value ) {
		echo "$value[id]:$value[name]$value[process1]:$value[process2]$value[process3]:$value[process4]<br>";
	}

} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;
?>

<p>どのレシピを削除しますか？(名前)</p>
<input type="text" name="name">
<input type="submit" value="送信" action="RecipeDelete.php">
