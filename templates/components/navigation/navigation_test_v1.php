<?php
    namespace ProcessWire;

    $pages = wire()->webengine->web_root_page->children();
    bd($pages);
?>


<div style="padding: 2rem; background: tomato;">

    
    <ul>
        <?php foreach($pages as $page): ?>
            <a href="<?=$page->url?>"><?=$page->title?></a>
        <?php endforeach;?>
    </ul>
   

</div>