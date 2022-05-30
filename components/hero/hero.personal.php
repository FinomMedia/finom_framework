<div class="hero <?=$classes?>">
    <div class="background">
        <img src="<?=$background?>">
    </div>

    <div class="wrap grid-2">
        <div>
            <h1>
                <?=$title; ?>
            </h1>

            <?php if ($description):?>
                <p>
                    <?=$description?>
                </p>
            <?php endif; ?>

            <?php if ($services):?>
                <div class="services">
                    <?php foreach ($services as $item):?>
                        <div class="servicesItem col-6">
                            <img src="<?=$item->icon?>">

                            <span>
                                <?=$item->title?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
