// binding all the functions to dom
$(document)
.on("submit","form.js-register", function(event)
{
    event.preventDefault();
    var _form= $(this);

    var _error=$('.js-error',_form);

    
    var dataObj={
        email:$("input[type='email']",_form).val(),
        password:$("input[type='password']",_form).val()

    }
    
    if(dataObj.email.length<6){
        _error
        .text("Please enter a vaild email address")
        .show();
    console.log(dataObj.email.length)
    }

    else if(dataObj.password.length<11)
    {
        _error
        .text("Please enter a password that is 11 charaters long")
        .show();
        return false
   
    }
    
    _error.hide();
    $.ajax({
        type:'POST',
        url:'ajax/register.php',
        data:dataObj,
        dataType:'json',
        async:true,
    })
    .done(function ajaxDone(data){
        console.log(data);
        if(data.redirect!==undefined)
        {
            window.location=data.redirect;
        }
    })
    .fail(function ajaxFailed(e){
        console.log(e)
    })
    .always(function ajaxAlwaysDoThis(data){
        console.log('Always')
    })
    return false

})