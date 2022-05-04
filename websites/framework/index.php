<?php 
    include 'partials/header.php';
?>

<div class="test" style="display:grid; grid-template-columns: 1fr 1fr 1fr;">


    <div style="background:#f0f0f0">        
        <?php component("blog.likefinomsport",$data->blog); ?>
    </div>


    <div style="background:#c5c5c5">
        <?php customComponent("blog.newlikefinomsport"); ?>
    </div>

    <div style="background:#c5c5c5">
        <?php customComponent("blog.newlikefinomsportdata",$data->blog); ?>
    </div>


    


<div>