
<html>
    <head>

    </head>
    <body>
        <label>Question 1</label>
        <br>
        <!-- CREATING A BUTTON FOR EVERY FUNCTIONS I WANT TO CALL FROM IMPORTED FILE ABOVE -->
        <!-- I AM CREATING A BUTTON WITH ID SO THAT I CAN DETERMINE WHICH FUNCTION I WOULD CALL -->
        <button id="whileloop"> while loop sum of all even numbers from 0-10</button>
        <button id="dowhileloop">Odd numbers from 0 to 10 using do while loop</button>
        <button id="fibonaccinumber">10 numbers in fabonacci sequence</button>

        <br>
        <br>
        <hr>

        <label>Question 2</label>
        <br>
        <button id="mostnumberoccurence">2A</button>
        <button id="sortarray">2B</button>
        <button id="notrepetitive">2C</button>
    </body>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        // I CREATED AN JS LIBRARY ONCLICK FUNCTION FOR EVERY BUTTON I CLICKED I WILL GO TO THAT ID NAMED ABOVE
        $('button').on('click',function(e) {
            $.ajax({
                type: "POST",
                url: "functions.php",
                data: {
                    'action': this.id
                }
            }).done(function( msg ) {
                // I AM GETTING THE RETURN FOR EVERY FUNCTION THAT WAS CALLED THIS IS ALSO AN CALLBACK FUNCTION TO GET THE RESPONSE FROM THAT FUNCTION
                // AFTER GETTING THAT RESPONSE I WILL ALERT ON THE BROWSER WHAT IS THE OUTPUT
                alert(msg);
            });
        });
    </script>
</html>