<?php
    echo '<br>';
    $pattern = '#a.b#';
    $replacement = 'c';
    $subject = 'ahb acb aeb aeeb adcb axeb';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

     echo '<br>';
    $pattern = '#ab{0,}a#';
    $replacement = 'c';
    $subject = 'aa aba abba abbba abca abea';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

     echo '<br>';
    $pattern = '#ab{0,1}a#';
    $replacement = 'c';
    $subject = 'aa aba abba abbba abca abea';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

     echo '<br>';
    $pattern = '#(ab){1,}#';
    $replacement = 'c';
    $subject = 'ab abab abab abababab abea';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

     echo '<br>';
    $pattern = '#2(\+){1,}3#';
    $replacement = 'c';
    $subject = '23 2+3 2++3 2+++3 345 567';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

     echo '<br>';
    $pattern = '#ab{4,}a#';
    $replacement = 'c';
    $subject = 'aa aba abba abbba abbbba abbbbba';
    $res= preg_replace($pattern, $replacement,$subject);
    echo $res;

