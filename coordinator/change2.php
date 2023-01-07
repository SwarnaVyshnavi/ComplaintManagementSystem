

<?php
include 'conn.php';
if($_POST['action']=='forwarded')
{
    mysqli_query($link, "UPDATE complaint SET access='H' WHERE sno = '$_POST[sno]'");
} else {
    mysqli_query($link, "UPDATE complaint SET status = '$_POST[action]' WHERE sno = '$_POST[sno]'");
}
            ?>
    
            
<script>
alert('successfully verified');
window.location='allcom.php';
</script>
        
