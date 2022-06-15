<?php
    namespace ProcessWire;
?>


<div style="padding: 2rem; background: tomato;">
    GRID s titulkem <?=$data->xcf_title?> a textem <?=$data->xcf_richtext?>

    <?php xcComponent("matrixarray",$data) ?>

</div>