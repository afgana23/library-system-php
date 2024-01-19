<?php
$conn = mysqli_connect("localhost","root","","library_system") or die("Connection Failed : " . mysqli_connect_error());
//$conn (hostname,db_username,db_pasword,db_name)
$base_url = "Location: http://localhost/library-system";

$limit = 5; //limit for paggintion
?>
