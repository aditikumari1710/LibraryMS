<?php
    session_start();
    $connection= mysqli_connect("localhost:3060","root","");
    $db= mysqli_select_db($connection,"library");
    $query="update user set name='$_POST[name]', email='$_POST[email]', Mobile='$_POST[mobile]' where unid= $_SESSION[unid]";
    $query_run=mysqli_query($connection,$query);

?>

<script type="text/javascript">
    alert("Successfully Updated!")
    window.location.href="user_dashboard.php";
</script>