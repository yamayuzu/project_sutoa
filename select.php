<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body {
                background-color:#F7FFF6;
            }
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
<h1>オンラインストア</h1>
<?php 
/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    // この下にプログラムを書きましょう。
    $re = $dbh->query("SELECT * FROM sutoa");
    while($kekka = $re->fetch()) {
        print "<div class='box'>";
                          // $re　の中身を表示します。
        print '<a href="'.$kekka[1].'">'.$kekka[0].'</a>';
        //print "$kekka[1]";
        //print '<a href="http://google.co.jp">'.$rec['id'].'</a>';
        print "￥";
        print $kekka[2];
        print "<br>";
        print $kekka[4];
        print '<span style="color:#fc2d12;">';
        print $kekka[3];
        print "</span>";

        print "</div>";
    }


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

</body>
</html>