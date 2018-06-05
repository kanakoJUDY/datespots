<?php
function sum($a, $b) {
    $result = 0;
    for ($i = $a; $i <= $b; $i++) {
        $result = $result + $i;
    }
    echo $result . PHP_EOL;
    if ($result > 900) {
        echo '900より大きい';
    }
    else {
        echo '900以下';
    }
}
sum (9, 50);
?>
