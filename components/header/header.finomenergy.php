<?php
    $logoImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1651498649/Finom%20Energy%20-%20web/logo/logo-horizontal_src2vd.svg";
    $logoScrollImage = "https://res.cloudinary.com/patrik-vadura/image/upload/v1651573385/Finom%20Energy%20-%20web/logo/logo-horizontal_scroll_wityod.svg";
?>

<?php
    $web = $_GET['web'];
    $data = json_decode(file_get_contents("data/".$web.".json"));
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

        <ul class="navigation">
            <?php
                foreach ($data->header->links as $item) { ?>
                    <li>
                        <a
                                href="<?php echo $item->link; ?>"
                                class="<?php if($item->class) { echo $item->class; }; echo (substr($_SERVER['REQUEST_URI'], 1) == $item->link ? "active" : "")?>"
                                target="<?php echo ($item->target == true ? "_blank" : "_self"); ?>"
                        >
                            <?php echo $item->title; ?>
                        </a>
                    </li>
                <?php }
            ?>
        </ul>
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
