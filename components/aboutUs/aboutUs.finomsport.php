<?php
    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
?>

<div id="about" class="aboutUs aboutUs-03">
    <div class="wrap">
        <div class="grid-1">
            <div class="aboutUsContent">
                <h2 class="mb-2">
                    <?php echo $data->pages->contact->aboutUs->title; ?>
                </h2>

                <p>
                    <?php echo $data->pages->contact->aboutUs->description; ?>
                </p>
            </div>

            <div class="team team-01">
                <div class="grid-4 mt-3">
                    <?php
                    foreach ($data->pages->contact->aboutUs->team as $item) { ?>
                        <div class="item">
                            <img src="<?php echo $item->img; ?>">

                            <h3>
                                <?php echo $item->name; ?>
                            </h3>

                            <h4>
                                <?php echo $item->phone; ?>
                            </h4>

                            <h4>
                                <?php echo $item->email; ?>
                            </h4>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>