<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/3
 * Time: 17:11
 */
/**
 * 输入两个单调递增的链表，输出两个链表合成后的链表，当然我们需要合成后的链表满足单调不减规则。
 */

class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}
function Merge($pHead1, $pHead2){
    if (is_null($pHead1)){
        return $pHead2;
    }elseif (is_null($pHead2)){
        return $pHead1;
    }
    $merged = new ListNode(null);
    if ($pHead1->val < $pHead2->val){
        $merged->val = $pHead1->val;
        $merged->next = Merge($pHead1->next, $pHead2);
    }else{
        $merged->val = $pHead2->val;
        $merged->next = Merge($pHead1, $pHead2->next);
    }
    return $merged;
}

function Merge2($pHead1, $pHead2)
{
    // write code here


    $new_head = new ListNode(null);
    $p = $pHead1;
    $q = $pHead2;
    while($p && $q){
        if($p->val < $q->val){
            $new_head->next = $p;
            $p = $p->next;
        }else{
            $new_head->next = $q;
            $q = $q->next;
        }
        $new_head = $new_head->next;

    }
    while($p){
        $new_head->next = $p;
    }
    while($q){
        $new_head->next = $q;
    }
    return $new_head;
}