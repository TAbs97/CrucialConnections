$(function() {      
   
    $("#Code").validate({
      rules:{
        selectCode:{
          required:true,
          selectCode:true
        },
        lesson:{
          required:true,
          lesson:true
        }
  
      },
    }); 
  });