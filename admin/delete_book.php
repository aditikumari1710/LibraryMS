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
							<th>Author</th>
							<th>Category</th>
							<th>Genre</th>






							
							<th>Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
						$connection = mysqli_connect("localhost:3060","root","");
						$db = mysqli_select_db($connection,"library");
						$query = "select * from book";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							?>
							<tr>
								<td><?php echo $row['name'];?></td>
								<td><?php echo $row['author'];?></td>
								<td><?php echo $row['publisher'];?></td>
								<td><?php echo $row['genre'];?></td>
								<td><?php echo $row['price'];?></td>
								<td><button class="btn" name=""><a href="bookdelete.php?bn=<?php echo $row['bno'];?>">Delete</a></button>
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