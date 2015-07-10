<?php
/////////////
// Vim命令合集 //
/////////////

// 快捷键
    u|U     // 撤销【到底】
    ctrl+r  // 反撤销

// 基本的
    :set encoding=utf-8     // 更改编码
    :set nu!    // 显示行号
    :set no|nc     // 忽略大小写，[no]ignorecase，
    如果只是想在搜索或者替换的时候偶尔忽略大小写，而不更改全局变量，加 \c即可： /nancy\c 
    在Vim中，很多命令都可以配合数字使用，比如删除10个字符10x



// 移动命令
    [595]h|j|k|l    // 左下上右
    [595]gg|G   // [到595行]首行|尾行 第一个字符
    [595]w|b|e|ge    // 按单词右左至单词首，右左至单词首尾
    [595]0|^|$    // 行第一个字符、行首、行尾
    0|$     // 到行首|行尾
    {|}     // 到整体头部|尾部

// 删除
    [595]dd     // 向下删除N行
    g[v]/INSERT.*99cms_news\c/d  // 删除包含[不包含]字串‘INSERT.*99cms_news\c’的行  \c忽略大小写

// 替换
   :n,$s/vivian/sky/g // 替换第 n 行开始到最后一行中每一行所有 vivian 为 sky  

// 复制粘贴
  yy      // 命令复制当前整行的内容到vi缓冲区
　　yw    // 复制当前光标所在位置到单词尾字符的内容到vi缓存区，相当于复制一个单词
　　y$    // 复制光标所在位置到行尾内容到缓存区
　　y^    // 复制光标所在位置到行首内容到缓存区
　　[324]yy   // 向下复制N行
　　[324]yw   // 向下复制N个单词

　　如果要复制第m行到第n行之间的内容，可以在末行模式中输入m，ny例如：3，5y复制第三行到第五行内容到缓存区。