<?php
// DB接続情報
$dsn = 'mysql:host=localhost;dbname=mydb;charset=utf8mb4';
$username = 'root';
$password = 'root';

$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$pro1 = htmlspecialchars($_POST['pro1'],ENT_QUOTES);
$pro2 = htmlspecialchars($_POST['pro2'],ENT_QUOTES);
$pro3 = htmlspecialchars($_POST['pro3'],ENT_QUOTES);
$pro4 = htmlspecialchars($_POST['pro4'],ENT_QUOTES);

// try-catch
try{
	// データベースへの接続を表すPDOインスタンスを生成
	$dbh = new PDO($dsn,$username,$password);

	// 静的プレースホルダを指定
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	// DBエラー発生時は例外を投げる設定
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// SQL文 :nameと:romajiは、名前付きプレースホルダ
	$stmt = $dbh->prepare("INSERT INTO Recipe(name,process1,process2,process3,process4) VALUES (:name,:pro1,:pro2,:pro3,:pro4)");

	//トランザクション処理
	$dbh->beginTransaction();

	try{
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':pro1', $pro1);
    $stmt->bindParam(':pro2', $pro2);
    $stmt->bindParam(':pro3', $pro3);
    $stmt->bindParam(':pro4', $pro4);
		$stmt->execute();

		//コミット
		$dbh->commit();

	}catch (PDOException $e) {
		//ロールバック
		$dbh->rollback();
		throw $e; //
	}
	// 接続を閉じる
	$dbh = null;
  /*データベースへの登録完了*/
}catch (PDOException $e) {
	// UTF8に文字エンコーディングを変換します
	echo mb_convert_encoding($e->getMessage(),'UTF-8','SJIS-win');
	die();
}
/*登録が完了した場合*/
$a = "登録完了です。";
print ($a);
print '<a href="index.html">topへ戻る</a>';
?>
