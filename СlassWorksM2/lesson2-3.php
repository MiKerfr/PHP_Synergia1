<?php
      echo '<br>';
    $pattern = '#x[a-d0-9]x#';
    $replacement = '0';
    $subject = 'xax xdx xcx xDx xzx xfx x6x x9x x0x x1c';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res; // 0 0 0 xDx xzx xfx 0 0 0 x1c

    // []- сорт по алф.
    // [a-d]  [A-Da-d0-3]

      echo '<br>';
    $pattern = '#x[^abc]x#';
    $replacement = '0';
    $subject = 'xax xbx xkx xjx xcx';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res; //xa0b0k0j0cx

      echo '<br>';
    $pattern ='#x[^ abc]x#';
    $replacement = '0';
    $subject = 'xax xbx xkx xjx xcx';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res; // xax xbx 0 0 xcx
    // \s-пробельный символ
    // при кириллице исп в шаблоне обязательно добавить 'u'
    
      echo '<br>';
    $pattern ='#[а-я]#u';
    $replacement = '0';
    $subject = 'а я п е ё ё';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res; //0 0 0 0 ё ё

      echo '<br>';
    $pattern ='#[а-яё]#u';
    $replacement = '0';
    $subject = 'а я п е ё ё ';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;  //0 0 0 0 0 0
    
      echo '<br>';
    $pattern ='#[a-z.]#';
    $replacement = '0';
    $subject = 'xax xbx xcx xdx x.x x0x x7x xox';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;  // 0 0 0 0 0 x0x x7x 0

      echo '<br>';
    $pattern ='#x[a-z.]x#';
    $replacement = '0';
    $subject = 'xax xbx xcx xdx x.x x!x x(x xox';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

    /*
    \d цифра 
    \D не цифра
    \w цифры, буквы лат и _
    \W  не цифры, буквы лат и _
    \s пробел
    \S НЕ s-пробельный
    */
      echo '<br>';
    $pattern ='#x[\d.]x#';
    $replacement = '0';
    $subject = 'x0x x9x xcx x3x x.x x!x x(x xox';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    
      echo '<br>';
    $pattern ='#x[\D.]q#';
    $replacement = '0';
    $subject = 'x0q x9q xcq x3q x.q x!q x(q 0';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    
      echo '<br>';
    $pattern ='#x[/^abc]r]#';
    $replacement = '0';
    $subject = 'x0q x9q xcq x3q x.q x!q x(q 0';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;



