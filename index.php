<?php

/**
 * @author Constantine Kutin
 * @copyright 2016
 */

// массив контрольных множителей
$mas_control = array(2, 3, 4, 5, 6);
// количество контрольных чисел
$kol_control = count($mas_control);
// массив результатов
$mas_res = array();
// лимиты
$low_limit = 5000;
$up_limit = 1000000;

for ($j = $low_limit; $j <= $up_limit; $j++) 
{
    for ($i = 2; $i <= 6; $i++) 
    {
	   $flag = 0;
       $chislo = $j * $i;
       $mas_mn = preg_split('//', $chislo, -1, PREG_SPLIT_NO_EMPTY); // массив числа умноженного
       $mas_nach = preg_split('//', $j, -1, PREG_SPLIT_NO_EMPTY); // массив числа начального
       sort($mas_mn);
       sort($mas_nach);
     
       if (count(array_diff($mas_mn, $mas_nach)) > 0)
       {
           $flag = 1;
           break;
       } // if    
     } // for
     if($flag == 0)
        array_push($mas_res, $j);

} // for
 
sort($mas_res);
echo "<br>Найденное минимальное число по заданному условию: ".$mas_res[0];
/*echo "<pre>";
print_r($mas_res);
echo "</pre>";
*/
?>