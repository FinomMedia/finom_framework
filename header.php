<?php
    $pageTitle = "Framework - FINOM";
    $fontFace = "https://res.cloudinary.com/patrik-vadura/raw/upload/v1641887298/fontFaces/BrandonGrotesque/fontBrandonGrotesque_gf3jjy.css";
?>

<!DOCTYPE html>
<html lang="cs-CZ">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>
            <?php echo $pageTitle; ?>
        </title>

        <?php
            $web = $_GET['web'];

            echo "<link rel='stylesheet/less' href='assets/css/config.$web.less'>";
        ?>

        <link rel="stylesheet" href="<?php echo $fontFace; ?>">
        <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
        <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    </head>

    <body id="body">

        <?php
            if ($_GET['web'] == 'marak') {
                include 'components/header/header.marak.php';
            }

            if ($_GET['web'] == 'antonovic') {
                include 'components/header/header.antonovic.php';
            }

            if ($_GET['web'] == 'finomsport') {
                include 'components/header/header.finomsport.php';
            }

            if ($_GET['web'] == 'finomsportCP') {
                include 'components/header/comingsoon/header.finomsport.php';
            }
        ?>
