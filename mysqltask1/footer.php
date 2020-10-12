<?php
?>
</form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script>
    //jquery for checking the Password and Re-password matches or not.
    jQuery('input[name="re-password"]').blur(function(){
        var password = jQuery('input[name="password"]').val();
        var repassword = jQuery('input[name="re-password"]').val();
        if(repassword != password){
            alert('Please enter the same password.');
            jQuery('input[name="re-password"]').val('');
        }
    });

</script>
</body>
</html>