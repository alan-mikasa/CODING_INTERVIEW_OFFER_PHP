<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/9/5
 * Time: 23:33
 */

$big_top = new SplMaxHeap();
$small_top = new SplMinHeap();

function Insert($num){
    global $big_top;
    global $small_top;
    if ($small_top->isEmpty() || $num >= $small_top->top()){
        $small_top->insert($num);
    }else{
        $big_top->insert($num);
    }
    if ($small_top->count() == $big_top->count() + 2) $big_top->insert($small_top->extract());
    if ($small_top->count() + 1 == $big_top->count()) $small_top->insert($big_top->extract());
}

function GetMedian(){
    global $big_top;
    global $small_top;
    return $small_top->count() == $big_top->count() ? ($small_top->top() + $big_top->top()) / 2 : $small_top->top();
}
