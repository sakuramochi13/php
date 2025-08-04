<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz答え</title>
</head>
<body>
    <?php
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 15 == 0) {
    echo $FizzBuzz . '<br />';
    } else if ($i % 3 == 0) {
    echo $Fizz. '<br />';
    } else if ($i % 5 == 0) {
    echo $Buzz. '<br />';
    } else {
    echo $i . '<br />';
    }
}
//改行が全然入ってないので、brを入れた。
    ?>
</body>
</html>