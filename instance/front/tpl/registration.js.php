<script type="text/javascript">
    $(document).ready(function() {
            
    });
    
      $("#username").blur(function()
        { 
           
            var username = $("#username").val();
            
            // condition for Username 
            if(username == "") 
            {
                $(".val_name").html("plz enter Username").css({"color":"red","font-style":"italic"});
               
            } 
            else
            {
               $.ajax({
                type:"post",
                dataType:'json',
                url:_U+"registration",
                data:{usernamecheck: username},
                success:function(r){
                  
                    if(r.msg == 1){
                        console.log('this is 1');
			   $(".val_name").html("Username already taken").css({"color":"red","font-style":"italic"});
			}
			else if(r.msg == 2)
			{
                            console.log('this is 2');
			  $(".val_name").html("").css({"color":"red","font-style":"italic"});
			}
                        
                }
            });
            }
            
            
            
        
        });
        

</script>
<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/jquery-1.10.2.js"></script>


<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">