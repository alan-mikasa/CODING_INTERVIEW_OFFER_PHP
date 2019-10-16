<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/1
 * Time: 10:46
 */

//O(1), O(n)
//$realStack = [];
//$minStack = [];
//function mypush($node)
//{
//    // write code here
//    global $realStack;
//    global $minStack;
//    array_push($realStack, $node);
//    if(empty($minStack)){
//        array_push($minStack, $node);
//    }else{
//        $min = $node < end($minStack) ? $node : end($minStack);
//        array_push($minStack, $min);
//    }
//}
//function mypop()
//{
//    // write code here
//    global $realStack;
//    global $minStack;
//    if(empty($realStack) || empty($minStack)){
//        return null;
//    }
//    array_pop($minStack);
//    array_pop($realStack);
//}
//function mytop()
//{
//    // write code here
//    global $realStack;
//    global $minStack;
//    if(empty($realStack) || empty($minStack)){
//        return null;
//    }
//    return end($realStack);
//}
//function mymin()
//{
//    // write code here
//    global $realStack;
//    global $minStack;
//    if(empty($minStack)){
//        return null;
//    }
//    return end($minStack);
//}
//
//function main(){
//    //PSH3","MIN","PSH4","MIN","PSH2","MIN","PSH3","MIN","POP","MIN","POP","MIN","POP","MIN","PSH0","MIN
//    mypush(3);
//    print_r(mymin());
//
//    mypush(4);
//    print_r(mymin());
//
//    mypush(2);
//    print_r(mymin());
//
//    mypush(3);
//    print_r(mymin());
//
//    print_r(mypop());
//    print_r(mymin());
//
//    print_r(mypop());
//    print_r(mymin());
//
//    print_r(mypop());
//    print_r(mymin());
//
//    mypush(0);
//    print_r(mymin());
//
//}
//main();


/**
 * 实现一个这样的栈，这个栈除了可以进行普通的push、pop操作以外，还可以进行getMin的操作，
 * getMin方法被调用后，会返回当前栈的最小值。
 * 栈里面存放的都是 int 整数，并且数值的范围是 [-100000, 100000]。
 * 要求所有操作的时间复杂度是 O(1)。
 *
 * 附加：如果空间复杂度也能O(1)的话可加分。
 */
//O(1), O(1)

//stack中不存放原始数值，而是存放差值，即栈顶与最小值之间的差值

class MinStack{
    var $stack = [];
    var $min;

    public function myPush($num)
    {
        $stack = &$this->stack;
        $min = &$this->min;
        if (empty($stack)){
            $stack[] = 0;
            $min = $num;
        }else{
            $compare = $num - $min;
            $stack[] = $compare;
            //如果差值小于0，则num成为最小值，否则不变
            $min = $compare < 0 ? $num : $min;
        }
    }

    public function myPop(){
        $stack = &$this->stack;
        $min = &$this->min;
        $top = end($stack);
        //如果top小于0，则最小值一并删除，此时更新最小值
        $min = $top < 0 ? ($min - $top) : $min;
        $num = $top + $min;
        array_pop($stack);
        return $num;
    }

    public function getMin()
    {
        return $this->min;
    }
}

$min_stack = new MinStack();

$min_stack->myPush(3);
print_r($min_stack->getMin());
echo "\n";

$min_stack->myPush(4);
print_r($min_stack->getMin());
echo "\n";

$min_stack->myPush(2);
print_r($min_stack->getMin());
echo "\n";

$min_stack->myPush(3);
print_r($min_stack->getMin());
echo "\n";

print_r($min_stack->myPop());
echo "\n";

print_r($min_stack->getMin());
echo "\n";

print_r($min_stack->myPop());
echo "\n";
print_r($min_stack->getMin());
echo "\n";

print_r($min_stack->myPop());
echo "\n";
print_r($min_stack->getMin());
echo "\n";

$min_stack->myPush(0);
print_r($min_stack->getMin());

