<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/23
 * Time: 14:48
 */


//分解质因数
function pre($n){
    $list = [];
    for($i=2; $i * $i <= $n; $i++){
        $list[$i] = 0;
        while ($n % $i == 0){
            $list[$i]++;
            $n /= $i;
        }
    }
    if ($n > 1){
        $list[$n] = 1;
    }
    return $list;
}

//最大公约数
function cole($a, $b){
    $listA = pre($a);
    $listB = pre($b);
    $result = [];
    foreach($listA as $k => $v){
        if (array_key_exists($k, $listB)){
            $result[$k] = min($v, $listB[$k]);
        }
    }
    $final = 1;
    foreach($result as $k => $v){
        $final *= pow($k, $v);
    }
    return $final;
}

//最小公倍数
function gongBeiShu($a, $b){
    $gongYueShu = cole($a, $b);
    return $a * $b / $gongYueShu;
}

print_r(gongBeiShu(2,5));