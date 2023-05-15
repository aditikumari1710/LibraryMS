<?php
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "delete from admin where unid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Book Deleted successfully...");
	window.location.href = "admin_dashboard.php";
</script>
	