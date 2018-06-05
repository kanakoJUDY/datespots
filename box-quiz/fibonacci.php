<?php
$num = 0;
$num_pre = 0;
$num_pre_pre = 0;
$start = 1;

for ($i = 0; $i < 20; $i++) {
    if ($i==0) {
        $num = $start;
    }
    else {
        $num = $num_pre_pre + $num_pre;
    }
    $num_pre_pre = $num_pre;
    $num_pre = $num;
    print $num . PHP_EOL;
}
?>