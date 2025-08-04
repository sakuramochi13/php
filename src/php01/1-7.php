<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複雑なif文</title>
</head>
<body>
    <?php
        $x = 0;

        if ($x > 0) {
            echo 'プラスだよ';
        } else  if ($x < 0) {
            echo 'マイナスだよ';
        } else {
            echo 'ゼロだよ';
        }
        //↑３つでも使える。どれか一つだけTRUEで、他がFALSEの時。

        echo '<br/>';
        // ↓　if文の中にif文を作れる。
        $y = 1;

        if ($y > 0) {
            if ($y % 2 === 0) {
                echo '正の偶数だよ';
            } else {
                echo '正の奇数だよ';
            }
        } else if ($y < 0) {
            if ($y % 2 === 0) {
                echo '負の偶数だよ';
            } else {
                echo '負の奇数だよ';
            }
        } else {
            echo 'ゼロだよ';
        }
    ?>
</body>
</html>