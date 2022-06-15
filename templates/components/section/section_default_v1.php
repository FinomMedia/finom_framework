<?php
  namespace ProcessWire;

?>


<div style="padding: 2rem; background: grey;">
    SECTION s titulkem <?=$xcf_title?>


<?php foreach($data->subitems as $subitem) : ?>
    <?php xcComponent($subitem->getMatrixInfo()["type"],$subitem) ?>
<?php endforeach; ?>

</div>