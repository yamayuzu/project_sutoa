<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        .box {        
            color:#0C1B33;
            margin: 3px;
            padding: 8px;
            border: 2px #0C1B33;
            border-style: none;
            border-bottom-style: dotted;
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
    $d = $_POST["search"];
    $aa = $dbh->query("SELECT * FROM sutoa WHERE namae LIKE '$d'");
    while($kekka = $aa->fetch()) {
        print "<div class='box'>";
        print $kekka[0];
        print "<br>";
        print $kekka[1];
        print "<br>";
        print "￥";
        print $kekka[2];
        print ",,,,,,";
        print $kekka[3];
        print ",,,,,,";
        print $kekka[4];
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>