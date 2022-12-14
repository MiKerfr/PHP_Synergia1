<p>Задание 1</p>
<?php
$a = 10;
echo $a;
?>
<br>
<?php
$a = 20;
echo $a;
?>
<br>
<p>Задание 2</p>
<?php
$a=1+2+3;
echo $a;
?>
<br>
<p>Задание 3</p>
<?php
$a=10;
$b=5;
$c=$a-$b;
$d=7;
$result=$c+$d;
echo $result;
?>
<br>
<p>Задание 4</p>
<?php
$a=1.5;
$b=0.75;
$result=$a+$b;
echo $result;
?>
<br>
<p>Задание 5</p>
<?php
$a=-4;
echo "начальная переменная=",$a;
?>
<br>
<?php
$a=-$a;
echo "конечная переменная",$a;
?>
<br>
<p>Задание 6</p>
<?php
$a=10;
$b=3;
echo $a%$b;
?>
<br>
<p>Задание 7</p>
<?php
$a= strlen("It's My HomeWork.");
echo $a;
?>
<br>
<p>Задание 8</p>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Home_8</title>
 </head>
 <body>

 <form name="test" method="post" action="input1.php">
  <p><b>Ваше имя:</b><br>
   <input type="text" size="40">
  </p>
  <p><b>Каким браузером в основном пользуетесь:</b><Br>
   <input type="radio" name="browser" value="ie"> Internet Explorer<Br>
   <input type="radio" name="browser" value="opera"> Opera<Br>
   <input type="radio" name="browser" value="firefox"> Firefox<Br>
  </p>
 </form>

 </body>
</html>
<br>
<p>Задание 9.10.11</p>
<?php
$a="true";
$b="false";
$c="null";
echo $a,", " ,$b,", ", $c;
?>
<br>
<p>Задание 12</p>
<?php
$num = '12345';
$sum = 0;
for ($i = 0; $i < strlen($num); $i++) {
    $sum += $num[$i];
}

var_dump($sum);
?>
<br>
<p>Задание 13</p>
<?php
$days=365;
$hours=24;
$hour=60;
$min=60;
echo $min*$hour*$hours*$days;
?>
<br>
<p>Задание 14</p>
<?php
$tf=289;
$tc=5* $tf - 5*32;
$tc=$tc/9;
echo $tc;