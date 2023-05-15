<?php
    $connection= mysqli_connect("localhost:3060","root","");
    $db= mysqli_select_db($connection,"library");

    $query_var= "insert into user values ('$_POST[unid]','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mobile]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Registration Successful, You can now login")
    window.location.href="login.php";
</script>