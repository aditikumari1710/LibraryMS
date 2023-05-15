<?php
	require('common.php');
	$connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$book_name = "";
	$book_no = "";
	$author = "";
	$publisher = "";
    $genre = "";
	$price = "";
	$query = "select * from book where bno = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$book_name = $row['name'];
		$book_no = $row['bno'];
		$author = $row['author'];
        $publisher = $row['publisher'];
		$genre = $row['genre'];
		$price = $row['price'];
	}
?>

<!DOCTYPE html>
<html>
    <body>
<center><h4>Edit Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="mobile">Book Number:</label>
						<input type="text" name="book_no" value="<?php echo $book_no;?>" class="form-control" disabled required>
					</div>
					<div class="form-group">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" value="<?php echo $book_name;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Author:</label>
						<input type="text" name="author" value="<?php echo $author;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Publisher:</label>
						<input type="text" name="publisher" value="<?php echo $publisher;?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Genre:</label>
						<input type="text" name="genre" value="<?php echo $genre;?>" class="form-control" required>
					</div>
                    <div class="form-group">
						<label for="mobile">Book Price:</label>
						<input type="text" name="price" value="<?php echo $price;?>" class="form-control" required>
					</div>
					<button type="submit" name="update" class="btn btn-primary">Update Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>
<?php
	if(isset($_POST['update'])){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "update book set name = '$_POST[book_name]',author = '$_POST[author]', publisher = '$_POST[publisher]',genre = '$_POST[genre]',price = '$_POST[price]' where bno = $_GET[bn]";
		$query_run = mysqli_query($connection,$query);
    
        ?>
        <script type="text/javascript">
            alert("Book updated");
            window.location.href = "edit_book.php";
        </script>
        <?php
    }
		
?>


	