<?php
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$query = "delete from request_book where unid = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Request Approved successfully...");
	window.location.href = "request_list.php";
</script>
	