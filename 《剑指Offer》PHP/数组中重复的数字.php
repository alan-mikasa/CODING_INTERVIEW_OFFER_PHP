<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/28
 * Time: 19:47
 */




function duplicate($numbers, &$duplication){
    $len = count($numbers);
    $flag = false;
    for($i = 0; $i < $len; $i++){
        $index = $numbers[$i];
        if ($index >= $len){
            $index -= $len;
        }
        if ($numbers[$index] >= $len){
            $duplication[] = $index;
            $flag = true;
            break;
        }
        $numbers[$index] += $len;
    }
    return $flag;
}

//print_r(duplicate([2,1,3,1,4],$arr));


////快慢指针  //TODO 存在问题？？？32102这种序列
//function duplication($numbers, &$duplication){
//    $fast = 0;
//    $slow = 0;
//    while(1){
//        $fast = $numbers[$numbers[$fast]];
//        $slow = $numbers[$slow];
//        if($fast == $slow){
//            $fast = 0;
//            while($fast != $slow){
//                $fast = $numbers[$fast];
//                $slow = $numbers[$slow];
//            }
//            $duplication[0] = $numbers[$fast];
////            echo $duplication[0];
//            return isset($duplication[0]);
//        }
//    }
//}
//$arr = [];
//print_r(duplication([2,1,3,0,4], $arr));
//print_r($arr);

//$nums[$i] + length
function duplication2($nums){
    $len = count($nums);
    for($i = 0; $i < $len; $i++){
        $index = $nums[$i];
        if($index >= $len){
            $index -= $len;
        }
        if($nums[$index] >= $len){
            return $index;
        }
        $nums[$index] += $len;
    }
}


//归位思想
function duplication3($numbers, &$duplication){
    for($i = 0, $len = count($numbers); $i < $len; $i++){
        while($numbers[$i] != $i){
            if($numbers[$i] == $numbers[$numbers[$i]]){
                $duplication[0] = $numbers[$i];
                echo $duplication[0].PHP_EOL;
                return true;
            }
            $tmp = $numbers[$i];
            $numbers[$i] = $numbers[$tmp];
            $numbers[$tmp] = $tmp;
        }
    }
    return false;
}
$a = [];
$numbers = [2,1,3,1,4];
//$numbers = [2,3,1,0,2,5,3];
print_r(duplication3($numbers,$a));
