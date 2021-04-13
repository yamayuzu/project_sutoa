<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body {
                background-color:#F7FFF6;
            }
    </style>
</head>
<body>

<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
<a href="http://127.0.0.1:8080/project_sutoa">ホームへ</a>
</body>
</html>