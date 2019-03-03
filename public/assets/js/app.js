


 $(document).ready(function(){
      $('.selectpicker').selectpicker();
   $('.bs-searchbox input').change().keyup(function(){
     var name;
     name = $(this).val();
     if(name != ' ' && (!name == ''))
     {
       $.ajax({
             headers:
             {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             type: "POST",
             url: ajaxlink,
             data:
             {
                 searchkey: name
             },
             success: function(arr)
             {
                 $('#ajax-select .with-ajax option').remove();

                 arr.forEach(function(arr1)
                 {
                      console.log(arr1);
                    options = '<option>'+arr1['arName']+'</option>';
                    $('#ajax-select select').append(options);
                 });
                 $('.selectpicker').selectpicker('refresh');
                 // content = '<li class="selected active"><a role="option" aria-disabled="false" tabindex="0" class="selected active" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">'+html+'</span></a></li>';
                 // $('#ajax-select .dropdown-menu .open .inner').html(content);
             }
         });
     }
   });
     function changeStatus()
     {
         var getstatus = ;
         
         if(getatatus == '1')
             {
                  $.ajax({
             headers:
             {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             type: "POST",
             url: ajaxlink,
             data:
             {
                 searchkey: name
             },
             success: function(arr)
             {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
             }
         });
             }
         else
             {
                 
             }
     }
 });
