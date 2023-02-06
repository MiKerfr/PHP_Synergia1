<?
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
?>