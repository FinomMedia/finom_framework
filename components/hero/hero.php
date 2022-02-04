<?php
    $heroImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1641902355/marak_web/Webdesign_JM_02_xpi8qj.png";
    $heroTitle = "Jmenuji se <span>Ondřej Mařák</span>";
?>

<div class="hero hero-1">
    <div class="wrap">
        <div>
            <div class="social">
                <a href="https://www.facebook.com/ondrej.marak.5">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1641912491/marak_web/icons/icon_02_aoi5lu.svg">
                </a>

                <a href="https://www.instagram.com/ondrej_marak/">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1641912489/marak_web/icons/icon_01_qdu0ol.svg">
                </a>
            </div>

            <h1>
                <?php echo $heroTitle; ?>
            </h1>

            <div class="special">
                <span>Investor</span>
                <span>Podnikatel</span>
                <span>Poradce</span>
                <span>Investor</span>
                <span>Podnikatel</span>
                <span>Poradce</span>
            </div>

            <a href="#services" class="scroll"></a>
        </div>

        <div class="image">
            <img src="<?php echo $heroImage; ?>">
        </div>
    </div>
</div>