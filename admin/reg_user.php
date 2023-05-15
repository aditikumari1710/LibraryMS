<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
    $unid ="";
	$name = "";
	$email = "";
	$password = "";
	$mobile = "";
	$query = "select * from user";
?>

<!DOCTYPE html>
<html>
    <body>

            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Active Users Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
                            <th>Unique ID</th>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
                            <th>Paaword</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $unid= $row['unid'];
							$name = $row['name'];
							$email = $row['email'];
							$mobile = $row['Mobile'];
                            $password = $row['password'];
					?>
						<tr>
                            <td><?php echo $unid;?></td>
							<td><?php echo $name;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $mobile;?></td>
                            <td><?php echo $password;?></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>

    </body>
</html>