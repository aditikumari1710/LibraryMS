<?php
    $connection= mysqli_connect("localhost:3060","root","");
    $db= mysqli_select_db($connection,"library");

    $query_var= "insert into admin values (null,'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[mob]','$_POST[unid]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Book Added Successfully")
    window.location.href="admin_dashboard.php";
</script>