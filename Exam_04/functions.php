<?php
resultDate($_POST['date1'],$_POST['date2']);

// RESULTDATE FUNCTION RECEIVES ALL DATA FROM INDEX.PHP
function resultDate($date1,$date2){
  
    // THE RECEIVE DATE SAMPLE IS 2011-10-3 DATE_CREATE FUNCTION WILL TRANSFORM IT TO 2011/10/3 SO 
    // THAT DATE_DIFF WILL TRIGGERED FUNCTION THAT WILL AUTOMATICALLY CALCULATE THE DIFFERENCE OF INPUTTED DATE
    $date1=date_create($date1);
   
    $date2=date_create($date2);
    
    $diff=date_diff($date2,$date1);
    echo $diff->format("%Y years %m months %d days");

}

