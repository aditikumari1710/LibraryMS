<?php
	function get_admin_count(){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$admin_count = 0;
		$query = "select count(*) as admin_count from admin";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$admin_count = $row['admin_count'];
		}
		return($admin_count);
	}

	function get_user_count(){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$user_count = 0;
		$query = "select count(*) as user_count from user";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}

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

	function get_issue_book_count(){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$issue_book_count = 0;
		$query = "select count(*) as issue_book_count from issued_books";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$issue_book_count = $row['issue_book_count'];
		}
		return($issue_book_count);
	}

	function get_genre_count(){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$cat_count = 0;
		$query = "select count(distinct(genre)) as cat_count from book";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$cat_count = $row['cat_count'];
		}
		return($cat_count);
	}

	function get_requested_book_count(){
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

	function get_fb_count(){
		$connection = mysqli_connect("localhost:3060","root","");
		$db = mysqli_select_db($connection,"library");
		$fb_count = 0;
		$query = "select count(*) as fb_count from feedback";
		$query_run = mysqli_query($connection,$query);
		while ($row = mysqli_fetch_assoc($query_run)){
			$fb_count = $row['fb_count'];
		}
		return($fb_count);
	}
?>