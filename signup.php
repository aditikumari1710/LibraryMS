<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Login Form</title>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="css/responsive.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                            <div class="navbar-header">
                                    <img src="lib.png" width="30px" height="30px" class="img-thumbnail">
                                    <a class="navbar-brand" href="signup.php">Online Library<i id="subspt">  one stop for all your book cravings</i></a>
                            </div>
                    
                    <ul class="navbar-nav navbar-right">
                        <li class="nav-item rightnav">
                            <a class="nav-link" href="admin/ad_index.php">Admin Login |</a>
                        </li>
                        <li class="nav-item rightnav">
                            <a class="nav-link" href="login.php">User Login</a>
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
            <br><h3>Registration Form</h3>
            <form action="register.php" method="post">
                
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="name">Unique ID *</label>
                    <input type="text" name="unid" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID *</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Phone Number *</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <button class="btn btn-primary" type="submit">Register</button>
            </form>

            </div>
        </div>
        

    </body>
   
 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</html>

<?php
    
?>