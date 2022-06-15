<?php namespace ProcessWire;

include "xc_template.php";

function xcComponent($name,$repeater_item = false){

    //dump($name);
    //dump($repeater_item);

    $tmpl = new XcTemplate(wire()->webengine->getComponentFile($name),$repeater_item);
    echo $tmpl->render();

}

