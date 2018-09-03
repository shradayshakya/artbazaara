$(function(){
    $('.loginMessage').hide();

    $email = $("[name='email']");
    $pword = $("[name='pword']");
    
    $('#loginForm').on("submit",function(event){
    
        if($email.val() == ''){   
            event.preventDefault();
            $('#emailMessage').show();
        }
        else{
           $('#emailMessage').hide();
        }   

        if($pword.val() == ''){
            event.preventDefault();
            $('#pwordMessage').show();
        }
        else{
            $('#pwordMessage').hide();
        }
    });

});