<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>連想配列の操作</title>
</head>
<body>
    <?php
        $hashira = [
            '水柱' => '冨岡義勇',
            '蟲柱' => '胡蝶しのぶ',
            '炎柱' => '煉獄杏寿郎',
            '音柱' => '宇髄天元',
            '霞柱' => '時透無一郎',
            '恋柱' => '甘露寺蜜璃',
            '岩柱' => '悲鳴嶼行冥',
            '蛇柱' => '伊黒小芭内',
            '風柱' => '不死川実弥',
        ];
        echo $hashira['水柱'];
        echo '<br/>';
        $a = ['清水', '二岡', '高岡', '松井'];
        $last = array_pop($a);
        var_dump($a);

echo '<br/>';

        $a = [
            '0' => 'ゼロ',
            '100' => 'ひゃく'
        ];
        var_dump($a);

    ?>
</body>
</html>