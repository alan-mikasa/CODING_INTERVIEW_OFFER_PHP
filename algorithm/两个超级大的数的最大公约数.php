<?php

/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 2019/8/3
 * Time: 15:25
 */
/**
 * C++
 *
#include<iostream>
#include<string>
#include<map>
using namespace std;
#define mod 1000000000

map<int,int>A,B;
int n,m,a;
__int64 ans;

int min(int a,int b)
{
    return a<b?a:b;
}

int main()
{
int i,j;
    freopen("D:\\in.txt","r",stdin);
    while(scanf("%d",&n)==1)
    {
        A.clear();B.clear();
        for(i=0;i<n;i++)
        {
            scanf("%d",&a);
            for(j=2;j*j<=a;j++)
            {
                while(a%j==0)
                    a/=j,A[j]++;
            }
            if(a>1)
                A[a]++;
        }
        scanf("%d",&m);
        for(i=0;i<m;i++)
        {
            scanf("%d",&a);
            for(j=2;j*j<=a;j++)
            {
                while(a%j==0)
                    a/=j,B[j]++;
            }
            if(a>1)
                B[a]++;
        }
        ans=1;
        int flag=0;
        map<int,int>::iterator it;
        for(it=A.begin();it!=A.end();it++)
        {
            if(B.count(it->first))
            {
                int p=it->first;
                int r=min(A[p],B[p]);
                for(i=0;i<r;i++)
                {
                    ans*=p;
                    if(ans>=mod)
                    {
                        ans%=mod;
                        flag=1;
                    }
                }
            }
        }
        if(flag)
            printf("%09d\n",(int)ans);
        else
            printf("%I64d\n",ans);
    }
    return 0;
}
*/

/**
 *
 * 一个数组，是否可以构成这样一个环，环中每个元素都小于相邻两元素的和
 */



function pre($num){
    $list = [];
    for ($i=2; $i*$i<=$num; $i++){
        $list[$i] = 0;
        while($num%$i == 0){
            $num /= $i;
            $list[$i]++;
        }
    }
//    $list[$num] = 0;
//    if ($num > 1){
//        $list[$num]++;
//    }
    if ($num > 1){
        $list[$num] = 1;
    }
    // 不可能会有list[4] == 0 因为2分解完了
//    foreach ($list as $k => $v){
//        if (!$v){
//            unset($list[$k]);
//        }
//    }
    return $list;
}
print_r(pre(18));



function cole($a, $b){
    $listA = pre($a);
    $listB = pre($b);
    $result = [];
    foreach ($listA as $k => $v){
        if(array_key_exists($k, $listB)){
            $result[$k] = $v < $listB[$k] ? $v : $listB[$k];
        }
    }
    $final = 1;
    foreach ($result as $k => $v){
        $final *= pow($k,$v);
    }
    return $final;
}
//print_r(cole(12,18));

//超级大怎么办？？？
