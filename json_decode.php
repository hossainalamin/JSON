<?php
$json_string = 'json/my.json';
$json_data   = file_get_contents($json_string);
$output = json_decode($json_data,true);
// echo "<pre>";
// print_r($output);
// echo "</pre>"; 

echo '<table border = "1" width="100%">';
foreach($output as list("userid" => $userId ,"id" => $id, "title"=>$title)){
    echo "<tr><td>$userId</td><td>$id</td><td>$title</td></tr>";
}
echo "</table>";
?>