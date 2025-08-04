<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>多次元配列の値</title>
</head>
<body>
    <?php

//Q. foreach文をつかって多次元配列の値をすべて出力してみましょう。自分
$user = [
    "001" => ["Taro", "25", "men"],
    "002" => ["Jiro", "20", "men"],
    "003" => ["Hanako", "16", "women"],
	];

foreach ($user as $key => $personal) {
    echo $personal[0] . "(" . $personal[1] . "歳" . $personal[2] . ")" . "<br/>";
}

    ?>
</body>
</html>