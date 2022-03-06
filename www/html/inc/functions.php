<?php
function str2html(string $string) :string {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
  }

function db_open() :PDO {
    $user = "root";
    $password = "secret";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=db;dbname=sample_db;charset=utf8', $user, $password, $opt);
    return $dbh;
  }
?>
