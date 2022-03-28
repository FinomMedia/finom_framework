<?php
    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div class="hero-simple hero-simple-1">
    <div class="wrap">
        <div class="background">
            <img src="<?php echo $data->pages->contact->hero->img; ?>">
        </div>

        <div class="content">
            <h1>
                <?php echo $data->pages->contact->hero->title; ?>
            </h1>

            <p>
                <?php echo $data->pages->contact->hero->description; ?>
            </p>
        </div>
    </div>
</div>

