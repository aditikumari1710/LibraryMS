
<?php
	session_start();
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$password = "";
	$query = "select * from user where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['oldpassword']){
		$query = "update user set password = '$_POST[newpassword]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
		?>
		<script type="text/javascript">
			alert("Password Updated");
			window.location.href = "user_dashboard.php";
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("Invalid Old Password, Try Again");
			window.location.href = "change_password.php";
		</script>
		<?php
	}
?>