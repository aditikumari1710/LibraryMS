<?php
	require('common.php');
?>

<!DOCTYPE html>
<html>
    <body>
		<center><h4>Approve Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">

						<label for="book_name">Unique Id:</label>
						<select class="form-control" name="unid">
							<option>-Select User Id-</option>
							<?php  
								$connection = mysqli_connect("localhost:3060","root","");
								$db = mysqli_select_db($connection,"library");
								$query = "select unid from request_book";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['unid'];?></option>
									<?php
								}
							?>
						</select>
					</div>

					<div class="form-group">
						<label for="book_name">User Name:</label>
						<select class="form-control" name="uname">
							<option>-Select User-</option>
							<?php  
								$connection = mysqli_connect("localhost:3060","root","");
								$db = mysqli_select_db($connection,"library");
								$query = "select username from request_book";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['username'];?></option>
									<?php
								}
							?>
						</select>
					</div>

					<div class="form-group">
						<label for="book_name">Book Name:</label>
						<select class="form-control" name="book_name">
							<option>-Select Book-</option>
							<?php  
								$connection = mysqli_connect("localhost:3060","root","");
								$db = mysqli_select_db($connection,"library");
								$query = "select bname from request_book";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['bname'];?></option>
									<?php
								}
							?>
						</select>
					</div>

                    <div class="form-group">
						<label for="bauthor">Author:</label>
						<select class="form-control" name="bauthor">
							<option>-Select author-</option>
							<?php  
								$connection = mysqli_connect("localhost:3060","root","");
								$db = mysqli_select_db($connection,"library");
								$query = "select author from request_book";
								$query_run = mysqli_query($connection,$query);
								while($row = mysqli_fetch_assoc($query_run)){
									?>
									<option><?php echo $row['author'];?></option>
									<?php
								}
							?>
						</select>
					</div>

					<div class="form-group">
						<label for="issue_date">Issue Date:</label>
						<input type="date" name="issue_date" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="nodays">Number of days:</label>
						<input type="text" name="nodays" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="price">Price:</label>
						<input type="text" name="price" class="form-control" required>
					</div>
                    <button type="submit" name="issue_book" class="btn btn-success">Approve Book</button>
				</form>

			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into issued_books values('$_POST[unid]','$_POST[uname]','$_POST[book_name]','$_POST[bauthor]','$_POST[issue_date]','$_POST[nodays]','$_POST[price]')";
		$query_run = mysqli_query($connection,$query);
	}
?>
