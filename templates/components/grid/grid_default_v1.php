<?php 
    
    namespace ProcessWire;

    /*
        This is grid component.
    */
    
bd($data->xcf_grid->gridlayout);
?>

<div class="componentGrid grid <?=$data->xcf_grid->gridlayout?>" 
    style="padding: 2rem; background: tomato; ">
    <?= xcComponent("matrixarray",$data) ?>

</div>


<style>


<?php Templater::partialBegin("less")?>

    .grida{ --grid-min-item-size: 12rem;}
    .grid2{ --grid-min-item-size: ~"clamp( 6rem, 50vw, 26rem )"}
    .grid3{ --grid-min-item-size: ~"clamp( 6rem, 33%, 26rem )"}
    .grid4{ --grid-min-item-size: ~"clamp( 6rem, 25%, 26rem )"}
    .grid5{ --grid-min-item-size: ~"clamp( 6rem, 20%, 26rem )"}
    .grid6{ --grid-min-item-size: ~"clamp( 6rem, 16.666%, 26rem )"}

    <?php
    
    $this->addLessFile(__DIR__."/../../styles/composition/grid.css");
    
    ?>
<?php Templater::partialEnd()?>
</style>