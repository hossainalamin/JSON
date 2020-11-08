<?php
$con = mysqli_connect("localhost","root","","student") or die ("Error");
$sql = "SELECT * FROM tbl_students where id = {$_POST['id']}";
$result = mysqli_query($con,$sql) or die("NO data");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);
?> 