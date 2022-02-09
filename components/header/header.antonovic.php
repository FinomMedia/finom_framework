<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1642059695/antonovic_web/logo/logo_antonovic_oguqow.png";
?>

<header class="header header-2">
    <div class="wrap">
        <a href="#" class="logo">
            <img src="<?php echo $logoImage; ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <?php include 'headerLinks.php';?>
    </div>
</header>