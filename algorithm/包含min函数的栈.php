<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/1
 * Time: 10:46
 */
$realStack = [];
$minStack = [];
function mypush($node)
{
    // write code here
    global $realStack;
    global $minStack;
    array_push($realStack, $node);
    if(empty($minStack)){
        array_push($minStack, $node);
    }else{
        $min = $node < end($minStack) ? $node : end($minStack);
        array_push($minStack, $min);
    }
}
function mypop()
{
    // write code here
    global $realStack;
    global $minStack;
    if(empty($realStack) || empty($minStack)){
        return null;
    }
    array_pop($minStack);
    array_pop($realStack);
}
function mytop()
{
    // write code here
    global $realStack;
    global $minStack;
    if(empty($realStack) || empty($minStack)){
        return null;
    }
    return end($realStack);
}
function mymin()
{
    // write code here
    global $realStack;
    global $minStack;
    if(empty($minStack)){
        return null;
    }
    return end($minStack);
}

function main(){
    //PSH3","MIN","PSH4","MIN","PSH2","MIN","PSH3","MIN","POP","MIN","POP","MIN","POP","MIN","PSH0","MIN
    mypush(3);
    print_r(mymin());

    mypush(4);
    print_r(mymin());

    mypush(2);
    print_r(mymin());

    mypush(3);
    print_r(mymin());
    
    print_r(mypop());
    print_r(mymin());

    print_r(mypop());
    print_r(mymin());

    print_r(mypop());
    print_r(mymin());

    mypush(0);
    print_r(mymin());

}
main();