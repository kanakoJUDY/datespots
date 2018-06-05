<?php
    date_default_timezone_set('Asia/Tokyo');
    $now_hour = (int)date("H");
    function greeting($hour) {
        $result = "";
        if (6 <= $hour && $hour < 12) {
            $result = "おは";
        }
        elseif (12 <= $hour && $hour < 18) {
            $result = "こんにちは～";
        }
        else {
            $result = "こんばんは";
        }
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <ul>
            <?php for($i = 1; $i < 10; $i++) { ?>
                <li><?php print '3 x ' . $i . ' = ' . (3 * $i);?></li>
            <?php } ?>
        </ul>
    </body>
</html>

<?php
    $num = 1.2;
    var_dump($num);
?>
<?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?>