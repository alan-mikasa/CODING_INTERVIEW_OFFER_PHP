<?php
//给定一个整数数组和一个整数 k，你需要找到该数组中和为 k 的连续的子数组的个数。 
//
// 示例 1 : 
//
// 
//输入:nums = [1,1,1], k = 2
//输出: 2 , [1,1] 与 [1,1] 为两种不同的情况。
// 
//
// 说明 : 
//
// 
// 数组的长度为 [1, 20,000]。 
// 数组中元素的范围是 [-1000, 1000] ，且整数 k 的范围是 [-1e7, 1e7]。 
// 
// Related Topics 数组 哈希表



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
        $map = [];
        $sum = 0;
        $count = 0;
        $map[0] = 1;
        foreach ($nums as $num) {
            $sum += $num;
            if (in_array($sum - $k, array_keys($map))){
                $count += $map[$sum - $k];
            }
            $map[$sum] = isset($map[$sum]) ? $map[$sum] + 1 : 1;
        }
        return $count;
    }
}
//leetcode submit region end(Prohibit modification and deletion)
