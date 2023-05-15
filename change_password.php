<?php
    require("us_common.php");
?>
<!DOCTYPE html>
<html>
        
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form action="update_password.php" id=prof-form method="post">
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

    </body>
</html>