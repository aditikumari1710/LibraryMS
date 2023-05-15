<?php
    	function get_book_count(){
            $connection = mysqli_connect("localhost:3060","root","");
            $db = mysqli_select_db($connection,"library");
            $book_count = 0;
            $query = "select count(*) as book_count from book";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)){
                $book_count = $row['book_count'];
            }
            return($book_count);
        }

        function get_request_count(){
            $connection = mysqli_connect("localhost:3060","root","");
            $db = mysqli_select_db($connection,"library");
            $req_count = 0;
            $query = "select count(*) as req_count from request_book";
            $query_run = mysqli_query($connection,$query);
            while ($row = mysqli_fetch_assoc($query_run)){
                $req_count = $row['req_count'];
            }
            return($req_count);
        }
    

?>