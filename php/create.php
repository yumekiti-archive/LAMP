<a href="/">back</a>
<?php

/**
 * PDOでMySQLに接続するためのパラメータ
 */
$dsn = 'mysql:host=db';
$user = 'root';
$password = 'root';

/**
 * MySQLに接続
 */
try{
    $dbh = new PDO($dsn, $user, $password);
    print('接続に成功しました。<br>');
}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}

/**
 * テーブルの作成
 */
$stmt = $dbh->query("CREATE TABLE test_db.meibo (id INT,name TEXT)");
/* 結果の取得*/
$results = $stmt->fetchall();

/**
 * データの挿入
 */
$stmt = $dbh->query("INSERT INTO test_db.meibo VALUES(1,'名無し1')");
$results = $stmt->fetchall();
/* データの取得
 * PDO::FETCH_ASSOC 連想配列で返すフラグみたいなもの
 */
$stmt = $dbh->query("SELECT * FROM test_db.meibo");
$results = $stmt->fetchall(PDO::FETCH_ASSOC);
echo '<br />データ挿入後<br />';
var_dump($results);