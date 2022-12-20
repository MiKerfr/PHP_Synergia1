<?php
   $arr=[];                               //созд массив
   $arr=[                                 //начиная с 1 а не 0
   	     1==>'monday',
   	     2==>'tuesday',
   	     3==>'wednesday',
   	     4==>'thursday',
   	     5==>'friday',
   	     6==>'sunday' 
   	    ];
   	var_dump('fff');                      //показывает тип даных
   	echo "<br>";                          //след строка
   	$arr2=[
   		'Petr'       ==>100               //ключ-'Petr'
   		'Vasya'      ==>300
   		'Boris'      ==>5000
   		'Maksim'     ==>4000
   		 ];
    echo $arr2['Petr'];                   //бращение по ключу
                                          //цикл foreach   #-имя $elem-переменная.
                                          //  foreach($# as $elem) { $#*x/x%x:x }
    $arr3=[1,2,3,4,5,6,7,8,9,10];
    foreach ($arr3 as $item)              // отобр массива как элемент
        {            
    	echo $item. '<br>';               // показать элемент с пропуском строки
    	};
    foreach ($arr3 as $item)              // отобр массива как элемент
        {   
        $result= $item*2;        
    	echo $result. '<br>';             // показать элемент с пропуском строки
    	};
    	$arr4=[1,2,3,4,5,6,7,8,9,10];
    	foreach ($arr4 as $item)
    	{  ?> 
        <p>{<?php echo $item?>}</p>;
        <?php };
        echo "<br>"
        echo "<br>"
        echo "<br>"
        echo "<br>"
        echo "<br>"
        foreach ( $arr4 as $item) 
        {
        	echo "<p>"/{'$item'}/</p>;
        }
                                        //while икл с условием
                                        //while ($#<=5){ код  $#+1;   }
