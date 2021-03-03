<?php 

    $array = array("1", "2");

    

    function myFunc($arr) {
        $newArray = array();
        $count = count($arr) -1;
      for ($i = $count; $i > -1; $i--) {
          $value = $arr[$i];
          array_push($newArray,  $value);
      }

      var_dump($newArray);
    }
   

    myFunc($array);


?>