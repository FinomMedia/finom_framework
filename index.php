<?php
    include 'utils.php';

    Site::resolveSite();

    if(Site::$conf){
        Site::loadData();
        $data = Site::$data;
        include 'router.php';
    }
    else {
        include 'index_old.php';
    }
