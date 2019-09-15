<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/2
 * Time: 10:49
 */

class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x, $next=null){
        $this->val = $x;
        $this->next = $next;
    }
}

function FindFirstCommonNode($pHead1, $pHead2)
{
    // write code here
    $p = $pHead1;
    $q = $pHead2;
    while($p && $q){
        $p = $p->next;
        $q = $q->next;
    }
    $long = ($p === null ? $pHead2 : $pHead1);
    $short = ($long === $pHead1 ? $pHead2 : $pHead1);
    $k = $p ?? $q;
    $sum = 0;
    while($k){
        $sum++;
        $k = $k->next;
    }
    while($sum--){
        $long = $long->next;
    }
    while($long !== $short){
        $long = $long->next;
        $short = $short->next;
    }
    return $long;
}


function main(){
    $node7 = new ListNode(7);
    $node6 = new ListNode(6, $node7);
    $node5 = new ListNode(5, $node6);
    $node4 = new ListNode(4, $node5);
    $node3 = new ListNode(3, $node6);
    $node2 = new ListNode(2, $node3);
    $node1 = new ListNode(1, $node2);
    $pHead1 = $node1;
    $pHead2 = $node4;
    print_r($node7->val);
    print_r(findFirstCommonNode($pHead1, $pHead2));

}
main();