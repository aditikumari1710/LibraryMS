<?php
   require('common.php');
?>
<!DOCTYPE html>
<html>
    <body>
            <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-5 col-sm-12">
                   <form action="new_book.php" id=prof-form method="post">
                        <div class="form-group">
                            <label>Book Name:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                        <label>Book Number:</label>
                            <input type="text" class="form-control" name="bno">
                        </div>
                        <div class="form-group">
                            <label>Author Name</label>
                            <input type="text" class="form-control" name="aname">
                        </div>
                        <div class="form-group">
                            <label>Publisher Name:</label>
                            <input type="text" class="form-control" name="publish">
                        </div>
                        <div class="form-group">
                            <label>Genre:</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <div class="form-group">
                            <label>Price:</label>
                            <input type="text" class="form-control" name="bprice">
                        </div>
                        <button class="btn btn-success" type="submit" name="update">Add Book</button>
                   </form>
            </div>
            </div>
            
    </body>
</html>