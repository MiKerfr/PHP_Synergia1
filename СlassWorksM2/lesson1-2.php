<?php
    // preg_replace (что меняем, на что меняем, строка в кот мы произв поиск )
    // #.....# -#- ограни регулярного выражения
    $a = preg_replace('#a#', '!' , 'abcda');
    echo $a;
    // .- любой символ
    preg_replace('#a.a#', '!', 'abaaisbavabv');
    //----------------------------------------------------------------
    // квантификаторы- оперы повтора символов в рег выражениях
    // + 1 и более
    // * 0 и более
    // ? 1 или 0 
    $res=preg_replace('#xa+x#','!', 'xx xax xaax xaaax xab ac');
    echo $res;
    $pattern = '#xa*x#';
    $replacement = '!';
    $subject = 'xx xax xaax xaaax xab';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    // группирующие скобки в рег выр-ях
    // '('и')'
    $res=preg_replace('#xa+x#','!', 'xx xax xaax xaaax xab ac');
    echo $res;
    echo '<br>';
    $pattern = '#x(ab)+x#';
    $replacement = '0';
    $subject = 'xabx xababx xabababx xaax xaabbx';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    echo '<br>';
    $pattern = '#a\+x#';   // \-экранирование спец символов в выр-ях
    $replacement = '0';
    $subject = 'a+x ax aax aaax';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    echo '<br>';
    $pattern = '#a\.x#';   // \-экранирование спец символов в выр-ях
    $replacement = '0';
    $subject = 'a.x abc adi abx';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    // спец символы: * ? $ + / \ {} [] () | . = ^
    // {}кол-во повторов
    // {7} повт 7 раз
    // {5,7}  повт от 5 до 7 раз включая
    // {5,}  от 5ти раз
    echo '<br>';
    $pattern = '#xa{1,3}x#';   // \-экранирование спец символов в выр-ях
    $replacement = '0';
    $subject = 'xx xax xaax xaaax xaaaax xab';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;
    // гр символов в рег выр-х
    // \d- обозн от 0 до 9 
    // \w- обозн цифры, буква лат и _
    // \b- начало\конец слова
    echo '<br>';
    $pattern = '#\d#';
    $replacement = '0';
    $subject = '1 123 xax 1321 xaax 8976986325 xaaax 141 xaaaax 000 xabda';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;