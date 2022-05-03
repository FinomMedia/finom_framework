<?php
    $fontFace = "https://res.cloudinary.com/patrik-vadura/raw/upload/v1641887298/fontFaces/BrandonGrotesque/fontBrandonGrotesque_gf3jjy.css";
?>

<!DOCTYPE html>
<html lang="cs-CZ">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>
            <?php
                if ($_GET['web'] == 'marak') {
                    echo "Ondřej Mařák";
                }

                if ($_GET['web'] == 'antonovic') {
                    echo "Radim Antonovič";
                }

                if ($_GET['web'] == 'finomsport' OR $_SERVER['SERVER_NAME']=="finomsport.cz") {
                    echo "Finom Sport";
                }

                if ($_GET['web'] == 'finomsportCP') {
                    echo "Finom Sport";
                }

                if ($_GET['web'] == 'finomenergy') {
                    echo "Finom Energy";
                }
            ?>
        </title>

        <?php
            if ($_GET['web'] == 'marak') {
                echo "<link rel='stylesheet/less' href='assets/css/config.marak.less'>";
            }

            if ($_GET['web'] == 'antonovic') {
                echo "<link rel='stylesheet/less' href='assets/css/config.antonovic.less'>";
            }

            if ($_GET['web'] == 'finomsport' OR $_SERVER['SERVER_NAME']=="finomsport.cz") {
                echo "<link rel='stylesheet/less' href='assets/css/config.finomsport.less'>";
            }

            if ($_GET['web'] == 'finomsportCP') {
                echo "<link rel='stylesheet/less' href='assets/css/config.finomsportCP.less'>";
            }

            if ($_GET['web'] == 'finomenergy') {
                echo "<link rel='stylesheet/less' href='assets/css/config.finomenergy.less'>";
            }
        ?>

        <link rel="stylesheet" href="<?php echo $fontFace; ?>">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script src="https://cdn.jsdelivr.net/npm/less@4"></script>
        <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body id="body">

        <?php
            if ($_GET['web'] == 'marak') {
                include 'components/header/header.marak.php';
            }

            if ($_GET['web'] == 'antonovic') {
                include 'components/header/header.antonovic.php';
            }

            if ($_GET['web'] == 'finomsport' OR $_SERVER['SERVER_NAME']=="finomsport.cz") {
                include 'components/header/header.finomsport.php';
            }

            if ($_GET['web'] == 'finomsportCP') {
                include 'components/header/comingsoon/header.finomsportCP.php';
            }

            if ($_GET['web'] == 'finomenergy') {
                include 'components/header/header.finomenergy.php';
            }
        ?>
