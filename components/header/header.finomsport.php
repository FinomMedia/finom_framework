<?php
    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<header class="header header-3">
    <div class="wrap">
        <a href="/" class="logo">
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
                        <a href="<?php echo $item->link; ?>">
                            <?php echo $item->title; ?>
                        </a>
                    </li>
                <?php }
            ?>
        </ul>
    </div>
</header>
