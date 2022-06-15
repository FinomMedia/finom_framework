<?php
    namespace ProcessWire;
?>


<div style="padding: 2rem; background: tomato;">
    GRID s titulkem <?=$data->xcf_title?> a textem <?=$data->xcf_richtext?>

    <?php foreach($data->subitems as $subitem) : ?>
        <?php xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
    <?php endforeach; ?>


</div>