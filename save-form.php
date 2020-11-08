<?php
if($_POST['name'] != '' && $_POST['age'] != '' && $_POST['city'] != ''){
    if(file_exists("json/form.json")){
    $current_data = file_get_contents("json/form.json");
    $array_data = json_decode($current_data,true);
    $new_data  = array(
        "name" => $_POST['name'],
        "age" => $_POST['age'],
        "city" => $_POST['city']
    );
    $array_data[] = $new_data;
    $json_data  = json_encode($array_data,JSON_PRETTY_PRINT);
    if(file_put_contents("json/form.json",$json_data)){
        echo "Data save successfully.";
    }else{
    echo "Data save uncessfull.";
    }
    }else{
    echo "File not exists.";
    }
}else{
    echo "<h2>All form fields are required</h2>";
}

?>