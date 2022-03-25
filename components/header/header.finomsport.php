<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1647938524/Finom%20Sport/logo/logo_finomsport_default_vtvtmv.png";
?>

<header class="header header-3">
    <div class="wrap">
        <a href="#" class="logo">
            <img src="<?php echo $logoImage; ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <?php include 'headerLinks.finomsport.php';?>
    </div>
</header>
