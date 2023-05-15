<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$name = "";
	$genre = "";
	$query = "select * from book order by genre";
?>

<!DOCTYPE html>
<html>
    <body>

            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Genre Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
                            <th>Genre</th>
							<th>Name</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $genre = $row['genre'];
							$name = $row['name'];
					?>
						<tr>
                            <td><?php echo $genre;?></td>
							<td><?php echo $name;?></td><td>
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