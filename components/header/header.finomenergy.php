<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1651498649/Finom%20Energy%20-%20web/logo/logo-horizontal_src2vd.svg";
    $logoScrollImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1651573385/Finom%20Energy%20-%20web/logo/logo-horizontal_scroll_wityod.svg";
?>

<header id="header" class="header">
    <div class="wrap">
        <a href="/" class="logo">
            <img src="<?php echo $logoImage; ?>"  />
        </a>

        <a href="/" class="logoScroll">
            <img src="<?php echo $logoScrollImage; ?>" />
        </a>

        <input class="navigationBtn" type="checkbox" id="navigationBtn" />

        <label class="navigationIcon" for="navigationBtn">
            <span class="navIcon"></span>
        </label>

        <?php include 'headerLinks.finomenergy.php';?>
    </div>
</header>

<script>
    window.onscroll = function () {
        scrollFunction()
    }

    function scrollFunction () {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById('header').classList.add('headerScroll')
        } else {
            document.getElementById('header').classList.remove('headerScroll')
        }
    }
</script>
