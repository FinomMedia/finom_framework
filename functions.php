<?php
    function component($folder, $filename) {
        $directory = "components/";

        if (is_file($filename)) {
            include $directory . $folder . $filename;
        }
    }