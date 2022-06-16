<?php
    namespace ProcessWire;
?>


<div class="componentGrid" style="padding: 2rem; background: tomato;">
    <?= xcComponent("matrixarray",$data) ?>

</div>


<style>
    .componentGrid{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 1rem;
    }
</style>