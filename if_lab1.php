<?php
/**
 * if 判斷式練習
 * Created by PhpStorm.
 * User: brad
 * Date: 2018/4/26
 * Time: 22:35
 */

    $var1 = true; $var2 = false;
    if ($var1){
        echo '$var1 : true' . '<br />';
    }
    if (!$var2){    // ! 為非
        echo '$var2 : false' . '<br />';
    }
    echo '<hr />';

    // 數值相關
    $var1 = 0;      // false
    $var2 = 0.1;    // true
    $var3 = 0.00;   // false
    if ($var1) echo '0 is true' . '<br />';
    if ($var2) echo 'non-zero is true' . '<br />';
    if ($var3) echo '0.00 is true' . '<br />';
    echo '<hr />';

    // 字串相關
    $var1 = ''; $var2 = ' '; $var3 = '0'; $var4 = '00';
    if ($var1) echo 'non-string is true' . '<br />';
    if ($var2) echo 'space is true' . '<br />';
    if ($var3) echo 'zero string is true' . '<br />';
    if ($var4) echo 'double zero spaces is true' . '<br />';
    echo '<hr />';
