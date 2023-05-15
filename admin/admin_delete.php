<?php
	require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>

            <div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Mobile Number</th>
							<th>Unique Id</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost:3060","root","");
						$db = mysqli_select_db($connection,"library");
						$query = "select * from admin";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['email'];?></td>
								<td><?php echo $row['password'];?></td>
								<td><?php echo $row['mobile'];?></td>
								<td><?php echo $row['unid'];?></td>
								<td><button class="btn" name=""><a href="delete_ad.php?bn=<?php echo $row['unid'];?>">Delete</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
</body>
    </body>
</html>