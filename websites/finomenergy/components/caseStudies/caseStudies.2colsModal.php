<div id="<?=$componentId?>" class="caseStudies">
    <div class="wrap tabs">
        <div class="tab-2">
            <label for="tab2-1">
                <?=$personalTitle?>
            </label>

            <input id="tab2-1" name="tabs-two" type="radio" checked="checked">

            <div class="wrap">
                <div class="row mt-3 mb-3">
                    <div class="col-3 first">
                        <h2>
                            <span>
                                <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1651498687/Finom%20Energy%20-%20web/icons/icon_cerpadlo_mah6cp.svg">
                            </span>

                            <?=$personal->pumps->title?>
                        </h2>
                    </div>

                    <div class="col-4">
                        <img src="<?=$image->desktop?>" class="desktopImage">
                        <img src="<?=$image->mobile?>" class="mobileImage">
                    </div>

                    <div class="col-3 second">
                        <?=$personal->pumps->title?>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-2">
            <label for="tab2-2">
                <?=$corporateTitle?>
            </label>

            <input id="tab2-2" name="tabs-two" type="radio">

            <div>
                <h4>Tab Two</h4>
                <p>Quisque sit amet turpis leo. Maecenas sed dolor mi. Pellentesque varius elit in neque ornare commodo ac non tellus. Mauris id iaculis quam. Donec eu felis quam. Morbi tristique lorem eget iaculis consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean at tellus eget risus tempus ultrices. Nam condimentum nisi enim, scelerisque faucibus lectus sodales at.</p>
            </div>
        </div>
    </div>
</div>
