<?php
    require("us_common.php");
    $connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
    $bname="";
    $aname="";
	$query = "select * from book where bno=$_GET[bn]";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
            $bname= $row['name'];
            $aname= $row['author'];
    }
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="col-md-1"></div>
            <div class="col-md-5 col-sm-12">
                <h4 style="background-color:aquamarine;height:50px;margin-top:10px"><center>Fill details to make request</center></h4>
                <form action="" method="post">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Date *</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Number of days *</label>
                    <input type="text" name="days" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Unique ID *</label>
                    <input type="text" name="unid" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success" name="save">Make Request</button>
                </form>
            </div>
        </div>

    </body>

<?php
    if(isset($_POST['save'])){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into request_book values ('$_GET[bn]','$_POST[unid]','$_POST[name]','[$bname]','[$aname]','$_POST[date]','$_POST[days]')";
		$query_run = mysqli_query($connection,$query);
        ?>
        <script type="text/javascript">
            alert("Request made Successfully");
            window.location.href = "user_dashboard.php";
        </script>
        <?php
    }
?>
</html>
