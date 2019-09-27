<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/1
 * Time: 20:34
 */

function teaTime($a, $b){
    $len = count($a);
    $minus = [];
    $sorted_b = [];
    for ($i = 0; $i < $len; $i++){
        $minus[] = $a[$i] - $b[$i];
    }
    asort($minus);
    foreach ( $minus as $k => $v){
        $sorted_b[] = $b[$k];
    }
    rsort($minus);
    $sum = 0;
    for ($i = 0; $i < $len; $i++){
        $sum += $minus[$i] * $i + ($len - 1) * $sorted_b[$i];
    }
    return $sum;
}

$n = trim(fgets(STDIN));
$a = [];
$b = [];
for ($i = 0; $i < $n; $i++){
    list($a[$i], $b[$i]) = explode(' ', trim(fgets(STDIN)));
}
return teaTime($a, $b);