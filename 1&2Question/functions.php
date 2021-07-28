<?php

// THIS IS THE SWITCH CASE, THAT FUNCTIONS RETURN THEIR REQUEST WHO EVER CALLED BY THE AJAX

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'whileloop':
            whileloop();
            break;
        case 'dowhileloop':
            dowhileloop();
            break;
        case 'fibonaccinumber':
            fibonaccinumber();
            break;
        case 'mostnumberoccurence':
            mostnumberoccurence();
            break;
        case 'sortarray':
            sortarray();
            break;
        case 'notrepetitive':
            notrepetitive();
            break;
    }
}

// THIS IS THE WHILE LOOP FUNCTION THIS WILL TRIGGER IF THE BUTTON WITH THE ID OF "whileloop" WAS CLICKED
function whileloop(){
    $index = 0;
    $total = 0;
    
    while($index <= 10){
        // IM TELLING THIS THAT FOR EVERY NUMBER WHO IS DIVIDED BY TWO RESULT IS ZERO , IN OTHER WORD CALLED MODULO
        if($index %2 == 0)
        {
            //  INITIALIZING TOTAL VARIABLE FOR EVERY NUMBERS WHO HAVE MODULO BY 2 EQUALS TO ZERO
            $total = $total + $index;
           
        }
        // AFTER EVERY CHECKING THE IF CONDITION THE INDEX WILL INCREMENT BY 1
        $index++;
    }
    // PRINTED THE TOTAL SUM 
    echo "sum of all even numbers from 0-10 is ". $total;
}



function dowhileloop(){
    $index = 0;
    $oddnumbers = "";
      // DO WHILE IS, IT WILL RUN FIRST BEFORE LOOPING

    do {
          // CHECKING IF THE INDEX VARIABLE IS ODD NUMBERS
        if(($index % 2) != 0){
              // DISPLAYING ALL ODD NUMBERS
           echo $index . ' ';
        }
         // INCREMENTING INDEX VARIABLE FOR  WHILE LOOP TO BE TRIGGER
        $index++;
    }
    while($index <= 10);

    // echo "All odd numbers from 0 to 10 are ". $oddnumbers;
}

// MAKING A FUNCTION THAT WILL CALL THE FABONACCISOLVER FOR EVERY NUMBER UNTIL 10
function fibonaccinumber(){
    for ($index = 0; $index < 10; $index++){  
        echo fabonaccisolver($index),' ';
    }
}

function fabonaccisolver($num){
    // IF THE VALUE OF NUM IS 0 RETURN 0
    if($num == 0):
        return 0;    
     // IF THE VALUE OF NUM IS 1 RETURN 1
    elseif($num == 1):
        return 1;
    else:
        // IF NUM IS GREATER THAN 1 WHICH IS 2 UP THIS WILL TRIGGER  OPERATION
        // FOR EXAMPLE NUM IS EQUAL TO 2, FIRST 2 WILL DEDUCTED BY 1 THEN ADDED BY 2-2 SO RESULT IS 1
        return (fabonaccisolver($num-1) + fabonaccisolver($num-2));
    endif;
}

// Question 2 -----------------------------------------------------------------------------

function mostnumberoccurence(){
    $arraynames = ['Marvin', 'Marco' ,'Marvin','Marvin', 'Marco', 'Marco', 'Marvin', 'Christian'];

    // USORT FUNCTION IS A FUNCTION THAT WILL SORT ALL VALUES IN THAT ARRAY USING A COPMPARISON FUNCTION
    usort($arraynames, function($a, $b) {
        return strlen($a) - strlen($b) ?: strcmp($a, $b);
    });

    print_r($arraynames);
}

function sortarray(){
    $newarraydata = [];
    $arraynumbers = [9863, 7127, 2020, 80, 131, 55, 100];
    // SORTING THE ARRAY VALUES IN ARRAYNUMBERS
    sort($arraynumbers);

    foreach($arraynumbers as $value){
        // PICKING ALL THE ODD NUMBERS INSIDE OF THE ARRAYNUMBERS
        if(($value % 2) != 0){
            // AND IF IT IS ODD NUMBER THEN PUT SAVE IN NEW ARRAY AND ROUND IT INTO NEAREST TENS
            array_push($newarraydata, round($value / 10) * 10);
        }
        else{
            // THEN IF THE VALUE IS EVEN NUMBERS WILL AUTOMATICALLY PUSH TO NEW ARRAY
            array_push($newarraydata, $value);
        }
    }
    // SORT THE NEW ARRAY OF DATA
    sort($newarraydata);
    print_r($newarraydata);
}


function notrepetitive(){
    $arraynames = ['red', 'blue', 'black', 'red', 'blue', 'blue', 'red', 'gold'];
    // COUNTING THE INSIDE THE ARRAY WITH SAME VALUE 
    $notrepetitive = array_count_values($arraynames);

    foreach($notrepetitive as $key => $value){
        // THEN IF THE RESULT IS ONLY REPEAT IT ONCE THEN RETURN TRUE ELSE RETURN FALSE
        if($value == 1){
            echo $key . ' ';
        }
    }

}


?>