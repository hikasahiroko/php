<?php
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;
?>

<?php
$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo "<br />";
echo $a;
echo "<br />";
echo $c;
?>

<?php
$a = 20;
$b = 5;

echo "<br />";
echo ($a != $b);
echo "<br />";
?>

<?php
$a = 20;
$b = 5;

echo ($a>10 && $a<30);
echo "<br />";
?>

<?php
$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo --$a;
echo "<br />";
echo --$c;
echo "<br />";
echo ++$c;