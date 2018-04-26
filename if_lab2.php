<?php
/**
 * if 判斷式練習2
 * Created by PhpStorm.
 * User: brad
 * Date: 2018/4/26
 * Time: 22:52
 */

    $var1 = 0;
    $var2 = 0.00;
    $var3 = '0';
    $var4 = '0.00';
    if ($var1 == $var2){
        echo '$var1 == $var2';
    }else{
        echo '<del>$var1 == $var2</del>';
    }

    echo '<hr />';
    if ($var1 === $var2){
        echo '$var1 === $var2';
    }else{
        echo '<del>$var1 === $var2</del>';
    }

    echo '<hr />';
    if ($var3 == $var4){
        echo '$var3 == $var4';
    }else{
        echo '<del>$var3 == $var4</del>';
    }

    echo '<hr />';
    if ($var3 === $var4){
        echo '$var3 === $var4';
    }else{
        echo '<del>$var3 === $var4</del>';
    }




