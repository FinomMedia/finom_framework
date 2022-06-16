<?php
  namespace ProcessWire;
?>


<div style="padding: 2rem; border: 2px dashed white;">
    MATRIX array root

<?php foreach($data as $subitem) : ?>
  
    <?= xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
<?php endforeach; ?>

</div>