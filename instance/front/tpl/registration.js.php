<script type="text/javascript">
    
    function sendmail()
    {
      
        
        $("#sbt_btn").html("Please wait");
        showWait();
        $.ajax({
            url:_U+'registration',
            data:{reg:1},
            success:function(r){
                hideWait();       
                alert("Thank you!")
               // window.location.href="home";
            }
        });
    }

</script>



<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">