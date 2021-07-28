<?php

Reverse($_POST['result']);

function Reverse($result){
    // THIS STRREV FUNCTION IS AUTOMATICALLY REVERSE THE INPUTTED STRING
    $reverse = strrev($result);

    echo 'The reverse of '. $result .' is '. $reverse;
};