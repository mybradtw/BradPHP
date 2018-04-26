<?php
/**
 * 閏年基本判斷
 * Created by PhpStorm.
 * User: brad
 * Date: 2018/4/26
 * Time: 22:09
 *
 */
$isLeap = false;
$year = '';
if (isset($_GET['year'])){
    $year = $_GET['year'];
    if ($year % 4 == 0){
        if ($year % 100 == 0){
            if ($year % 400 == 0){
                $isLeap = true;
            }else{
                $isLeap = false;
            }
        }else{
            $isLeap = true;
        }
    }else{
        $isLeap = false;
    }
}
?>
<form>
    輸入年份: <input type="number" name="year" value="<?php echo $year?>"/>
    <input type="submit" value="判斷閏年" /><br />
    <?php
        if ($isLeap) {
            echo '閏年';
        } else {
            echo '平年';
        }
        ?>
</form>
