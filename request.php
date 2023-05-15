<?php
    require("us_common.php");
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-1"></div>
            <div class="col-md-8">
            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Available Books</h4><br></center>
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
								<td><button class="btn" name=""><a href="make_req.php?bn=<?php echo $row['bno'];?>">Request Book</a></button>
							</tr>
							<?php
						}
					?>
				</table>
			</div>

        </div>
    </body>
</html>