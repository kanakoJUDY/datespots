<?php

function clapGame() {
    for($i = 1; $i <= 50; $i++) {
        if($i%7 == 0) {
            print "clap!,";
        }
        else if($i%10 == 7) {
            print "clap!,";
        }
        else {
            print $i.",";
        }
    }
}

clapGame();

?>



<?php

function showMsgBox($message) {
    $len = strlen($message);
    print $message;
    
}

showMsgBox('This is a sample.');

?>