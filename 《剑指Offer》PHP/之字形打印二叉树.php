<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/30
 * Time: 15:40
 */

//请实现一个函数按照之字形打印二叉树，即第一行按照从左到右的顺序打印，
//第二层按照从右至左的顺序打印，第三行按照从左到右的顺序打印，其他行以此类推。
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val, $left=null, $right=null){
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
/**
 * 当我们在打印某一行的结点时，把下一层的结点保存到相应的栈中。
 * 如果当前打印的是奇数层，则先保存左子结点再保存右子结点到一个栈中；
 * 如果当前打印的是偶数层，则先保存右子结点再保存左子结点到另一个栈中。
 */

function MyPrint($pRoot){
    if (empty($pRoot)){
        return [];
    }
    $current = [];
    $next = [];
    $current[] = $pRoot;
    $level = 0;
    $print = [];
    while (!empty($current) || !empty($next)){
        if ($level != 0){
            $current = $next;
            $next = [];
        }
        $print[$level] = [];

        while(!empty($current)){
            $node = array_pop($current);
            array_push($print[$level], $node->val);
            if (!($level & 1)){
                if ($node->left){
                    $next[] = $node->left;
                }
                if ($node->right){
                    $next[] = $node->right;
                }
            }else{
                if ($node->right){
                    $next[] = $node->right;
                }
                if ($node->left){
                    $next[] = $node->left;
                }
            }
        }
        $level++;
    }
    return $print;
}

function main(){
    $node1 = new TreeNode(5);
    $node2 = new TreeNode(7);
    $node3 = new TreeNode(9);
    $node4 = new TreeNode(11);
    $node5 = new TreeNode(6, $node1, $node2);
    $node6 = new TreeNode(10, $node3, $node4);
    $node7 = new TreeNode(8, $node5, $node6);
    $pRoot = $node7;
//    echo !(2 & 1);
    print_r(MyPrint($pRoot));
}
main();