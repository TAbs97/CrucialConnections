$(function() {

  $("#SignUp").validate({
    rules:{
      Email:{
        required:true,
        email:true
      },
      firstname:{
        required:true,
        lettersonly:true
      },
      surname:{
        required:true,
        lettersonly:true
      },
      username:{
        required:true,
        lettersonly:true
      },
      password:{
        required:true,
        password:true
      },
      
      c_password:{
        required:true,
        password:true,
        equalTo:"c_password"
      }
      
      
    }
  });

  
})