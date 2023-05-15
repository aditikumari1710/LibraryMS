<?php
    require("us_common.php");
    require('user_fun.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color:whitesmoke;
            }
            #txt{
                font-weight: bold;
                background-color: bisque;
            }
        </style>
    </head>
    <body>
            <div class="col-md-3 col-sd-6">
                    <div class="card bg-light cd" style="width: 300px; margin-top:50px">
                        <div class="card-header">Book List</div>
                        <div class="card-body">
                            <p class="card-text">
                                Available books: <?php echo (get_book_count()); ?>
                            </p>
                                <a href="booklist.php" class="btn btn-success">View Books</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Request Book</div>
                        <div class="card-body">
                            <p class="card-text">
                                Active Requests: <?php echo (get_request_count()); ?>
                            </p>
                                <a href="request.php" class="btn btn-warning">Make Request</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sd-6">
                    <div class="card bg-light" style="width: 300px; margin-top:50px">
                        <div class="card-header">Approved Request</div>
                        <div class="card-body">
                            <p class="card-text">
                                Check approved request:
                            </p>
                                <a href="approved.php" class="btn btn-primary">Click</a>
                        </div>
                    </div>
                </div>
            </div>
                <br><marquee id="txt">Your Feedback is important for us<br>Please scroll down and submit your feedback.</marquee><br><br>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-5 col-sm-6">
                <div class="card bg-secondary" style="width: 300px; margin-top:50px">
                        <div class="card-header" style="color:aliceblue">Feedback/Raise Issue:</div>
                        <div class="card-body bg-light">
                            <p class="card-text">
                                Submit your feedback and issues here:
                            </p>
                                <a href="feedback.php" class="btn btn-info">Click</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>



    </body>
</html>