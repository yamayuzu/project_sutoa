<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    </style>
</head>
<body>

<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    
    // この下にプログラムを書きましょう。

$a = $_POST["namae"];
$b = $_POST["url"];
$c = (int)$_POST["nedan"];
$d = $_POST["syurui"];
$e = $_POST["syousai"];
$dbh->query("INSERT INTO sutoa (namae,url,nedan,syurui,syousai) VALUES('{$a}','{$b}',$c,'{$d}','{$e}')");
print "出品完了";

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>