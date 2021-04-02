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
    $re = $dbh->query("SELECT * FROM sutoa");
    while($kekka = $re->fetch()) {
        print "<div class='box'>";
        print "No." ;
        print $kekka[0];                               // $re　の中身を表示します。
        print " ";
        print $kekka[1];
        print ":";
        print $kekka[2];
        print "<br>";
        print "</div>";
    }


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>