<?php 
    $urlCompleta = $_SERVER['REQUEST_URI'];
    echo "debug " . $urlCompleta . "<br>";

    $urlLimpa = explode('?', $urlCompleta)[0];
    echo "debug " . $urlLimpa . "<br>" ;
    ?>