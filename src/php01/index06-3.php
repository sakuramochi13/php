<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>二重ループ</title>
</head>
<body>
    <?php
        $z = '⚫︎';

        for ($x = 0; $x < 5 ; $x++) {
            echo $z;//これが要らないらしい。
            for ($y = 1; $y < 5; $y++) {
                echo $z;
                }
                echo '<br/>';
            }

        //答え
        for ($i = 1; $i < 6; $i++) {
            for ($j = 1; $j < 6; $j++) {
                echo "●";
            }
            echo "<br />";
        }
    ?>
</body>
</html>