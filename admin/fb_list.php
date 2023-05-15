<?php
    require('common.php');
    $connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
	$id = "";
    $fb ="";
    $query = "select * from feedback";
?>

<!DOCTYPE html>
<html>
    <body>
     <center><h4 style="background-color:lightsteelblue;height:50px;margin-top:2px">User Feedback</h4><br></center>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<table class="table table-bordered table-striped" width="900px" style="text-align: center">
						<tr>
							<th>Sr.No.</th>
                            <th>Feedback</th>
						</tr>
				
					<?php
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)){
							$id = $row['id'];
                            $fb = $row['feedback'];
					?>
						<tr>
							<td><?php echo $id;?></td>
                            <td><?php echo $fb;?></td>
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