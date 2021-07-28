

<html>

<body>
  <form action="">
    <input type="text" value="" name="first_name">
    <input type="text" value="last_name" name="last_name" >
    <input type="date" id="birthday" name="birthday" value="birthday">  
    <label for="male">Male</label> 
    <input type="radio" id="male" name="gender" value="true">
    <label for="female">Female</label> 
    <input type="radio" id="female" name="gender" value="false">


    <label for="english">English</label>
    <input type="checkbox" id="English" >
    <label for="japanese">Japanese</label>
    <input type="checkbox" id="Japanese" >
    <label for="chinese">Chinese</label>
    <input type="checkbox" id="Chinese" >
  </form>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
   // I CREATED AN JS LIBRARY ONCLICK FUNCTION FOR EVERY BUTTON I CLICKED I WILL GO TO THAT ID NAMED ABOVE
  
            $.ajax({
                type: "GET",
                url: "function.php",
            }).done(function( msg ) {
                data = JSON.parse(msg)
                $('input[name="first_name"]').val(data.firstName)
                $('input[name="last_name"]').val(data.lastName)
                $('input[name="birthday"]').val(data.birthday)
                if(data.gender.male){
                  $('#male').prop("checked",true)
                }else{
                  $('#female').prop("checked",true)
                }
                if(data.knownLanguage){
                  lang = data.knownLanguage
                  for(x=0; x < lang.length; x++){
                    $('#'+lang[x]).prop('checked', true);
                  }
                
              
                }
                // console.log(data.knownLanguage);
            });
         
       

</script>

</html>