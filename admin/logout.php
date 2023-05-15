<?php

session_unset();
session_destroy();
header("Location:ad_index.php");
?>