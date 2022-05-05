<div id="<?=$componentId?>" class="form">
    <div class="wrap">
        <div class="grid-1">
            <h2>
                <?=$title?>
            </h2>

            <h3>
                <?=$subtitle?>
            </h3>

            <div class="grid-3 form-manual">
                <?php foreach ($manual as $item):?>
                    <div class="item">
                        <h3>
                            <span>
                               <?=$item->id . '.'?>
                            </span>

                            <?=$item->title?>
                        </h3>
                    </div>
                <?php endforeach; ?>
            </div>

            <form class="form-boxed">
                <div class="row">
                    <div class="col-10">
                        <b>
                            <?=$contactInfo->title?>
                        </b>
                    </div>

                    <?php foreach ($contactInfo->items as $item):?>
                        <div class="input col-5">
                            <div class="input__label">
                                <?=$item->label?>
                            </div>

                            <div class="input__box">
                                <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mt-3">
                    <div class="col-10">
                        <b>
                            <?=$timeInterval->title?>
                        </b>
                    </div>

                    <?php foreach ($timeInterval->items as $item):?>
                        <div class="col-2">
                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    class="checkbox__input"
                                    <?=($item->checked == true) ? "checked" : ""?>
                                />

                                <span class="checkbox__checkbox">
                              <svg viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6.5L9 17.5L4 12.5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>

                                <p class="checkbox__text">
                                    <?=$item->label?>
                                </p>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mt-3">
                    <div class="col-10">
                        <b>
                            <?=$services->title?>
                        </b>
                    </div>

                    <?php foreach ($services->items as $item):?>
                        <div class="col-2">
                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    class="checkbox__input"
                                    <?=($item->checked == true) ? "checked" : ""?>
                                />

                                <span class="checkbox__checkbox">
                              <svg viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 6.5L9 17.5L4 12.5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </span>

                                <p class="checkbox__text">
                                    <?=$item->label?>
                                </p>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mt-3">
                    <div class="col-10">
                        <b>
                            <?=$moreInfo->title?>
                        </b>
                    </div>

                    <?php foreach ($moreInfo->items as $item):?>
                        <div class="input col-10">
                            <div class="input__box">
                                <textarea name="<?=$item->name?>" rows="<?=$item->rows?>" required></textarea>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="row mt-2">
                    <div class="col-10">
                        <b>
                            <?=$saleCode->title?>
                        </b>
                    </div>

                    <?php foreach ($saleCode->items as $item):?>
                        <div class="input col-10">
                            <div class="input__box">
                                <input type="<?=$item->type?>" name="<?=$item->name?>" required />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="action">
                    <a class="btn btnOutlinedSecondary disabled" type="submit" value="Submit">
                        <?=$sendButton?>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
