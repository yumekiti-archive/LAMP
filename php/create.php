<a href="/">back</a>
<?php

/**
 * PDOでMySQLに接続するためのパラメータ
 */
$dsn = 'mysql:host=db; dbname=test_db;';
$user = 'test_user';
$password = 'test_ps';

/**
 * MySQLに接続
 */
try{
    $dbh = new PDO($dsn, $user, $password);
    print('接続に成功しました。<br>');
}catch (PDOException $e){
    print('接続に失敗。<br>Error:'.$e->getMessage());
    die();
}

try{

    /**
     * テーブルの作成
     */
    $stmt = $dbh->query("CREATE TABLE meibo (id INT,name TEXT)");
    /* 結果の取得*/
    $results = $stmt->fetchall();

    /**
     * データの挿入
     */
    $stmt = $dbh->query("INSERT INTO meibo VALUES(1,'名無し1')");
    $results = $stmt->fetchall();
    /* データの取得
     * PDO::FETCH_ASSOC 連想配列で返すフラグみたいなもの
     */
    $stmt = $dbh->query("SELECT * FROM meibo");
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
    echo '<br />データ挿入しました。<br />';
    var_dump($results);

}catch(Throwable $t){
    echo $t;
    echo '<br>すでにテーブルが存在するか、構文エラーです。';
}