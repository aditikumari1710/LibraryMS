<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$name = "";
	$email = "";
	$unid = "";
	$mobile = "";
	$query = "select * from admin";
?>

<!DOCTYPE html>
<html>
    <body>

            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Admin Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Name</th>
							<th>Mobile</th>
							<th>Email</th>
                            <th>Unique ID</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$name = $row['name'];
							$mobile = $row['mobile'];
                            $email = $row['email'];
                            $unid = $row['unid'];
					?>
						<tr>
							<td><?php echo $name;?></td><td>
                            <?php echo $mobile;?></td>
							<td><?php echo $email;?></td>
                            <td><?php echo $unid;?></td>
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