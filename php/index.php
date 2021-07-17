<a href="/create.php">create</a>
<a href="delete.php">delete</a>
<a href="/">reload</a>

<?php

try {
	// DBへ接続
	$dbh = new PDO("mysql:host=db; dbname=test_db;", 'test_user', 'test_ps');
    print('接続に成功しました。<br>');

	$stmt = $dbh->prepare("SELECT * FROM meibo");

	// SQL実行
	$res = $stmt->execute();

	if( $res ) {
		$data = $stmt->fetch();
		var_dump($data);
	}

} catch(PDOException $e) {

	echo $e->getMessage();
	die();
}

// 接続を閉じる
$dbh = null;
?>