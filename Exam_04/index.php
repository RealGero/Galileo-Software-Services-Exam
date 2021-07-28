<html>
    <body>
    <!-- PUTTING  TWO INPUT FIELDS WITH THE TYPE OF DATE -->
    Date 1
    <input type="date" id="date1">
    Date 2
    <input type="date" id="date2">
    <button>Go</button>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
   <script>
       $('button').on('click', function(){
           
            $.ajax({
                type:'POST',
                url:'functions.php',
                data:{
                //   WHEN THE BUTTON WAS CLICKED IT WILL PASS A VALUE TO FUNCTIONS.PHP
                    'date1': $('#date1').val(),
                    'date2': $('#date2').val()
                }
            }).done(function(msg){
                 // GETTING THE RETURN FOR EVERY FUNCTION THAT WAS CALLED THIS IS ALSO AN CALLBACK FUNCTION TO GET THE RESPONSE FROM THAT FUNCTION
                // AFTER GETTING THAT RESPONSE I WILL ALERT ON THE BROWSER WHAT IS THE OUTPUT
                alert(msg)
            })
       })
    </script>
</html>