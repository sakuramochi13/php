<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if文</title>
</head>
<body>
    <?php
        $bool = TRUE;
        if ($bool) {
            $x = 5 + 3;
            echo $x;
            echo '<br/>';
        }
        //TRUEの時に命令が実行されて、if文という文字が出力される。
        //FALSEの時は、命令は無視されるので何も表示されない。
        //TRUEかFALSEの値にあだ名をつけて、()の中に変数を使ってもいい。
        echo 'if文の下だよ';
        echo '<br/>';
        var_dump(1 != 2);
        echo '<br/>';
        var_dump(1 != 1);
        echo '<br/>';
        $x = 1;
        $y = 2;
        var_dump($x < $y);
        echo '<br/>';
        var_dump($x > $y);
        //比較には、データ型まで一緒の時TRUEになる===を使う。
    ?>
</body>
</html>