<div id="<?=$componentId?>" class="caseStudies">
    <div class="wrap">
        <div class="tabbed">
            <input type="radio" id="tab1" name="css-tabs" checked>
            <input type="radio" id="tab2" name="css-tabs">

            <ul class="tabs">
                <li class="tab">
                    <label for="tab1">
                        <?=$personalTitle?>
                    </label>
                </li>
                <li class="tab">
                    <label for="tab2">
                        <?=$companyTitle?>
                    </label>
                </li>
            </ul>

            <?php foreach ($content as $item):?>
                <div class="tab-content">
                    <div class="row mt-3 mb-3">
                        <div class="col-3 first">
                            <h2>
                                <span>
                                    <img src="<?=$item->pumps->icon?>">
                                </span>
                                <?=$item->pumps->title?>
                            </h2>

                            <h4>
                                <?=$item->pumps->return?>
                            </h4>

                            <ul class="cons">
                                <?php foreach ($item->pumps->cons as $item):?>
                                    <li>
                                <span>
                                    <?=$item->number?>
                                </span>
                                        <?=$item->title?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="price">
                                <div class="priceItem">
                                    <?=$item->pumps->price->withoutDPH->label?>

                                    <span class="secondary">
                                        <?=$item->pumps->price->withoutDPH->price?>
                                    </span>
                                </div>

                                <div class="priceItem">
                                    <?=$item->pumps->price->withDPH->label?>

                                    <span class="primary">
                                        <?=$item->pumps->price->withDPH->price?>
                                    </span>
                                </div>
                            </div>

                            <a href="#<?=$item->pumps->modalId?>" class="btn btnPrimary mt-2">
                                <?=$detailButton?>
                            </a>

                            <?php component("modal.fullwidth-bottom", $data->caseStudies->personal->pumps); ?>
                        </div>

                        <div class="col-4">
                            <img src="<?=$image->desktop?>" class="desktopImage">
                            <img src="<?=$image->mobile?>" class="mobileImage">
                        </div>

                        <div class="col-3 second">
                            <h2>
                                <?=$item->solarPanels->title?>

                                <span>
                                    <img src="<?=$item->solarPanels->icon?>">
                                </span>
                            </h2>

                            <h4>
                                <?=$item->solarPanels->return?>
                            </h4>

                            <ul class="cons">
                                <?php foreach ($item->solarPanels->cons as $item):?>
                                    <li>
                                        <span>
                                            <?=$item->number?>
                                        </span>
                                        <?=$item->title?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="price">
                                <div class="priceItem">
                                    <?=$item->solarPanels->price->withoutDPH->label?>

                                    <span class="secondary">
                                        <?=$item->solarPanels->price->withoutDPH->price?>
                                    </span>
                                </div>

                                <div class="priceItem">
                                    <?=$item->solarPanels->price->withDPH->label?>

                                    <span class="primary">
                                        <?=$item->solarPanels->price->withDPH->price?>
                                    </span>
                                </div>
                            </div>

                            <a href="#<?=$item->solarPanels->modalId?>" class="btn btnSecondary mt-2">
                                <?=$detailButton?>
                            </a>

                            <?php component("modal.fullwidth-bottom", $data->caseStudies->personal->solarPanels); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
