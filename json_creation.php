<?php
$conn = mysqli_connect('localhost','root','','student') or die ('connection failed');
$sql  = "SELECT * FROM tbl_students";
$result = mysqli_query($conn,$sql) or die("No such data");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
$json_data = json_encode($output,JSON_PRETTY_PRINT);
$file_name = 'demo-' . date("d-m-Y") . '.json';
if(file_put_contents("json/$file_name",$json_data)){
echo $file_name . " File Created.";
}else{
    echo "File Not created";
}
?>
