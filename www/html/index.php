<?php
require_once 'functions.php';
try {
$user = "root";
$password = "secret";
$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_EMULATE_PREPARES => false,
  PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];
$dbh = new PDO('mysql:host=db;dbname=sample_db;charset=utf8', $user, $password, $opt);
$sql = 'SELECT title, author FROM books';
$statement = $dbh->query($sql);

while ($row = $statement->fetch()) {
  echo "書籍名" . str2html($row[0]) . "<br>";
  echo "著者名" . str2html($row[1]) . "<br>";
}
} catch (PDOException $e) {
  echo "エラー!: " . $e->getMEssage() . $e->getLine() . "<br>";
  exit;
}
?>
