<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/7/29
 * Time: 11:01
 */

/**
 * 请实现两个函数，分别用来序列化和反序列化二叉树
 */
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

function MySerialize($pRoot){
    $arr = [];
    doSerialize($pRoot, $arr);
    return implode(',', $arr);
}
function doSerialize($pRoot, &$arr){
    if (empty($pRoot)){
        $arr[] = '#';
        return;
    }
    $arr[] = $pRoot->val;
    doSerialize($pRoot->left, $arr);
    doSerialize($pRoot->right, $arr);
}


function MySerialize2($pRoot)
{
    $arr = doSerialize2($pRoot);
    return implode(',', $arr);
}
function doSerialize2($pRoot){
    $arr = [];
    if (empty($pRoot)){
        $arr[] = '#';
        return $arr;
    }else{
        $arr[] = $pRoot->val;
    }
    $arr = array_merge($arr, doSerialize2($pRoot->left));
    $arr = array_merge($arr, doSerialize2($pRoot->right));
    return $arr;
}


function MyDeserialize($s){
    $arr = explode(',', $s);
    $i = -1;
    return doDeserialize($arr, $i);
}
function doDeserialize($arr, &$i){
    $i++;
    if ($i >= count($arr)){
        return null;
    }
    if ($arr[$i] == '#'){
        return null;
    }
    $node = new TreeNode($arr[$i]);
    $node->left = doDeserialize($arr, $i);
    $node->right = doDeserialize($arr, $i);
    return $node;
}

function MyDeserialize2($s){
    $arr = explode(',', $s);
    $i = 0;
    return doSerialize2($arr, $i);
}

function doDeserialize2($arr, $i){

}








function main(){
    $node1 = new TreeNode(5);
    $node2 = new TreeNode(7);
    $node3 = new TreeNode(9);
    $node4 = new TreeNode(11);
    $node5 = new TreeNode(6, null, $node2);
    $node6 = new TreeNode(10, $node3, $node4);
    $node7 = new TreeNode(8, $node5, $node6);
    $pRoot = $node7;
    MySerialize2($pRoot);
}
main();