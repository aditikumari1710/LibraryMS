<?php
	session_start();
    ob_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin Login</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                            <div class="navbar-header">
                                    <img src="ad.png" width="30px" height="30px" class="img-thumbnail">
                                    <a class="navbar-brand" href="../signup.php">Online Library<i id="subspt">  one stop for all your book cravings</i></a>
                            </div>
                    
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item rightnav">
                            <a class="nav-link" href="ad_register.php">Admin Register |</a>
                        </li>
                        <li class="nav-item rightnav">
                            <a class="nav-link" href="../login.php">User Login</a>
                        </li>
                    </ul>
                </div>
        </nav>

        <div class="row">
            <div class="col-md-3 col-sm-12" id="side-info">
                    <b>Who are we</b>
                    <p class="li-item">We are an open source library. We have book accross all genres written by greatest authors of all reins.You can quench your reading thrist here!!!</p>
                    <b>What we provide</b>
                    <ul type="disc">
                        <li class="li-item">
                            24x7 available
                        </li>
                        <li class="li-item">
                            Easy access
                        </li>
                        <li class="li-item">
                            Books on all genre
                        </li>
                        <li class="li-item">
                            Latest Newsletters
                        </li>
                        <li class="li-item">
                            Regional Books
                        </li>
                        <li class="li-item">
                            Discussion platform
                        </li>
                    </ul>
            </div>
            <div class="col-lg-3"></div>
            <div class="col-lg-5 col-sm-12">
            <br><h3>Admin Login Form</h3>
            <form action="" method="post">
                
                
                <div class="form-group">
                    <label for="email">Email ID *</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button class="btn btn-primary" type="submit" name="login">Login</button>
                |
                <a href="ad_register.php">Not Registerd Yet?</a>
            </form>

            <?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost:3060","root","");
					$db = mysqli_select_db($connection,"library");
					$query = "select * from admin where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
                                $_SESSION['unid'] =  $row['unid'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><span class="alert-danger">Wrong Password</span>
								<?php
							}
						}
					}
				}
                ob_end_flush();
			?>


            </div>
        </div>
        

    </body>
</html>

