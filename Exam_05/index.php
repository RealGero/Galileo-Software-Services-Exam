<html>
    <body>
      
       <input type="text" id="reverse"> 
        <button>Submit</button>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
        $('button').on('click' , function(e)
        {
            e.preventDefault()
            var result = $('#reverse').val()
            
            $.ajax({
                type: 'POST',
                url: 'functions.php',
                data:{
                    'result':result
                }
            }).done(function (msg){
                alert(msg)
            })
        })
           
        </script>
    </html>