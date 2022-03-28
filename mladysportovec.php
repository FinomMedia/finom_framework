<?php
    include 'header.php';

    // hero
    include 'components/hero/simple/hero-mladysportovec.finomsport.php';

    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
    // content
?>
    <div class="wrap post2col post2col-01">
        <?php
            foreach ($data->pages->mladysportovec->posts as $item) { ?>
                <div class="item mb-2">
                    <div class="image">
                        <div class="badge">
                            <?php echo $item->sport; ?>
                        </div>

                        <img src="<?php echo $item->img; ?>">
                    </div>

                    <div class="content">
                        <h2>
                            <?php echo $item->title; ?>
                        </h2>


                        <h3>
                            <?php echo $item->subtitle; ?>
                        </h3>

                        <p>
                            <?php echo $item->description; ?>
                        </p>
                    </div>
                </div>
            <?php }
        ?>
    </div>

    <div class="benefits benefits-01">
        <div class="wrapS">
            <div class="grid-2">
                <?php
                foreach ($data->pages->mladysportovec->benefits as $item) { ?>
                    <div class="item">
                        <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                        <?php echo $item->title; ?>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
<?php
    // contact
    include 'components/contact/cta/contact-cta.finomsport.php';

    include 'footer.php';
