<?php
    include 'partials/header.php';

    component("hero.finomsport", $data->hero);
    component("blog.finomsport", $data->hero);
    component("cooperation.finomsport", $data->hero);
    component("contact.finomsport", $data->hero);

    include 'partials/footer.php';
