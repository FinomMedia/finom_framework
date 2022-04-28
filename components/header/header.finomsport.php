<?php
    $web = $_GET['web'];
    if($_SERVER['SERVER_NAME']=="finomsport.cz") {
        $web="finomsport";
    }
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<header class="header header-3">
    <div class="wrap">
        <a href="<?php echo $data->header->homePath; ?>" class="logo">
            <img src="<?php echo $data->logo; ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

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
    </div>
</header>
