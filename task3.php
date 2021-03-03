<?php 

    $txt = "";
    $open = "";
    $close = "";
    $num = 0;


    switch ($num) {
        case 0:
            $open = "<div>";
            $close = "</div>";
            $txt = "0 is the number";
            break;
        case 1:
            $open = "<h1>";
            $close = "</h1>";
            $txt = "1 is the number";
            break;
        case 2:
            $open = "<span>";
            $close = "</span>";
            $txt = "2 is the number";
            break;
    }

    echo $open.$txt.$close;

?>