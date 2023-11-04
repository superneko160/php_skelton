<?php
class CodeInfo {
    private const DSN = "mysql:dbname=app;host=mysql;charset=utf8";
    private const DB_USER = "root";
    private const DB_PASSWORD = "password";

    /**
     * DB設定情報の取得
     * @return array DSN情報、DBユーザ名、DBパスワード
     */
    public static function getDBCodes() : array {
        return [
            "DSN" => self::DSN,
            "DB_USER" => self::DB_USER,
            "DB_PASSWORD" => self::DB_PASSWORD
        ];
    }
}