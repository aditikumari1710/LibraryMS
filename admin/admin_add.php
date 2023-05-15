<?php
    require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form action="new_admin.php" id=prof-form method="post">
                        <div class="form-group">
                            <label>Admin Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                        <label>Email:</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Mobile number</label>
                            <input type="text" class="form-control" name="mob">
                        </div>
                        <div class="form-group">
                            <label>Password (temporary):</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Unique Id:</label>
                            <input type="text" class="form-control" name="unid">
                        </div>
                        
                        <button class="btn btn-success" type="submit" name="update">Add Admin</button>
                   </form>
            </div>
            </div>
            
    </body>
</html>