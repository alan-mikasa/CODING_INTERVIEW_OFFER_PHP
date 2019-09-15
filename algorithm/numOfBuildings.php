<?php

function numOfBuildings(){
    $n = trim(fgets(STDIN));
    $str = trim(fgets(STDIN));
    $arr = explode(' ', $str);
    $result = [];
    for($i=0,$len=count($arr); $i<$len; $i++){
        $result[] = findSum($arr, $i);
    }
    fwrite(STDOUT, implode(' ', $result)) ;
}

function findSum($arr, $i){
    $left = 0;
    $right = 0;
    $len=count($arr);
    if ($i > 0){
        for($j=$i-1, $max=$arr[$i-1]; $j>=0; $j--){
            if($arr[$j] > $max){
                ++$left;
                $max = $arr[$j];
            }
        }
    }
    if($i < $len-1){
        for($j=$i+1,$max=$arr[$i+1]; $j<$len; $j++){
            if($arr[$j] > $max){
                ++$right;
                $max = $arr[$j];
            }
        }
    }
    return ($i==0 || $i==$len-1) ? ($left + $right + 2) : ($left + $right + 3);


}