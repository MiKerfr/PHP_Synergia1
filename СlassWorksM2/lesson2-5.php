<?
<<<<<<< HEAD
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#aaa|bbb#'; // 3*a 3*b
    $replacement = '0';
    $subject = 'aaa bbb aaa ccc ddd eee fff';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    //--------------------------------------------------
    echo '<br>';
    $pattern ='#a{2,}|b{2,}#';
    $replacement = '0';
    $subject = 'aaa bbb aaa ccc ddd eee fff';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#a{5}|b{1,}#';
    $replacement = '0';
    $subject = 'aaaaa bbb aaaaa ccc ddd bbbbbbbb eee fff';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#[a-zA-Z]+|\d{2}#';
    $replacement = '0';
    $subject = 'aaaaa bbb aaaaa 555 33 ccc 55 ddd bbbbbbbb eee fff';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#a{3}|b+|c{5}|\d{4}#';
    $replacement = '0';
    $subject = 'aaaa b 2345 cccc ffff';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#\bs[a-zA-Z]{4}z\b|\bs\d{3}z\b#';
    $replacement = '0';
    $subject = 'aaa sACFVz s123z s333rz';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    // гр символов в рег выр-х
    // \d- обозн от 0 до 9
    // \D- обозн не цифры от 0 до 9
    // \w- обозн цифры, буква лат и
    // \W- обозн нецифры, небуквы лат и не _
    // \b- начало\конец слова
    // \B- НЕначало\НЕконец слова
	//--------------------------------------------------
	echo '<br>';
    $pattern ='#\bs([a-zA-Z]{4}|\d{3})z\b#';
    $replacement = '0';
    $subject = 'aaa sACFVz s123z s333rz';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
=======
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
    
>>>>>>> 2a26c3f525a594a9f3a1a5beeb076385b3d2aa67
?>