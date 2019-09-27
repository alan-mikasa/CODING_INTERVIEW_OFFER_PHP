<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/1
 * Time: 21:50
 */

function putFlowers($range, $k){
    $len = count($range[0]);
    for ($i = 0; $i < $len; $i++){

    }
}

function singleRange($range, $k){
    for ($i = $range[0]; $i <= $range[1]; $i++){
        // TODO to be continued
    }
}

list($t, $k) = explode(' ', trim(fgets(STDIN)));
$a = [];
$b = [];
$range = [];
for ($i = 0; $i < $t; $i++){
    list($a[$i], $b[$i]) = explode(' ', trim(fgets(STDIN)));
    $range[$i] = [$a[$i], $b[$i]];
}

putFlowers($range, $k);

