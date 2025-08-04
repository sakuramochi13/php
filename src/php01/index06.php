<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //自分
        for ($j = 2; $j <=10; $j = $j + 2) {
            echo $j . '<br />';
        }
    //答え
        for ($i = 1; $i <= 5; $i++) {
            echo $i * 2 . '<br />';
        }
    //出力結果は同じ
//while文の基本構文
    $k = 0;

    while ($k < 3) {
        echo 'i = ' . $k . '<br />';
        $k += 1;
    }
    //20までカウント 自分
    $count = 0;

    while ($count1 <= 20) {
        echo $count1++ . '<br />';
    }
    //20までカウント　答え
    $count = 0;

    while ($count < 20) {
        $count += 1;
        echo $count . '<br />';
    }
    //while文を使った3の倍数をスキップするコード 自分
    $count1 = 0;
    while ($count1 <= 100) {
        if ($count1 % 3 == 0) {
            $count1++;
            continue;
        // $iが5の時、$iに1を足す処理をし、スキップをする。
        }
        echo $count1 . '<br />';
        $count1++;
    }
    //答え
    $count2 = 0;

    while ($count2 <= 100) {
        if ($count2 === 20) {
            break;
        }
        if ($count2 % 3 === 0) {
            $count2++;
            continue;
    }
        echo $count2 . '<br />';
        $count2++;
    }
    //do...while文の問題　自分
    $num = 0;

        do {
        echo 'num = '. $num . '<br />';
        $num++;
    } while ($num < 3);
    //答え
    $num = 0;

        do {
        echo 'num = ' . $num . '<br />';
        $num += 1;
    } while ($num < 3);
    ?>
</body>
</html>