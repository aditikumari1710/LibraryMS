<?php
    require("us_common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                width:250px;
                font-weight: bold;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                text-align: right;
            }
        </style>
    </head>
<body>
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h1>Feedback</h1>
        <form action="" method="post" style="margin-top:60px">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your feedback" name="fb" style="height:200px">
            </div>
            <button type="submit" name="sub" class="btn btn-success" style="float:right">Submit</button>
        </form>
    </div>
</body>
</html>
<?php
    if(isset($_POST['sub']))
    {
        $connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$query = "insert into feedback values(null,'$_POST[fb]')";
		$query_run = mysqli_query($connection,$query);
        ?>
        <script>alert("Feedback submitted successfully")
        window.location.href="user_dashboard.php";
        </script>
        <?php
    }
?>
