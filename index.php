<?php
$myArr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$count = count($myArr);
$t = 0;
for($i = 0; $i < $count; $i++) {
    for($j = $i+1; $j < $count; $j++) {
        if($myArr[$j] < $myArr[$i]) {
            $t = $myArr[$j];
            $myArr[$j] = $myArr[$i];
            $myArr[$i] = $t;
        }
    }
}
for($i=0;$i<$count;$i++) {
    echo $myArr[$i]." ";
}
