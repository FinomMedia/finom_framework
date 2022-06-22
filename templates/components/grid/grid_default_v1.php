<?php     
    namespace ProcessWire;
?>

<div class="componentGrid grid <?=$data->xcf_grid->gridlayout?>" style="" >
    <?= xcComponent("matrixarray",$data) ?>

</div>


<style>


<?php Templater::partialBegin("less")?>

    <?php
    $this->addLessFile(__DIR__."/../../styles/composition/grid.css");
    ?>
<?php Templater::partialEnd()?>
</style>