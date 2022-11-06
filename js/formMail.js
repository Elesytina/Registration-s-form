$("#sendMail").on("click", function(){
    var email=$("#email").val().trim();
    var name=$("#name").val().trim();
    var pass=$("#pass").val().trim();
    var pass_repeat=$("#pass_repeat").val().trim();
    var lastName=$("#lastName").val().trim();
    
    if(email==""){
        $("#errorMess").text("Input email");
        return false;
    }
    else if(name==""){
         $("#errorMess").text("Input name");
        return false;
    }
    else if(lastName==""){
         $("#errorMess").text("Input lastname");
        return false;
    }
   else if(pass==""){
         $("#errorMess").text("Input password");
        return false;
    }
    else if(pass_repeat==""){
         $("#errorMess").text("Repeat password");
        return false;
    }
    else if(pass!==pass_repeat){
        $("#errorMess").text("Passwords aren't equals");
        return false;
    }
               
    $("#errorMess").text("");
    $.ajax({
        url:'ajax/mail.php',
        type:'POST',
        cache:false,
        data:{'name':name,'lastName':lastName, 'email':email, 'pass':pass},
        dataType:'html',
        beforeSend: function(){
            $('#sendMail').prop("disable",true);
        },
        success: function(data){
          if(!data)    
            alert("Data not sent");
          else
            $("#registration").trigger("reset");
            $('#sendMail').prop("disable",false);
        }
    });
});



