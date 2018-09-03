$(function(){
    $formMessege = $(".formMessage");
    $formMessege.hide();

    validate();
});


function validate(){
    $firstName = $("[name = 'fname']");
    $lastName = $("[name = 'lname']");
    $email = $("[name = 'email']");
    $pword = $("[name = 'pword']");
    $cpword = $("[name = 'cpword']");
    $phone = $("[name = 'phone']");
    $address = $("[name = 'address']");

    $("#registrationForm").on('submit', function(e){
        if($firstName.val() ==''){
            e.preventDefault();
            $('#firstNameMessage').show();
        }
        else{
            $('#firstNameMessage').hide();
        }
        
        if($lastName.val() ==''){
            e.preventDefault();
            $('#lastNameMessage').show();
        }
        else{
            $('#lastNameMessage').hide();   
        }

        if(!emailValidate($email.val())){
            e.preventDefault();
            $('#emailMessage').show();
        }
        else{
            $('#emailMessage').hide();
        }

        if($pword.val().length < 8){
            e.preventDefault();
            $('#passwordMessage').show();
        }
        else{
            $('#passwordMessage').hide();
        }

        if($pword.val() != $cpword.val()){
            e.preventDefault();
            $('#confirmPasswordMessage').show();
        }
        else{
            $('#confirmPasswordMessage').hide();
        }


        if(!phoneValidate($phone.val())){
            e.preventDefault();
            $('#phoneMessage').show();
        }
        else{
            $('#phoneMessage').hide();
        }

        if($address.val() ==''){
            e.preventDefault();
            $('#addressMessage').show();
        }
        else{
            $('#addressMessage').hide();   
        }
    });
}

function phoneValidate(phone){
    if(phone == ''){
        return false;
    }
    else if(isNaN(phone)){
        return false;
    }
    else if(phone.length < 7){
        return false;
    }
    else{
        return true;
    }
}


function emailValidate(email){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(mailformat)){
        return true;
    }
    else{
        return false;
    }
}