<?php
    require('common.php');
    $connection = mysqli_connect("localhost:3060","root","");
	$db = mysqli_select_db($connection,"library");
    $name="";
    $email="";
    $mobno="";
    $unid="";
	$query = "select * from admin where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $name= $row['name'];
        $email= $row['email'];
        $mobno= $row['mobile'];
        $unid= $row['unid'];
    }



?>
<!DOCTYPE html>
<html>
    <body>
            <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                <strong>Admin Details</strong>
                   <form id=prof-form>
                        <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" class="form-control" value="<?php echo $email;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Mobile Number:</label>
                            <input type="text" class="form-control" value="<?php echo $mobno;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label>Unique Id:</label>
                            <input type="text" class="form-control" value="<?php echo $unid;?>" disabled>
                        </div>
                   </form>
            </div>
            </div>

    </body>
</html>