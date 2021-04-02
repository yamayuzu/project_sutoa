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
    $d = $_POST["search"];
    $aa = $dbh->query("SELECT * FROM sutoa WHERE message LIKE '$d'");
    while($kekka = $aa->fetch()) {
        print "<div class='box'>";
        print "No.";
        print $kekka[0];
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