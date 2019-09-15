<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/7
 * Time: 16:53
 */

function LRU($arr, $k){
    $lenArr = count($arr);
    $i = 0;
    $s = 0;
    $memory = [];
    while($i < $lenArr){
        if (in_array($arr[$i], $memory)){
            $lenM = count($memory);
            for($j=0; $j<$lenM-1; $j++){
                if ($memory[$j] == $arr[$i]){
                    while($j < $lenM-1){
                        $memory[$j] = $memory[$j+1];
                        $j++;
                    }
                    break;
                }
            }
            $memory[$j] = $arr[$i];
        }else{
            $lenM = count($memory);
            if ($lenM < $k){
                array_push($memory, $arr[$i]);

            }else{
                for($j=0; $j<$lenM-1; $j++){
                    $memory[$j] = $memory[$j+1];
                }
                $memory[$j] = $arr[$i];
            }
            $s++;
        }
        $i++;
    }
    return $s;
}

print_r(LRU([1,2,5,3,4,6,1,4,3,6,7,8,3,9], 6));