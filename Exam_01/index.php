<html>
    <body>
        <!-- CREATING AN INPUT FOR USER  -->
        <label for="">Input text</label>
        <input type="text" id="palindrome" name="palindrome" >
        <button  type="submit">Check</button>   

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script>
        // WHEN THE USER CLICK THE BUTTON THE INPUT WITH THE ID OF PALINDROME WILL SEND THE VALUE
            $('button').on('click',function(e) {
            var sendPalindrome = $('#palindrome').val();
            
            $.ajax({
                // TYPE IS POST BECAUSE THIS IS SENDING A REQUEST WITH DATA TO THE FUNCTION THEN WAIT OR RESPONSE 
                type: "POST",
                url: "functions.php",
                // SEND THE VALUE OF INPUT TO FUNCTION.PHP
                data: {
                    'test': sendPalindrome
                }
            }).done(function( msg ) {   
                // DISPLAYING THE RESPONSE FROM FUNCTION.PHP
               alert(msg)
            });
        });
    </script>
    </html>