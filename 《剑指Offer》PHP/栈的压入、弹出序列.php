<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/5
 * Time: 10:33
 */
/**
 * 输入两个整数序列，第一个序列表示栈的压入顺序，请判断第二个序列是否为该栈的弹出顺序。
 * 假设压入栈的所有数字均不相等。
 * 例如序列1,2,3,4,5是某栈的压入顺序，序列4，5,3,2,1是该压栈序列对应的一个弹出序列，
 * 但4,3,5,1,2就不可能是该压栈序列的弹出序列。（注意：这两个序列的长度是相等的）
 */
function isPopOrder($pushV, $popV){
    $popIndex = 0;
    $count = count($popV);
    $stack = [];
    for ($i = 0; $i < $count; $i++){
        $stack[] = $pushV[$i];
        while($popIndex < $count && end($stack) == $popV[$popIndex]){
            array_pop($stack);
            $popIndex++;
        }
    }
    if (empty($stack)){
        return true;
    }
    return false;
}
function IsPopOrder2($pushV, $popV)
{
    $n = 0;
    $len = count($pushV);
    $stack = new SplStack();
    for ($i = 0; $i < $len; $i++) {
        $stack->push($pushV[$i]);
        while ($n < $len && $stack->top() == $popV[$n]) {
            $stack->pop();
            $n++;
        }
    }
    if ($stack->isEmpty()) {
        return true;
    }
    return false;
}

echo isPopOrder([1,2,3,4,5], [4,3,5,1,2]);