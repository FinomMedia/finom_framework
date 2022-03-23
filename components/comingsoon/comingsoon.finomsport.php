<?php
    $mediaContent = "https://res.cloudinary.com/patrik-vadura/image/upload/v1648036271/Finom%20Sport/backgrounds/background_web_blue_01_ij4dpf.png";
    // https://ak.picdn.net/shutterstock/videos/1016072332/preview/stock-footage-professor-playing-with-ball-with-his-students-teacher-turns-lecture-into-a-game-with-help-of-a.webm
    $comingsoonTitle = "Již brzy";
    $comingsoonSubtitle = '"Zabezpečujeme vaši finanční budoucnost."';
?>

<div class="comingSoon comingSoon-1">
    <div class="background">
        <!--
        <video autoplay muted loop>
            <source src="<?php echo $mediaContent; ?>">
        </video>
        -->
        <img src="<?php echo $mediaContent; ?>">
    </div>

    <!--<div class="overlay" />-->

    <div class="wrap grid-2">
        <div>
            <h1>
                <?php echo $comingsoonTitle; ?>
            </h1>

            <hr />

            <h2>
                <?php echo $comingsoonSubtitle; ?>
            </h2>

            <div class="benefits">
                <div class="benefitsItem">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                    Mladý sportovec
                </div>

                <div class="benefitsItem">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                    Profesionál
                </div>

                <div class="benefitsItem">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                    Sportovní klub
                </div>

                <div class="benefitsItem">
                    <img src="https://res.cloudinary.com/patrik-vadura/image/upload/v1648042795/Finom%20Sport/icon_check_y7apzj.svg">
                    Agent, trenér
                </div>
            </div>
        </div>
    </div>
</div>
