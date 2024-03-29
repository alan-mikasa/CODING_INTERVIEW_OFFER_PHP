<?php
//给定不同面额的硬币 coins 和一个总金额 amount。编写一个函数来计算可以凑成总金额所需的最少的硬币个数。如果没有任何一种硬币组合能组成总金额，返回 -1。 
//
// 示例 1: 
//
// 输入: coins = [1, 2, 5], amount = 11
//输出: 3 
//解释: 11 = 5 + 5 + 1 
//
// 示例 2: 
//
// 输入: coins = [2], amount = 3
//输出: -1 
//
// 说明: 
//你可以认为每种硬币的数量是无限的。 
// Related Topics 动态规划



//leetcode submit region begin(Prohibit modification and deletion)
class Solution {

    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    function coinChange($coins, $amount) {
        $len = count($coins);
        $dp = array_fill(0, $amount + 1, $amount + 1);
        $dp[0] = 0;
        for ($i = 1; $i <= $amount; $i++){
            for ($j = 0; $j < $len; $j++){
                if ($coins[$j] <= $i){
                    $dp[$i] = min($dp[$i - $coins[$j]] + 1, $dp[$i]);
                }
            }
        }
        return $dp[$amount] > $amount ? -1 : $dp[$amount];
    }
}
//leetcode submit region end(Prohibit modification and deletion)
$s = new Solution();
$res =$s ->coinChange([1,2,5], 11);
echo $res;