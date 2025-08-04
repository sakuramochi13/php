<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NULL型とキャスト型</title>
</head>
<body>
    <?php
        $土曜日シフト入ってるかどうか = TRUE;
        $土曜日シフト入ってるかどうか = FALSE;
        $土曜日シフト入ってるかどうか = NULL;
        //　現実でする型変換に　ドル　＝　円　がある。
        var_dump(1);
        echo '<br/>';
        var_dump('1');
        echo '<br/>';
        //キャスト演算
        $x = (string) 10;
        var_dump($x);
    ?>
</body>
</html>