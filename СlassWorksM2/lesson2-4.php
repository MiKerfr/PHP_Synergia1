<?
	  echo '<br>';
    $pattern ='#\\\\#';
    $replacement = '0';
    $subject = '\\ 111 222 332';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    //-------------------------------------------------
    //проверка на наличие совпадений
    //-------------------------------------------------
      echo '<br>';
    $pattern ='#a+#';
    $subject = 'ccc bbb aaa';
    $res= preg_match($pattern, $subject);
    echo $res;
    //-------------------------------------------------
      echo '<br>';
    $pattern ='#a+#';
    $subject = 'bb ccc dddd';
    $res= preg_match($pattern, $subject);
    echo $res;
    //-------------------------------------------------
      echo '<br>';
    $pattern ='#\d{3,}#';
    $arr = 
    [
    	'aaa 123 bbb',
    	'aaa 12345 bbb',
    	'aaa 12a bbb',
    	'aaa 12 bbb',
    	'aaaaaa 123456789 bbbbb'
    ];
    foreach ($arr as $str){
    	$res = preg_match( $pattern, $subject);
    	echo "Исходная строка $str   | Строка после $res <br>";
    }
    $res= preg_match($pattern, $subject);
    echo $res;
    //-------------------------------------------------
      echo '<br>';
    $pattern = '#^word@#';
    $arr2 = [
    	'word - слово',
    	'awrd', 
    	'слово',
    	'war',
    	'ord'
    ];
    foreach ($arr2 as $str) {
    	$res= preg_match($pattern, $str);
    	echo "Проверка строки $res , результат $res".'<br>';
    };
    //-------------------------------------------------------
    $pattern = '#([a-z0-9_.]+)\.([a-z]{2,})#';
    $subject = 'site.ru';
    $res = preg_match($pattern, $subject, $matches);
    // 1th карман ([a-z0-9_.]+) - домен-имя
    // 2nd карман ([a-z]{2,}) - домен-зона
     var_dump($matches);
    
?>