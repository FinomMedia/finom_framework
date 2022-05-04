<?php

    /*$data = json_decode(file_get_contents("websites/sites.json"));
    $data = get_object_vars($data);
    //var_dump($data);
    echo "Router funguje";
    echo "<br><br>";

    echo Framework::$site->title;

    $x = "halo";
    echo "<br><br>";
    include "test.php";*/


    include 'websites/'.Site::$conf->folder."/index.php";
