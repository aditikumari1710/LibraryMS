<?php
    require('common.php');
    require('function.php');
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="row">

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Active Users:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Number of total users: <?php echo (get_user_count()); ?>
                            </p>
                                <a href="reg_user.php" class="btn btn-success">View Active Users</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Active Admins:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Number of total Admins: <?php echo (get_admin_count()); ?>
                            </p>
                                <a href="reg_admin.php" class="btn btn-primary">View Active Admins</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Registered Books:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Total Number of books:  <?php echo (get_book_count()); ?>
                            </p>
                                <a href="reg_book.php" class="btn btn-warning">View Book List</a>
                        </div> 
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Total Genre:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Total available genre: <?php echo (get_genre_count()); ?>
                            </p>
                                <a href="genre_list.php" class="btn btn-secondary">List of genre</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Requested Book:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Requested books:  <?php echo (get_requested_book_count()); ?>
                            </p>
                                <a href="request_list.php" class="btn btn-danger">View Request</a>
                        </div>
                    </div>
                    </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Issued Book:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Total number of books issued:  <?php echo (get_issue_book_count()); ?>
                            </p>
                                <a href="issue_book_list.php" class="btn btn-info">View issued books</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">User Feedback:</div>
                        <div class="card-body">
                            <p class="card-text">
                                Total feedbacks:  <?php echo (get_fb_count()); ?>
                            </p>
                                <a href="fb_list.php" class="btn btn-dark">View Feedbacks</a>
                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>