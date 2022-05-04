<ul class="navigation">
    <?php
        foreach ($data->header->links as $item) { ?>
            <li>
                <a
                        href="<?php echo $item->link; ?>"
                        class="<?php echo (substr($_SERVER['REQUEST_URI'], 1) == $item->link ? "active" : "")?>"
                        target="<?php echo ($item->target == true ? "_blank" : "_self"); ?>"
                >
                    <?php echo $item->title; ?>
                </a>
            </li>
        <?php }
    ?>
</ul>
