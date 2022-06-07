<?php
    

    $segment = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if(!$segment){
        include 'pages/index.php';
    }
    else{
        include "pages/$segment.php";
    }

    
    /*include 'partials/header.php';

    component("_blank.component", $data->blank);

    include 'partials/footer.php';*/

