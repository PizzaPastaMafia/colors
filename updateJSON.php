<?php
    session_start();
    if($_SESSION['authenticated'] != true){
        header("Location: index.php");
        exit();
    }
    
    $color = $_REQUEST['color'];
    
    $filename = 'json/color_data.json';

    if (!file_exists($filename)){
        inizialize($filename);
    }

    $json=file_get_contents($filename);

    $obj = json_decode($json, true);

    $tmp = $obj[$color];

    $tmp++;
    
    $obj[$color] = $tmp;

    file_put_contents($filename, json_encode($obj));

    header("Location: stats.php");

    function inizialize($path){
        $content = '{"black":0,"darkGreen":0,"green":0,"lightGreen":0,"blue":0,"indigo":0,"lightBlue":0,"heavenly":0,"red":0,"orange":0,"amber":0,"yellow":0,"fucsia":0,"pink":0,"lightPink":0,"white":0}';

        fopen($path, "w");

        file_put_contents($path, $content);
    }
?>