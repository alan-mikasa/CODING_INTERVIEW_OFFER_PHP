<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/19
 * Time: 15:39
 */

function devide3(){
    $input = trim(fgets(STDIN));
    $arr = explode(' ', $input);
//    $arr = [2,5];
    $count = 0;
    for($i=$arr[0]; $i<=$arr[1]; $i++){
        $sum = ($i+1)*$i/2;
        if (!($sum%3)){
            ++$count;
        }
    }
    echo $count;
}
devide3();