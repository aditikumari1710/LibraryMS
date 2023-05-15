<?php
    $connection= mysqli_connect("localhost:3060","root","");
    $db= mysqli_select_db($connection,"library");

    $query_var= "insert into book values (null,'$_POST[bno]','$_POST[name]','$_POST[aname]','$_POST[publish]','$_POST[genre]','$_POST[bprice]')";
    $query_run= mysqli_query($connection,$query_var);
?>
<script type="text/javascript">
    alert("Book Added Successfully")
    window.location.href="admin_dashboard.php";
</script>