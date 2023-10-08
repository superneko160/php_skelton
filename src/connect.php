<?php
// DB接続確認用ファイル
// http://localhost:8080/connect.php
try {
  $db = new PDO (
    'mysql:dbname=app;host=mysql;charset=utf8',
    'root',
    'password'
  );
  print 'DB connect OK';
}
catch (PDOException $e) {
    die($e->getMessage());
}
finally {
    $db = null;
}