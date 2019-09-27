<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/22
 * Time: 7:55
 */

//$input = trim(fgets(STDIN));


//找厕所
function findToilet($str){
    $arr = str_split($str);
    $position = array_keys($arr, 'O');
    $arr_len = count($arr);
    $res = [];
    for ($i = 0; $i < $arr_len; $i++){
        if ($arr[$i] == "O"){
            $res[$i] = 0;
            continue;
        }
        $min = $arr_len;
        $key_len = count($position);
        $current = [];
        for ($j = 0; $j < $key_len; $j++){
            $current[] = abs($i - $position[$j]);
        }
        $res[] = min($current);
    }
    echo implode(' ', $res);
}

findToilet('OXXOXXX');

function main1(){
    $n = trim(fgets(STDIN));
    $str = trim(fgets(STDIN));
    findToilet($str);
}
//main1();

//function main1(){
//    $n = trim(fgets(STDIN));
//    $str = trim(fgets(STDIN));
//    findToilet($str);
//}
//main();





function finishTask($matrix){
    $len = count($matrix);
    $order = range(1,$len);
    for($i = 0; $i < $len; $i++){
        if ($matrix[$i] = []){
            continue;
        }
        foreach ($matrix[$i] as $item) {
            if (array_keys($order, $order[$item]) > array_keys($order, $order[$i])){
                list($order[$item], $order[$i]) = [$order[$i], $order[$item]];
            }
        }
    }
    echo implode(' ', $order);
}

function main2(){
    $matrix = [];
    while(1){
        $tmp = explode(' ', trim(fgets(STDIN)));
        if (!is_numeric($tmp[0])) break;
        $matrix[] = array_slice($tmp, 1);
    }
    finishTask($matrix);
}

main2();



//$matrix = [
//    [],
//    [1],
//    [2],
//    [1],
//    [1,3,4]
//];
//print_r(finishTask($matrix));


//<?php
//
//
//class MinHeap extends SplPriorityQueue {
//    public function compare($priority1, $priority2)
//    {
//        return $priority2 - $priority1;
//    }
//}
//
//$n = fgets(STDIN);
//
//for ($i = 0; $i < $n; $i++) {
//    $nmArr = explode(" ", fgets(STDIN));
//    $n = $nmArr[0];
//    $time = $nmArr[1];
//    $dataArr = explode(" ", fgets(STDIN));
//    $heap = new MinHeap();
//    $heap->setExtractFlags(SplPriorityQueue::EXTR_DATA);
//    $re = [];
//    foreach ($dataArr as $key => $value) {
//        $tmpSum = 0;
//        $count = 0;
//        $outPut = [];
//        while ($heap->valid()) {
//            $tmpSum += (int)$heap->current();
//            if (($time - $value - $tmpSum) >= 0) {
//                $count++;
//                array_push($outPut, $heap->current());
//            } else {
//                break;
//            }
//            $heap->next();
//        }
//        foreach ($outPut as $k => $v) {
//            $heap->insert($v, $v);
//        }
//        if ($heap->count() > $count) {
//            $re[$key] = $heap->count() - $count;
//        } else {
//            $re[$key] = 0;
//        }
//        $heap->insert($value, $value);
//    }
//    foreach ($re as $key => $value) {
//        if ($key == $n-1) {
//            fwrite(STDOUT, $value."\n");
//        } else {
//            fwrite(STDOUT, $value." ");
//        }
//
//    }
//}
//
//exit(0);
