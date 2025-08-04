<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz問題</title>
</head>
<body>
    <?php
    $count = 0;

    while ($count <= 50) {
        if ($count < 1) {
            $count++;
            continue;
        }
        if ($count % 3 === 0 && $count % 5 === 0) {
            echo 'FizzBuzz' . '<br />';
            $count++;
            continue;
        }
        if ($count % 3 === 0) {
            echo 'Fizz' . '<br />';
            $count++;
            continue;
        }
        if ($count % 5 === 0) {
            echo 'Buzz' . '<br />';
            $count++;
            continue;
        }
    echo $count . '<br />';
    $count++;
    }
    //for文を使ってできず・・・
    ?>
</body>
</html>