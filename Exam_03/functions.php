<?php
// CREATED A FUNCTION THAT HAVING A DATA THAT WAS PASSED ON FROM INDEX PHP
resultFibonacci($_POST['action']);

// CREATING A FUNCTION THAT CHECKING IF IT IS A PERFECT SQUARE  AND IF IT IS A PERFECT SQUARE IT WILL RETURN TRUE
function isPerfectSquare($num)
    {
    $s = (int)(sqrt($num));
    return ($s * $s == $num);
    }
// THIS FUNCTION WAS RECEIVING FROM THE INDEX PHP
function resultFibonacci($action){

        for($x=1;$x<=$action;$x++){
            // PASSING THE VALUE X TO THE ISPERFECTSQUARE FUNCTION , EITHER OF THEM RETURN TRUE THEN THE 
            // RESULT IS A FIBONACCI ELSE NOT A FIBONACCI
            $result =  isPerfectSquare(5 * $x * $x + 4) || isPerfectSquare(5 * $x * $x - 4);

            if($result)
                echo $x . " is a Fibonacci Number \n";
            else
                echo $x . " is a not Fibonacci Number \n" ;
        }
}





