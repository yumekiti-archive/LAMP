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

try{

    /**
     * データの削除
     */
    $stmt = $dbh->query("DELETE FROM test_db.meibo WHERE id = 1");
    $results = $stmt->fetchall(PDO::FETCH_ASSOC);
    echo '<br />データ削除しました。<br />';
    var_dump($results);

    /**
     * デーブルの削除
     */
    $stmt = $dbh->query("DROP TABLE test_db.meibo");
    $results = $stmt->fetchall();
    
}catch(Throwable $t){
    echo $t;
    echo '<br>テーブルが存在しないか、構文エラーです。';
}