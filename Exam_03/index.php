<html>
    <body>
  
    <input type="text" id="fibonacci">
   
    
    <button>Go</button>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
   <script>
       $('button').on('click', function(){
             // I CREATED AN JS LIBRARY ONCLICK FUNCTION FOR EVERY BUTTON I CLICKED I WILL GO TO THAT ID NAMED ABOVE
            $.ajax({
                type:'POST',
                url:'functions.php',
                data:{
                    'action': $('#fibonacci').val(),
                   
                }
            }).done(function(msg){
                // I AM GETTING THE RETURN FOR EVERY FUNCTION THAT WAS CALLED THIS IS ALSO AN CALLBACK FUNCTION TO GET THE RESPONSE FROM THAT FUNCTION
                // AFTER GETTING THAT RESPONSE I WILL ALERT ON THE BROWSER WHAT IS THE OUTPUT
                alert(msg)
            })
       })
    </script>
</html>