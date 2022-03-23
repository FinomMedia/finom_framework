<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1648035910/Finom%20Sport/logo/finom-invest_logo_horizontal_2x_jk3sxt.png";
    $phone = "+420 123 456 789";
    $mail = "info@finomsport.cz";
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

        <ul class="navigation comingsoon">
            <li><a href=tel:<?php echo $phone; ?>;"><?php echo $phone; ?></a></li>
            <li><a href="mailto:<?php echo $mail; ?>;"><?php echo $mail; ?></a></li>
        </ul>
    </div>
</header>
