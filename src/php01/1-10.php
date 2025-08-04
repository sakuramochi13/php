<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <?php
    /*　書き方
    for (初期化処理; 継続処理; 更新処理) {
        //処理
    }*/
    /* 九九が縦に表示
    for ($i = 1; $i < 10; $i++) {
        for ($j = 1; $j < 10; $j++) {
            $x = $i * $j;
            echo "{$i}x{$j}={$x}";
            echo '<br/>';
        }
    }
    */
    for ($i = 1; $i <10; $i++) {
        echo '<tr>';
        for ($j =  1; $j < 10; $j++) {
            $x = $i * $j;
            echo "<td>{$x}</td>";
        }
        echo '</tr>';
    }


    
    ?>
    </table>
</body>
</html>