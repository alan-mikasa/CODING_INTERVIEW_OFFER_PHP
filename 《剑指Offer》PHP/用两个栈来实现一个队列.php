<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/5
 * Time: 9:27
 */
/**
 * 用两个栈来实现一个队列，完成队列的Push和Pop操作。 队列中的元素为int类型。
 */
$stack1 = [];
$stack2 = [];
function myPush($node){
    global $stack1;
    global $stack2;
    $stack1[] = $node;
}

function myPop(){
    global $stack1;
    global $stack2;
    if(empty($stack2)){
        while(!empty($stack1)){
            $stack2[] = array_pop($stack1);
        }
    }
    return array_pop($stack2);
}

//echo '1'.PHP_EOL;
myPush(1);
//print_r($stack1);
//print_r($stack2);

//echo '2'.PHP_EOL;
myPush(2);
//print_r($stack1);
//print_r($stack2);

//echo '3'.PHP_EOL;
myPush(3);
//print_r($stack1);
//print_r($stack2);

//echo '4'.PHP_EOL;
echo myPop();
//print_r($stack1);
//print_r($stack2);

//echo '5'.PHP_EOL;
echo $i = myPop();
//print_r($stack1);
//print_r($stack2);

//echo '6'.PHP_EOL;
myPush(4);
//print_r($stack1);
//print_r($stack2);

//echo '7'.PHP_EOL;
echo $i = myPop();
//print_r($stack1);
//print_r($stack2);

//echo '8'.PHP_EOL;
myPush(5);
//print_r($stack1);
//print_r($stack2);

//echo '9'.PHP_EOL;
echo $i = myPop();
//print_r($stack1);
//print_r($stack2);

//echo '10'.PHP_EOL;
echo $i = myPop();
//print_r($stack1);
//print_r($stack2);
