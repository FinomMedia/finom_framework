<?php
    $footerCredits = "© 2022 Finom Energy";
    $footerCreatedBy = "Created by";
    $footerLogo = "https://res.cloudinary.com/patrik-vadura/image/upload/v1642160813/FINOM%20GROUP/Finom%20Media/logo/svg/finom-media_logo_claim_negative_nukouh.svg";
    $footerScroll = "https://res.cloudinary.com/patrik-vadura/image/upload/v1651663546/Finom%20Energy%20-%20web/icons/scrollToTop_uwi8oc.svg"
?>

<div class="footer footer-01">
    <div class="wrap">
        <div class="credits">
            <?php echo $footerCredits; ?>

            <span>
                <?php echo $footerCreatedBy; ?>

                <img src="<?php echo $footerLogo; ?>">
            </span>
        </div>

        <a href="#body" class="scroll">
            <img src="<?php echo $footerScroll; ?>">
        </a>
    </div>
</div>
