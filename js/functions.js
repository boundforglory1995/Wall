 $(document).ready(function(){
 

 


     var max_fields      = 30; //maximum input boxes allowed

    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $('.input_fields_wrap').append('<div class="form-group"><input type="text" id="generatedinput" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $('.input_fields_wrap').on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })



});


               


   
