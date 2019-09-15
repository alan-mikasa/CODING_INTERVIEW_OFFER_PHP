<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 10:52
 */
/**
  输入一个链表，从尾到头打印链表每个节点的值。
  class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function printListFromTailToHead($head)
{
    // write code here
    $p = $head->next;
    $head->next = null;
    while($p){
        $next = $p->next;
        $p->next = $head->next;
        $head->next = $p;
        $p = $next;
    }
    $list = [];
    $arr = $head;
    while($arr){
        $list[] = $arr->val;
        $arr = $arr->next;
    }
    $list[] = $head->val;//$head有值时加上这个
    return $list;
}