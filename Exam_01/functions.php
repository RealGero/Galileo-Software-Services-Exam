<?php
// THIS FUNCTION RECEIVES THE DATA FROM INDEX.PHP
Palindrome($_POST['test']);

function  Palindrome($test){
    // STRREV IS A FUNCTION THAT WILL CHECK THE STRING IF ITS REVERSIBLE TO READ OR IT IS A PALINDROME
    if(strrev($test) == $test){
    //   RESULT AFTER  CHECKING IF THE INPUTED IF IT WAS A PALINDROME
        echo $test . ' is a palindrome';
    }else{

        echo $test.  'is not a palindrome';
    }
}
