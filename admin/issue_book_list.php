<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$unid = "";
    $bookname = "";
    $bookauthor = "";
    $issuedate = "";
    $no_of_days = "";
    $price = "";
	$query = "select * from issued_books";
?>

<!DOCTYPE html>
<html>
    <body>
            <center><h4 style="background-color:aquamarine;height:50px;margin-top:2px">Issued Books</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-9">
				<form>
					<table class="table-bordered" width="900px" style="text-align: center">
						<tr>
                            <th>Unique ID</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Issue Date</th>
                            <th>No. of Days</th>
                            <th>Price</th>
							<th>Book Return</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
                            $unid= $row['unid'];
                            $bookname = $row['bookname'];
                            $bookauthor = $row['bookauthor'];
                            $issuedate = $row['issuedate'];
                            $no_of_days = $row['no_of_days'];
                            $price = $row['price_of_book'];
					?>
						<tr>
							<td><?php echo $unid;?></td>
                            <td><?php echo $bookname;?></td>
                            <td><?php echo $bookauthor;?></td>
                            <td><?php echo $issuedate;?></td>
                            <td><?php echo $no_of_days;?></td>
                            <td><?php echo $price;?></td>
							<td><button class="btn" name=""><a href="mark_return.php?bn=<?php echo $row['unid'];?>">Mark Return</a></button></td>
						</tr>
					<?php
						}
					?>	
				</table>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>

    </body>
</html>