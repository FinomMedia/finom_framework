<?php
  namespace ProcessWire;
?>


<div style="padding: 2rem; border: 2px dashed white;">
    MATRIX array
<?php foreach($data->subitems as $subitem) : ?>
    <?php xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
<?php endforeach; ?>

</div>