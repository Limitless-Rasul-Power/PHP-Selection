<?php

    require_once "autoDatas.php";   

    $make = $_POST['make'];

    if (is_array($autos[$make]) == false) {
        echo "<option selected disabled>Any</option>";
        return;
    }

    foreach ($autos[$make] as $model => $name) {                
        echo "<option value=".$name.">$name</option>";
    }

    // second way
    // $index = $_POST['index'];

    // if ($index == 0) {
    //     echo "<option selected disabled>Any</option>";
    //     return;    
    // }

    // $keys = array_keys($autos);

    // foreach ($autos[$keys[$index]] as $name) {                
    //     echo "<option value=".$name.">$name</option>";
    // }

?>