<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/1
 * Time: 19:47
 */
function openCase($a, $b){
    list($odd_a, $even_a) = countOddEven($a);
    list($odd_b, $even_b) = countOddEven($b);
    $real_odd = ($odd_a < $even_b) ? $odd_a : $even_b;
    $real_even = ($even_a < $odd_b) ? $even_a : $odd_b;
    return $real_odd + $real_even;
}

function countOddEven($arr){
    $odd = 0;
    $even = 0;
    foreach ($arr as $item){
        if ($item & 1){
            $odd++;
        }else{
            $even++;
        }
    }
    return [$odd, $even];
}


list($n, $m) = explode(' ',trim(fgets(STDIN)));
$a = explode(' ',trim(fgets(STDIN)));
$b = explode(' ',trim(fgets(STDIN)));
echo openCase($a, $b);

