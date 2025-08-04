<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>基本のデータ型「スカラ型４つ」</title>
</head>
<body>
    <?php
    $x = 'こんにちは、' . 'チャンネル登録したよ';
    echo $x;
    echo '<br/>';
    $x = '最' . '&' . '高';
    echo $x;
    echo '<br/>';
    $x = 0.1 + 0.2 - 0.5;
    echo $x;
    echo '<br/>';
    echo 100 - 99.6;
    echo '<br/>';
    $t = TRUE;
    $f = FALSE;
        //論理和の書き方
    $x = TRUE || FALSE;
    $y = TRUE or FALSE;
        //論理積の書き方
    $x = TRUE && FALSE;
    $y = TRUE and FALSE;
        //単行演算の書き方
    $z = ! TRUE;
    ?>
</body>
</html>