$(document).ready(function(){
    
    $("#form form").submit(function(){
        
        var action=$(this).attr('action');
        var name =$('#name').val();
        var FIRSTNAME=$('#FIRSTNAME').val();
        var mail =$('#email').val();
        var IDMESSAGE=$('#IDMESSAGE').val();
        
        
        $(".messages").slideUp('800',function(){
           $('input[type="submit"]').hide().after('<img src="images/giphy.gif" class="loader">'); 
           
           $.post(action,{
               name: name,
               FIRSTNAME: FIRSTNAME,
               mail:mail,
               IDMESSAGE:IDMESSAGE
           },function(data){
               $(".messages").html(data);
               $(".messages").slideDown('slow');
               $(".loader").fadeOut();
               $('input[type="submit"]').fadeIn();
               
               
               if(data.match('success') != null)
               {
                   $("#form form").slideUp();
               }
           });
        });
        return false;
    });
});


