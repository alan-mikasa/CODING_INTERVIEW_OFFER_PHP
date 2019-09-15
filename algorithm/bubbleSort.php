<?php
function uniqueRandom($min, $max, $num)
{
    $count = 0;
    $return = [];
    while($count < $num) {
        $return[] = mt_rand($min, $max);
        //去重
        $return = array_flip(array_flip($return));
        $count = count($return);
    }
    shuffle($return);
    return $return;
}

function bubbleSort($arr){
    for($i = 0,$count = count($arr); $i < $count; $i++){
        $swapped = false;
        for ($j = 0; $j <$count-1; $j++){
            if ($arr[$j] < $arr[$j+1]){
                list($arr[$j], $arr[$j+1]) = array($arr[$j+1], $arr[$j]);
                $swapped = true;
            }
        }
        if (!$swapped) break;
    }
//    foreach ($arr as $item){
//        echo $item.',';
//    }
}

function bubbleSort2($arr){
    for ($i = 0, $len = count($arr); $i < $len; $i++){
        $flag = false;
        for ($j = 0; $j < $len - 1; $j++){
            if ($arr[$j] > $arr[$j + 1]){
                list($arr[$j], $arr[$j + 1]) = [$arr[$j + 1], $arr[$j]];
                $flag = true;
            }
        }
        if (!$flag) break;
    }
    return $arr;
}


print_r(bubbleSort2([6,5,4,3,1,2]));

//$arr = uniqueRandom(1,10000,5000);
//$start = microtime(true);
//bubbleSort($arr);
//$end = microtime(true);
//$used = $end - $start;
//echo '1:'.$used.PHP_EOL;

//
//function bubbleSort2($arr){
//    for($i = 0,$count = count($arr); $i < $count; $i++){
//        $swapped = false;
//        for ($j = 0; $j <$count-1-$i; $j++){
//            if ($arr[$j] < $arr[$j+1]){
//                list($arr[$j], $arr[$j+1]) = array($arr[$j+1], $arr[$j]);
//                $swapped = true;
//            }
//        }
//        if (!$swapped) break;
//    }
//}
//
////$arr = [1,3,5,4,2,7,6];
//$start = microtime(true);
//bubbleSort2($arr);
//$end = microtime(true);
//$used = $end - $start;
//echo '2:'.$used."\n";
//
//
//function bubbleSort3($arr){
//    $bound = count($arr) - 1;
//    for($i = 0,$count = count($arr); $i < $count; $i++){
//        $swapped = false;
//        for ($j = 0; $j <$bound; $j++){
//            if ($arr[$j] < $arr[$j+1]){
//                list($arr[$j], $arr[$j+1]) = array($arr[$j+1], $arr[$j]);
//                $swapped = true;
//                $newBound = $j;
//            }
//        }
//        $bound = $newBound;
//        if (!$swapped) break;
//    }
//}
//
////$arr = [1,3,5,4,2,7,6];
//$start = microtime(true);
//bubbleSort3($arr);
//$end = microtime(true);
//$used = $end - $start;
//echo '3:'.$used."\n";

//$start = microtime(true);
//asort($arr);
//$end = microtime(true);
//$used = $end - $start;
//echo 'asort():'.$used."\n";