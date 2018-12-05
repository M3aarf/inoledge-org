 
 
 
 $(document).ready(function(){
      $('.selectpicker').selectpicker();
   $('.bs-searchbox input').keyup(function(){
      console.log($(this).val()); 
   });
 });
