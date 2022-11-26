<?php

    $color = $_REQUEST['color'];
    echo $color;
    $json = array();
    $filename = 'color_data.json';
    
    if (file_exists($filename)){
       $json=file_get_contents($filename);
    } 
    
    $tempArray=array(
     "color" => $color
    );

    $json=$json.json_encode($tempArray)."\r\n";
    
    file_put_contents('color_data.json', $json);
    
    echo '<pre>'.$json;


?>