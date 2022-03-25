<?php
    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div class="hero hero-3">
    <div class="grid-4">
        <?php
            foreach ($data->hero->items as $item) { ?>
                <a href="<?php echo $item->link; ?>">
                    <div class="box">
                        <div class="background">
                            <img src="<?php echo $item->imgHover; ?>" class="hover">
                            <img src="<?php echo $item->img; ?>">
                        </div>

                        <h1>
                            <?php echo $item->title; ?>
                        </h1>

                        <p>
                            <?php echo $item->description; ?>
                        </p>
                    </div>
                </a>
            <?php }
        ?>
    </div>

    <div class="heroClaim">
        <?php echo '"'.$data->hero->claim.'"'; ?>
    </div>
</div>


