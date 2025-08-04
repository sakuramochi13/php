<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>関数</title>
</head>
<body>
    <?php
    function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}
outputNumber(2);

echo '<br/>';
//引数と戻り値なし

function outputHello()
{
  echo "Hello world";
  //戻り値がない場合は、returnは省略可
}

outputHello(); 

echo '<br/>';//

function text($number1, $number2)//()の中が引数の値
{
  $value = $number1 + $number2;//関数を呼び出した時に{}の中が実行される。
  return $value;
}

$total = text(2, 3);//関数textの戻り値が代入されている。
echo $total;

echo '<br/>';//
//問題　合計点が210より大きい時...自分

function score($score1, $score2, $score3)
{
    $total_score = $score1 + $score2 + $score3;
    if ($total_score >= 210) {
        echo '合計点は ' . $total_score . ' なので合格です';
    } else if ($total_score < 210) {
        echo '合計点は ' . $total_score . ' なので不合格です';
    }
    //return $total_score; これいらないらしい
}

score(90, 60, 80);
//echo なくても表示される。

echo '<br/>';//
//Q. 三角形・四角形・台形の面積を求める関数を定義して、面積を求めてみましょう。自分
//三角形
function triangle($bottom, $height)
{
    $a = ($bottom * $height) / 2 . ' m2です';
    return $a;
}
$b = triangle(8, 5);
echo '三角形の面積は、' . $b . '<br/>';

///四角形
function quadrilateral($vertical, $beside)
{
    $c = $vertical * $beside . ' m2です';
    return $c;
}
$d = quadrilateral(7, 8);
echo '四角形の面積は、' . $d . '<br/>';

//台形
function trapezoid($top_side, $bottom_side, $hight_1)
{
    $e = ($top_side + $bottom_side) * $hight_1 / 2 . ' m2です';
    return $e;
}
$f = trapezoid(5, 6, 4);
echo '台形の面積は、' . $f . '<br/>';

    ?>
</body>
</html>