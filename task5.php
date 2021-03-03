<?php 

    $array = array("helo", "whatsup", "alla", "is", "good");

    foreach($array as $value) {
        $a = strpos($value, 'a');

        if ($a !== false) {
            echo 'the position of a letter is: '.$a.' => '.$value.'<br>';
        }else {
            echo 'no a letter in => '.$value.'<br>';
        }

        
    }


?>