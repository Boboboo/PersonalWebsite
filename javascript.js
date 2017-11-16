$("#signupform").submit(function(event){
    event.preventDefault();
    var datatopost=$(this).serializeArray();
    $.ajax({
        url:"signup.php",
        type:"POST",
        data:datatopost,
        success:function(data){
            if(data){
                $("#signupmessage").html(data);
            }
        },
        error:function(){
            $("#signupmessage").html("<div class='alert alert-warning'>There was an error with the Ajax Call.");
        }
    });
});