<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/20
 * Time: 16:10
 */

function FirstNotRepeatingChar($str)
{
    $arr = [];
    $len = strlen($str);
    for ($i = 0; $i < $len; $i++){
        if (!array_key_exists($str[$i], $arr)){
            $arr[$str[$i]] = 1;
        }else{
            $arr[$str[$i]] = -1;
        }
    }
    for ($i=0; $i<$len; $i++){
        if ($arr[$str[$i]] == 1){
            return $i;
        }
    }
    return -1;
}

print_r(FirstNotRepeatingChar("google"));
