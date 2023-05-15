<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$name = "";
    $bno ="";
	$author = "";
	$publisher = "";
	$genre = "";
    $price = "";
	$query = "select * from book";
?>

<!DOCTYPE html>
<html>
    <body>
     <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Book Detail</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
							<th>Name</th>
                            <th>Book Number</th>
							<th>Author</th>
							<th>Publisher</th>
                            <th>Genre</th>
                            <th>Price</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$name = $row['name'];
                            $bno = $row['bno'];
							$author = $row['author'];
                            $publisher = $row['publisher'];
                            $genre = $row['genre'];
                            $price = $row['price'];
					?>
						<tr>
							<td><?php echo $name;?></td>
                            <td><?php echo $bno;?></td>
                            <td><?php echo $author;?></td>
							<td><?php echo $publisher;?></td>
                            <td><?php echo $genre;?></td>
                            <td><?php echo $price;?></td>
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