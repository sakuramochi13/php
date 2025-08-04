<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 7;

        if ($a === 5) {
            echo '$aは5です';
        } elseif ($a === 7) {
            echo '$aは7です';
        } else {
            echo '$aは5と7以外です';
        }
        echo '<br/>';
        //switch構文
        $people = 'Saburo';

        switch ($people) {
            case 'shiro':
                echo '四郎です';
        // 条件1が真の時に実行される処理
                break;
            case 'Saburo':
                echo '三郎です';
        // 条件2が真の時に実行される処理
                break;
            default:
            echo 'どちらでもないです';
        // どの条件にも当てはまらない時に実行される処理
                break;
}
        echo '<br/>';
        //三項演算子
        $a = 7;
        $result = ($a > 6) ? "TRUE" : "FALSE";
        echo $result;
    ?>
</body>
</html>