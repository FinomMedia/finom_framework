<?php
    include 'header.php';

    if ($_GET['web'] == 'marak') {
        $component = 01;

        // hero
        include 'components/hero/hero.marak.php';

        // services
        include 'components/services/services.marak.php';

        // aboutUs
        include 'components/aboutUs/aboutUs.marak.php';

        // portfolio
        include 'components/portfolio/portfolio.marak.php';

        // reference
        include 'components/reference/reference.marak.php';

        // contact
        include 'components/contact/contact.marak.php';
    }

    if ($_GET['web'] == 'antonovic') {
        // hero
        include 'components/hero/hero.antonovic.php';

        // services
        include 'components/services/services.antonovic.php';

        // aboutUs
        include 'components/aboutUs/aboutUs.antonovic.php';

        // blog
        // include 'components/blog/blog.antonovic.php';

        // reference
        include 'components/cooperation/cooperation.antonovic.php';

        // contact
        include 'components/contact/contact.antonovic.php';
    }

    include 'footer.php';