<?php
require_once("functions.php");
$user = "root";
$password = "secret";
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_EMULATE_PREPARES => false,
  PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];
$dbh = new PDO('mysql:host=db;dbname=sample_db;charset=utf8', $user, $password, $opt);
$sql = "INSERT INTO books (id, title, isbn, price, publish, author)
VALUES (NULL, :title, :isbn, :price, :publish, :author)";
$stmt = $dbh->prepare($sql);
var_dump($stmt);
?>
