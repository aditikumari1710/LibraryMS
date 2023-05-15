<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form action="ad_update_password.php" id=prof-form method="post">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="text" class="form-control" value="" name="oldpassword">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="text" class="form-control" value="" name="newpassword">
                        </div>
                        
                        <button class="btn btn-success" type="submit" name="update">Save</button>
                   </form>
            </div>
            </div>

    </body>
</html>