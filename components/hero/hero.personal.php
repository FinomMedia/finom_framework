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

            <?php if ($signature):?>
                <img src="<?=$signature?>" class="heroSignature d-down-lg-none">
            <?php endif; ?>

            <div class="grid-6 heroServices">
                <?php if ($services):?>
                    <?php foreach ($services as $item):?>
                        <div class="heroServicesItem">
                            <img src="<?=$item->icon?>">

                            <div>
                                <span>
                                    <?=$item->title?>
                                </span>

                                <?php if ($item->subtitle):?>
                                    <span class="subtitle d-down-sm-none">
                                        <?=$item->subtitle?>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
