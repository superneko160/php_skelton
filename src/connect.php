<?php
// DB接続確認用ファイル
// http://localhost:8080/connect.php
require_once "CodeInfo.php";

try {
    $db_codes = CodeInfo::getDBCodes();
    $db = new PDO (
      $db_codes["DSN"],
      $db_codes["DB_USER"],
      $db_codes["DB_PASSWORD"]
    );
    print 'DB connect OK';
}
catch (PDOException $e) {
    die($e->getMessage());
}
finally {
    $db = null;
}