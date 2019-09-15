<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/20
 * Time: 12:02
 */

function getLeastNumbers_Solution($input, $k){
    $maxHeap = new SplMaxHeap();
    $len = count($input);
    if ($k > $len) {
        return false;
    }
    for ($i = 0; $i < $len; $i++){
        if ($i < $k){
            $maxHeap->insert($input[$i]);
        }else{
            $top = $maxHeap->top();
            if ($input[$i] < $top){
                $maxHeap->extract();
                $maxHeap->insert($input[$i]);
            }
        }

    }
    $result =[];
    foreach ($maxHeap as $item) {
        $result[] = $item;
    }
    return $result;
}

//class MyMaxHeap extends SplHeap{
//    function compare($value1, $value2)
//    {
//        return ($value1 - $value2);
//    }
//}


print_r(getLeastNumbers_Solution([4,5,1,6,2,7,3,8],4));
