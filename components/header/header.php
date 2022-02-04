<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1641824770/marak_web/logo/marak_logo_square_amhaxk.png";
?>

<header class="header header-1">
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