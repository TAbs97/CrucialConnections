$(function() {      
   
  $("#Loginform").validate({
    rules:{
      Email:{
        required:true,
        email:true
      },
      password:{
        required:true,
        password:true
      }

    },
  }); 
});