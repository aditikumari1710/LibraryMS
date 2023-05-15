<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Login Form</title>

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
                                    <a class="navbar-brand" href="admin_dashboard.php">Online Library<i id="subspt">  one stop for all your book cravings</i></a>
                            </div>
                    
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="ad_view_profile.php">View Profile</a>
                                <a class="dropdown-item" href="ad_edit_profile.php">Edit Profile</a>
                                <a class="dropdown-item"  href="ad_change_password.php">Change Password</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
        </nav>
        
        <div id="namediv">
             <span><strong>Welcome Admin:
             <?php
                echo $_SESSION['name'];
                ?>
             </strong></span>
             <span><strong>  |  Email:
             <?php
                echo $_SESSION['email'];
                ?>
             </strong></span>
        </div>
        
        <div class="row">
        <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg" style="background-color:darksalmon;margin-top: 1px">
                <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
                    <ul class="nav navbar-nav navbar-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Book</a>
                            <div class="dropdown-menu">
                                <a href="add_book.php" class="dropdown-item">Add Book</a>
                                <a href="edit_book.php" class="dropdown-item">Edit Book</a>
                                <a href="delete_book.php" class="dropdown-item">Delete Book</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Interaction</a>
                            <div class="dropdown-menu">
                                <a href="admin_add.php" class="dropdown-item">Add Admin</a>
                                <a href="admin_delete.php" class="dropdown-item">Delete Admin</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown">View</a>
                            <div class="dropdown-menu">
                                <a href="reg_book.php" class="dropdown-item">View Books</a>
                                <a href="reg_user.php" class="dropdown-item">View Users</a>
                                <a href="reg_admin.php" class="dropdown-item">View Admins</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="issue_book.php" class="nav-link">Approve Book</a>
                        </li>     
                </ul>
                </nav>
            </div>
            </div>
    </body>
</html>