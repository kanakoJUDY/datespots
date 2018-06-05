<?php
$numbers = range(9, 50);
$sum = array_sum($numbers);
echo $sum . PHP_EOL;

if ($sum > 900) {
    print '900より大きい';
}
else {
    print '900以下';
}
?>