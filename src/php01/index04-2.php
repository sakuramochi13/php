<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $b = 10;
        $c = $d =5;

        echo ++$a;
        echo '<br/>';
        echo $b++;
        echo '<br/>';
        echo --$c;
        echo '<br/>';
        echo $d--;
        //よくわからない。でも$a++の方しか使わないらしい。
    ?>
</body>
</html>