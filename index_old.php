<?php
    include 'header.php';

    if ($_GET['web'] == 'marak') {
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

    if ($_GET['web'] == 'finomsportCP') {
        // coming soon
        include 'components/comingsoon/comingsoon.finomsport.php';
    }

    include 'footer.php';
