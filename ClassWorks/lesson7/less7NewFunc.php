<?php
//пользовательские функции
/*
function name (parametrs)
 {
	команды
 }
*/
 function hello($text)
 {
 	echo #text."<br>";
};
 hello("Hello world");
 hello("I find functions");
 hello("functions in such interest ");
 function V1($text)
 {
  return $text."<br>";       //c пом ретерн мы указ функц чтоб она вернула рез переменной $text 
 }
V1 ('hello world');
$message= V1 ('hello world');
echo $message;
